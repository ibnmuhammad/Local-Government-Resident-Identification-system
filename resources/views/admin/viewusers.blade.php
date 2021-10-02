@extends('layouts.appadmin')

@section('content')
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">View Staff</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">View Staffs</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Staff List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="stafftable" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Username</th>
                                  <th>Email</th>
                                  <th>Role</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (count($users) > 0) --}}
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                              {{-- <a class="btn btn-info btn-sm" href="#">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                              </a> --}}
                                            <a class="btn btn-danger btn-sm" onclick="return myFunction();">
                                              <form action="{{ route('admin.destroy', [$user->id]) }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                  <i class="fas fa-trash">
                                                  </i>
                                                  Delete
                                                </button>
                                              </form>
                                            </a>
                                            <script>
                                              function myFunction() {
                                                  if(!confirm("Are you sure you want to delete this?"))
                                                  event.preventDefault();
                                              }
                                             </script>
                                          </td>
                                          </tr>
                                        @endforeach
                                    {{-- @endif --}}
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                    </div>
                </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
@endsection