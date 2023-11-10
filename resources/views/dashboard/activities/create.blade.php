@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2 class="my-4">Tambah Data Aktivitas</h2>


  <div class="col-8">
    <form action="/dashboard/activities" method="post">
      @csrf
      <div class="mb-3">
        <label for="name"class="form-label">Judul</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug') }}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
        <p class="text-danger">
          {{ $message }}
        </p>
        @enderror
        <input id="body" type="hidden" name="body" required value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
  

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });
  </script>

</main>
@endsection