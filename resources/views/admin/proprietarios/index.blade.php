
@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Lista de Proprietários</h1>

        <a href="{{ route('proprietarios.create') }}" class="btn btn-success">Adicionar Proprietário</a>

        @if(count($proprietarios) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proprietarios as $proprietario)
                        <tr>
                            <td>{{ $proprietario->nome }}</td>
                            <td>{{ $proprietario->email }}</td>
                            <td>
                                <a href="{{ route('proprietarios.show', $proprietario->id) }}" class="btn btn-info">Visualizar</a>
                                <a href="{{ route('proprietarios.edit', $proprietario->id) }}" class="btn btn-primary">Editar</a>
                                
                                <form class="form-delete d-inline-block" action="{{ route('proprietarios.destroy', $proprietario->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum proprietário encontrado.</p>
        @endif
    </div>
@endsection
