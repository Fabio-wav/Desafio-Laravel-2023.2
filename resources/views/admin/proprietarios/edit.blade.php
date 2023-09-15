@extends('layouts.master')
@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Proprietario')
        @slot('url', route('proprietarios.update', $proprietario->id))
        @slot('form')
            @include('admin.proprietarios.form', ['edit' => true])
        @endslot
    @endcomponent

@endsection
