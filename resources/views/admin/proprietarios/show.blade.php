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
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $proprietario->nome }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email" class="required">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $proprietario->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="cpf" class="required">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $proprietario->cpf }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento" class="required">Data de Nascimento</label>
                        <input type="date" name="dataNascimento" id="dataNascimento" class="form-control" value="{{ $proprietario->dataNascimento }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="endereco" class="required">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $proprietario->endereco }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $proprietario->telefone }}" disabled>
                    </div>
                    
                    <img src="{{ asset('/storage/storage/foto_proprietarios/' . $proprietario->foto) }}" alt="Foto do Proprietario" class="img-fluid" style="max-height: 200px;">
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('proprietarios.edit', $proprietario->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('proprietarios.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
</div>
@endsection
