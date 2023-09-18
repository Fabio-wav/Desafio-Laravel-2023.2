<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Consulta;

class PdfController extends Controller
{
    public function criaPdf()
    {
        $anosMesesUnicos = Consulta::selectRaw('YEAR(dataHoraInicio) as ano, MONTH(dataHoraInicio) as mes')
            ->groupBy('ano', 'mes')
            ->orderBy('ano', 'desc')
            ->orderBy('mes', 'desc')
            ->get();

        $consultasPorMes = [];

        foreach ($anosMesesUnicos as $anoMes) {
            $ano = $anoMes->ano;
            $mes = $anoMes->mes;

            $consultas = Consulta::whereYear('dataHoraInicio', $ano)
                ->whereMonth('dataHoraInicio', $mes)
                ->get();

            $consultasPorMes[] = [
                'ano' => $ano,
                'mes' => $mes,
                'consultas' => $consultas,
            ];
        }

        $pdf = PDF::loadView('pdf.pdf-template', [
            'consultasPorMes' => $consultasPorMes,
        ]);

        $relatorioConsultas = 'relatorio_' . date('YmdHis') . '.pdf';

        return $pdf->setPaper('A4')->stream($relatorioConsultas);
    }
}
