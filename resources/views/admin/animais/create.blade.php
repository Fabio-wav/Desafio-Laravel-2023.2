


@extends('layouts.master')
@section('content')

    @component('admin.components.create')
        @slot('title', 'Cadastrar Animal')
        @slot('url', route('animais.store'))
        @slot('form')
            @include('admin.animais.form')
        @endslot
    @endcomponent

@endsection
