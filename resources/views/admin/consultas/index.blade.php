
@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Lista de Consultas</h1>

        <a href="{{ route('consultas.create') }}" class="btn btn-success">Adicionar Consulta</a>

        @if(count($consultas) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Animal</th>
                        <th>Funcionario</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consultas as $consulta)
                        <tr>
                            <td>{{ $consulta->animal->nome }}</td>
                            <td>{{ $consulta->user->name }}</td>
                            <td>
                                <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-info">Visualizar</a>
                                <a href="{{ route('consultas.edit', $consulta->id) }}" class="btn btn-primary">Editar</a>
                                
                                <form class="form-delete d-inline-block" action="{{ route('consultas.destroy', $consulta->id) }}" method="post">
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
            <p>Nenhuma consulta encontrada.</p>
        @endif
    </div>
@endsection
