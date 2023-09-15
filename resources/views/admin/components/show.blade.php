@extends('layouts.app')
@section('content')
<div class="col-md-10 offset-md-1 col-12 mt-4">
    <div class="card card-outline card-dark">
        <div class="card-header">
            <h3 class="card-title title-form">{{ $title ?? null }}</h3>
        </div>
        <div class="card-body">
            <form id="form-show" action="#" method="post" enctype="multipart/form-data">
                @csrf
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
                <div class="form-group">
                    <label for="endereco" class="required">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $proprietario->endereco }}" disabled>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $proprietario->telefone }}" disabled>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    @if(isset($proprietario->foto))
                        <img src="{{ asset($proprietario->foto) }}" alt="Foto" class="img-fluid">
                    @else
                        <p>Sem foto disponível</p>
                    @endif
                </div>
            </form>
        </div>
        <div class="card-footer">
            {{ $back ?? null }}
        </div>
    </div>
</div>
@endsection
