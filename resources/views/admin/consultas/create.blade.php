


@extends('layouts.master')
@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Consulta')
        @slot('url', route('consultas.store'))
        @slot('form')
            @include('admin.consultas.form')
        @endslot
    @endcomponent

@endsection
