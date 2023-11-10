@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2 class="my-4">Edit Data Aktivitas</h2>


  <div class="col-8">
    <form action="/dashboard/activities/{{ $activity->slug }}" method="post">
      @method('patch')
      @csrf
      <div class="mb-3">
        <label for="name"class="form-label">Judul</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name', $activity->name) }}">
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" required value="{{ old('slug', $activity->slug) }}">
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
        <input id="body" type="hidden" name="body" required value="{{ old('body', $activity->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
  

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });
  </script>

</main>
@endsection