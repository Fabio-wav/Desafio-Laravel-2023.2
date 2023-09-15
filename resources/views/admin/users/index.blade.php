
@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Lista de Funcionários</h1>

        <a href="{{ route('users.create') }}" class="btn btn-success">Adicionar Funcionário</a>

        @if(count($users) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Visualizar</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
                                
                                <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
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
            <p>Nenhum Funcionário encontrado.</p>
        @endif
    </div>
@endsection
