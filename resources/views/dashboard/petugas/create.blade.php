@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2 class="my-4">Tambah Data Petugas</h2>

  <div class="col-8">
    <form action="/dashboard/petugas" method="post"> {{--  --}}
      @csrf
      <div class="mb-3">
        <label for="name"class="form-label">Nama</label>
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
        <label for="task" class="form-label">Task</label>
        <input type="text" name="task" class="form-control @error('task') is-invalid @enderror" id="task" required value="{{ old('task') }}">
        @error('task')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="taskid" class="form-label">Task ID</label>
        <input type="text" name="task_id" class="form-control @error('taskid') is-invalid @enderror" id="taskid" required value="{{ old('taskid') }}">
        @error('taskid')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" required value="{{ old('phone') }}">
        @error('phone')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</main>
@endsection