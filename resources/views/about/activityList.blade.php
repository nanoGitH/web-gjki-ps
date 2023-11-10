@extends('layouts.main')

@section('container')

  <div class="container">
  <h1 class="text-center my-5">{{ $title }}</h1>
    <div class="row">
      @foreach ($activities as $activity)
        <div class="col-4">
          <div class="card mb-4">
            <img src="https://source.unsplash.com/500x400?{{ $activity->name }}" class="card-img-top" alt="{{ $activity->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $activity->name }}</h5>
              <p class="card-text">{{ $activity->excerpt }}</p>
              <a href="/about/activities/{{ $activity->slug }}" class="btn btn-primary">read more..</a>
            </div>
          </div>
        </div>  
      @endforeach
      
    </div>
  </div>
@endsection