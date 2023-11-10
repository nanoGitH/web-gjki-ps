@extends('layouts.main')

@section('container')
  <div class="container">
    <h1 class="text-center my-5">{{ $title }}</h1>
    <div class="row justify-content-center">
      @foreach ($petugas as $ptg)
        <div class="col-3">
          <div class="card">
            <img src="https://source.unsplash.com/500x400?face" class="card-img-top" alt="{{ $ptg->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $ptg->name }}</h5>
              <p class="card-text">{{ $ptg->task }}</p>
              <a href="/about/petugas/{{ $ptg->slug }}" class="btn btn-primary">Detail</a>
            </div>
          </div>
        </div>  
      @endforeach
      
    </div>
  </div>
@endsection