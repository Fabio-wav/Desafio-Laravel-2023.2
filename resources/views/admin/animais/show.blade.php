@extends('adminlte::page')
@section('content')
<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-dark">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Proprietario</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome" class="required">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $animal->nome }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email" class="required">Raça</label>
                        <input type="email" name="raca" id="raca" class="form-control" value="{{ $animal->raca }}" disabled>
                    </div>
                     <div class="form-group">
                        <label for="proprietario" class="required">Proprietário</label>
                        <input type="text" name="proprietario" id="proprietario" class="form-control" value="{{ $animal->proprietario->nome }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento" class="required">Data de Nascimento</label>
                        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ $animal->dataNascimento }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tratamentosRealizados" class="required">Tratamentos Realizados</label>
                        <input type="text" name="tratamentosRealizados" id="tratamentosRealizados" class="form-control" value="{{ $animal->tratamentosRealizados }}" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('animais.edit', $animal->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('animais.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
</div>
@endsection
