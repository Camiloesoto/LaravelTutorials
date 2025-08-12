@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Get in Touch</h3>
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                            <h5>Email</h5>
                            <p class="text-muted">{{ $email }}</p>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                            <h5>Address</h5>
                            <p class="text-muted">{{ $address }}</p>
                        </div>
                        <div class="col-md-4 text-center mb-3">
                            <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                            <h5>Phone</h5>
                            <p class="text-muted">{{ $phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
