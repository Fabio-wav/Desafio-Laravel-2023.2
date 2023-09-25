@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar E-mail para Proprietários</div>

                <div class="card-body">
                    <form action="{{ route('enviar.emails') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="mensagem">Digite sua mensagem:</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar E-mail</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection