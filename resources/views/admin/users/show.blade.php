@extends('adminlte::page')
@section('content')
<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-dark">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Funcionário</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome" class="required">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email" class="required">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="periodo" class="required">Periodo de Trabalho</label>
                        <input type="text" name="periodo" id="periodo" class="form-control" value="{{ $user->periodo }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento" class="required">Data de Nascimento</label>
                        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ $user->dataNascimento }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="endereco" class="required">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $user->endereco }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $user->telefone }}" disabled>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('users.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
</div>
@endsection
