@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2>Daftar Petugas</h2>
  @if (session()->has('success'))
  <div class="col-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  @endif
  <a href="/dashboard/petugas/create" class="btn btn-info">Tambah Data</a>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Task</th>
          <th scope="col">Phone</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($petugas as $ptg)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ptg->name }}</td>
            <td>{{ $ptg->task }}</td>
            <td>{{ $ptg->phone }}</td>
            <td>
              <a href="/dashboard/petugas/{{ $ptg->slug }}" class="badge bg-primary"><span data-feather="clipboard"></a>
                <a href="/dashboard/petugas/{{ $ptg->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/petugas/{{ $ptg->slug }}" method="post" class="d-inline">
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