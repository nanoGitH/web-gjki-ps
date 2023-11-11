@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h3>Nama: {{ $petugas->name }}</h3>
  <p>{{ $petugas->slug }}</p>

  <p>Tugas: {{ $petugas->task }}</p>
  <p>Telepon: {{  $petugas->phone  }}</p>

  <a href="/dashboard/petugas" class="btn btn-primary"><span data-feather="arrow-left"></span> back</a>
  <a href="/dashboard/petugas/{{ $petugas->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> edit</a>
</main>
@endsection