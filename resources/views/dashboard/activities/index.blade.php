@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2>Daftar Aktivitas</h2>
  @if (session()->has('success'))
  <div class="col-4">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  </div>
  @endif
  <a href="/dashboard/activities/create" class="btn btn-info">Tambah Data</a>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Slug</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($activities as $activity)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $activity->name }}</td>
            <td>{{ $activity->slug }}</td>
            <td>{{ $activity->image }}</td>
            <td>
              <a href="/dashboard/activities/{{ $activity->slug }}" class="badge bg-primary"><span data-feather="clipboard"></span></a>
              <a href="/dashboard/activities/{{ $activity->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/activities/{{ $activity->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('hapus data?')"><span data-feather="trash"></button>
              </form>
            </td>
          </tr>
        @endforeach        
      </tbody>
    </table>
  </div>
</main>
@endsection