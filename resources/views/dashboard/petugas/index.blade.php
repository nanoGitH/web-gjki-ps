@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <h2>Daftar Petugas</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Task</th>
          <th scope="col">Phone</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($petugas as $ptg)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $ptg->name }}</td>
            <td>{{ $ptg->task }}</td>
            <td>{{ $ptg->phone }}</td>
          </tr>
        @endforeach        
      </tbody>
    </table>
  </div>
</main>
@endsection