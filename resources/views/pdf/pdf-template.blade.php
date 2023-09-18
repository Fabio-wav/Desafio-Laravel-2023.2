<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Seus cabeçalhos HTML aqui -->
</head>
<body>
    <h1>Relatório de Consultas</h1>
    <h3>Funcionário: {{ Auth::user()->name }}</h3>
    <h3>Data e Hora de Emissão: {{ now()->format('d/m/Y H:i:s') }}</h3>

    @foreach($consultasPorMes as $consultaPorMes)
    <h2>Ano: {{ $consultaPorMes['ano'] }} - Mês: {{ date('F', mktime(0, 0, 0, $consultaPorMes['mes'], 1)) }}</h2>


        <table>
            <thead>
                <tr>
                    <th>Animal</th>
                    <th>Proprietário</th>
                    <th>Tratamento</th>
                    <th>Data e Hora da Consulta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consultaPorMes['consultas'] as $consulta)
                    <tr>
                        <td>{{ $consulta->animal->nome }}</td>
                        <td>{{ $consulta->animal->proprietario->nome }}</td>
                        <td>{{ $consulta->tratamento }}</td>
                        <td>{{ $consulta->dataHoraInicio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</body>
</html>
