@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Escritorio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('Iniciaste sesion!') }}</p>
                    <p><a href="{{ route('logout') }}">Salir</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
