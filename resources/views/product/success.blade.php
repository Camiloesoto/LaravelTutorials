@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h4 class="mb-0">Success!</h4>
        </div>
        <div class="card-body text-center">
          <div class="mb-4">
            <i class="fas fa-check-circle fa-5x text-success"></i>
          </div>
          <h3 class="text-success mb-3">Product Created</h3>
          <p class="lead">Your product has been created successfully!</p>
          <div class="mt-4">
            <a href="{{ route('product.index') }}" class="btn btn-primary me-2">View All Products</a>
            <a href="{{ route('product.create') }}" class="btn btn-success">Create Another Product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
