@extends('layouts.appsuperadmin')

@section('content')
<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Balozi Nyumba Kumi wa mtaa wa {{ $mtaa->street }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">{{ $mtaa->street }}</li>
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
                            {{-- <div class="card-header">
                              <h3 class="card-title">Registered residents of {{ $mtaa->street }}</h3>
                            </div> --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="balozi" class="table table-bordered table-hover" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Jina</th>
                                    <th>Namba ya Simu</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if (count($balozi) > 0)
                                        @foreach ($balozi as $bal)
                                            <tr>
                                                <td>{{ $bal->name }}</td>
                                                <td>{{ $bal->phonenumber}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
  </div>
  <!-- ./wrapper -->
@endsection