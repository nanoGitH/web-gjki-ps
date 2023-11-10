@extends('layouts.main')

@section('container')
  <h1 class="text-center my-5">Tasks</h1>
  <div class="container">
    <div class="row">
      @foreach ($tasks as $task)
        <div class="col-4">
          <a href="/about/task/{{ $task->slug }}">
            <div class="card bg-dark text-white mb-4 shadow">
              <img src="https://source.unsplash.com/500x500?{{ $task->slug }}" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title" style="text-shadow: 2px 2px 2px black">{{ $task->name }}</h5>
                {{-- <p class="card-text">Last updated 3 mins ago</p> --}}
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection