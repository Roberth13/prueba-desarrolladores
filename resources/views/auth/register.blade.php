@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="text-center mb-18">
            <img src="{{ asset('logo.png') }}" class="logo" />
        </div>
        <div class="card card-custom">             
            <div class="card-body"> 
                <div id="alert-msg" class="alert" role="alert" style="display:none">
                    A simple danger alert—check it out!
                </div>
                <form method="POST" action="javascript:void(0)" id="register-form">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <h1>Crear cuenta</h1>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group">
                            <label>Tu nombre</label>
                            <input id="nombres" type="text" class="form-control" name="name" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input id="correo" type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input id="contrasena" type="password" class="form-control" name="password" required>
                            <div class="form-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info" viewBox="0 0 16 16">
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                                La contraseña debe tener al menos seis caracteres.
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group">
                            <label>Vuelve a escribir la contraseña</label>
                            <input id="contrasena_rp" type="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-register w-100" id="submit-form">
                                Crear tu cuenta de Amazon
                            </button>
                        </div>
                    </div>

                    <div class="row mt-18 mb-26">
                        <p class="links">Al crear una cuenta, aceptas las <a href="#">Condiciones de uso</a> y el <a href="#">Aviso de privacidad</a> de Amazon.</p>
                    </div>
                </form>
            </div>
            <div class="card-footer text-start">
                <p>¿Ya tienes una cuenta? <a>Iniciar sesión 
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                            </svg>
                </a></p>
            </div>
        </div>
    </div>
</div>
@endsection
