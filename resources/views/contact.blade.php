@extends('layouts.main')

@section('container')
<div class="container">
  <h1 class="my-5">Contact Us</h1>
  <div class="row">
    <div class="col">
      <h4>GJKI PEMATANGSIANTAR</h4>
      <p>Jl. Parapat<br>Pematangsiantar, Sumatra Utara<br>0812-3456-7890</p>
    </div>
  </div>

  <div class="row my-5">
    <div class="col-6">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" placeholder="name example">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email </label>
          <input type="email" class="form-control" id="email" placeholder="email@example.com">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Pesan</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  
</div>
@endsection