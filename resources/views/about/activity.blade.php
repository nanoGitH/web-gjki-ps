@extends('layouts.main')

@section('container')
  <h1>{{ $activity->name }}</h1>

  <p>{{ $activity->body }}</p>
@endsection