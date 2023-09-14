@extends('layouts.app')

@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Proprietario')
        @slot('url', route('proprietarios.store'))
        @slot('form')
            @include('admin.proprietarios.form')
        @endslot
    @endcomponent

@endsection
