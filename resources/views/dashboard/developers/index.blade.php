@extends('dashboard.layouts.main')
@section('container')

<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-3 border-bottom">
      <h1 class="h2">Developers List</h1>
    </div>
  
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{session('success')}}
    </div>
    @endif
      <div class="table-responsive col-lg-12">
        <a href="/dashboard/developers/create" class="btn btn-primary mb-3">Add Developers</a>
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Position</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              {{-- @foreach($users  as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->nik}}</td>
                <td>{{ $user->user->name}}</td>
                <td>{{ $user->user->email}}</td>
                <td>{{ $user->umur}}</td>
                <td>{{ $user->jenis_kelamin}}</td>
                <td>{{ $user->user->phone_number}}</td>
                <td>{{ $user->user->created_at->format('d-m-Y')}}</td>
                <td>{{ $user->user->status}}</td>
                <td>
                    <a href="/admin/pekerja/{{ $user->id }}/edit" class="badge bg-warning"><span><svg class="icon me">
                    <use xlink:href="/vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                    </svg></span></a>
  
                    <form action="/admin/pekerja/{{ $user->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span><svg class="icon me">
                        <use xlink:href="/vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
                      </svg></span></button>
                    </form>
  
                </td>
              </tr>
              @endforeach --}}
          </tbody>
        </table>
      </div>
  </div>

@endsection