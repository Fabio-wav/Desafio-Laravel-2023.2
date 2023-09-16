@extends('layouts.master')
@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar animal')
        @slot('url', route('animais.update', $animal->id))
        @slot('form')
            @include('admin.animais.form', ['edit' => true])
        @endslot
    @endcomponent

@endsection