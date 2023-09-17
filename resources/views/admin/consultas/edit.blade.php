@extends('layouts.master')
@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar consulta')
        @slot('url', route('consultas.update', $consulta->id))
        @slot('form')
            @include('admin.consultas.form', ['edit' => true])
        @endslot
    @endcomponent

@endsection