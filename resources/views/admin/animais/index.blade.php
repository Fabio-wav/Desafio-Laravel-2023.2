
@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Lista de Animais</h1>

        <a href="{{ route('animais.create') }}" class="btn btn-success">Adicionar Animal</a>

        @if(count($animais) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Raça</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($animais as $animal)
                        <tr>
                            <td>{{ $animal->nome }}</td>
                            <td>{{ $animal->raca }}</td>
                            <td>
                                <a href="{{ route('animais.show', $animal->id) }}" class="btn btn-info">Visualizar</a>
                                <a href="{{ route('animais.edit', $animal->id) }}" class="btn btn-primary">Editar</a>
                                
                                <form class="form-delete d-inline-block" action="{{ route('animais.destroy', $animal->id) }}" method="post">
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
            <p>Nenhum animal encontrado.</p>
        @endif
    </div>
@endsection
