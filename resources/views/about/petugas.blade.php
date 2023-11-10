@extends('layouts.main')

@section('container')
  <h1>{{ $petugas->name }}</h1>

  <p>{{ $petugas->body }}</p>
@endsection