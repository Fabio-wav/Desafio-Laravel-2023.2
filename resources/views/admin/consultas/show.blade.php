@extends('adminlte::page')
@section('content')
<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-dark">
        <div class="card-header">
            <h3 class="card-title">Detalhes do dataHoraInicio</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_id" class="required">Nome</label>
                        <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $consulta->user_id }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="custo" class="required">Custo</label>
                        <input type="text" name="custo" id="custo" class="form-control" value="{{ $consulta->custo }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dataHoraInicio" class="required">Data Hora Inicio</label>
                        <input type="text" name="dataHoraInicio" id="dataHoraInicio" class="form-control" value="{{ $consulta->dataHoraInicio }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dataHoraFim" class="required">Data Hora Fim</label>
                        <input type="text" name="dataHoraFim" id="dataHoraFim" class="form-control" value="{{ $consulta->dataHoraFim }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tratamento" class="required">Tratamentos</label>
                        <input type="text" name="tratamento" id="tratamento" class="form-control" value="{{ $consulta->tratamento }}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('animais.edit', $consulta->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('animais.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
</div>
@endsection
