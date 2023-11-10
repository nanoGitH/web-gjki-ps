@extends('layouts.main')

@section('container')
@if (session()->has('loginError'))
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>
</div>
@endif


  <main class="form-signin">
    <form action="/login" method="post">
      @csrf
      <img class="mb-4" src="/img/gjki-logo-new.png" alt="" width="72" alt="logo">
      <h1 class="h3 mb-3 fw-normal">Login</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
  
@endsection