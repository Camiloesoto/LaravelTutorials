@extends('layouts.app')
@section('title', 'Contacto - Online Store')
@section('subtitle', 'Información de Contacto')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Información de Contacto</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Correo -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                                <h5 class="card-title">Correo Electrónico</h5>
                                <p class="card-text text-primary fw-bold">soto@eafit.edu.co</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Teléfono -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-phone fa-3x text-success mb-3"></i>
                                <h5 class="card-title">Teléfono</h5>
                                <p class="card-text text-success fw-bold">+57 314 583 6728</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dirección -->
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marker-alt fa-3x text-info mb-3"></i>
                                <h5 class="card-title">Dirección</h5>
                                <p class="card-text text-info fw-bold">Carrera 48 #4 - 85</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('home.index') }}" class="btn btn-primary">
                        Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
