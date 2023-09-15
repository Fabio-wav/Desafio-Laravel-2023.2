@extends('layouts.master')
@section('content')

    @component('admin.components.edit')
        @slot('title', 'Editar Funcionário')
        @slot('url', route('users.update', $user->id))
        @slot('form')
            @include('admin.users.form', ['edit' => true])
        @endslot
    @endcomponent

@endsection
