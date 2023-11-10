@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h3>{{ $activity->name }}</h3>
  <p>{{ $activity->slug }}</p>

  <a href="/dashboard/activities" class="btn btn-primary"><span data-feather="arrow-left"></span> back</a>
  <a href="/dashboard/posts/{{ $activity->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> edit</a>

  <p>{{ $activity->img }}</p>
  <p>{!! $activity->body !!}</p>
</main>
@endsection