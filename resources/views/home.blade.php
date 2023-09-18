@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row card-header card-outline cor-backend" style="justify-content:center">

        <div class="col-lg-3 col-6">
            <a href="{{ route('home') }}">
            <a href="{{ route('gerar.pdf') }}">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Relatório</h3>
                        <p>Gerar Relatório de Consultas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                        <i class="far fa-id-badge"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop