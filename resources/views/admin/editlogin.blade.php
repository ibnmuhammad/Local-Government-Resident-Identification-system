@extends('layouts.appadmin')

@section('content')

<div class="wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div> --}}
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Account Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Edit Account Details</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <section class="content">
                    
                  <div class="container-fluid">
                    <form method="POST" action="{{ route('admin.updatelogin') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="newpassword" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                          <div class="col-md-6">
                              <input id="newpassword" type="password" class="form-control" name="newpassword" required>
                          </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label for="newpassword2" class="col-md-4 col-form-label text-md-right">{{ __('Confirm new Password') }}</label>

                        <div class="col-md-6">
                            <input id="newpassword2" type="password" class="form-control" name="newpassword2" required>
                        </div>
                    </div> --}}

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Update details') }}
                              </button>
                          </div>
                      </div>
                  </form>
                  </div>
              </section>
            </div> 
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
  </div>
  <!-- ./wrapper -->
@endsection