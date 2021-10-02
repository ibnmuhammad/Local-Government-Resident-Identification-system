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
              <h1 class="m-0">Local Governments</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/superadministrator">Home</a></li>
                <li class="breadcrumb-item active">Local Governments</li>
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
                              <h3 class="card-title">Registered Local Governments</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="lgtable" class="table table-bordered table-hover" cellspacing="0">
                                <thead>
                                <tr>
                                  <th>Local Government ID</th>
                                  <th>Leader</th>
                                  <th>Region</th>
                                  <th>District</th>
                                  <th>Ward</th>
                                  <th>Street</th>
                                  <th>P.O. Box</th>
                                  <th>Phone Number</th>
                                  <th>Action</th>
                                  <th>Action</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if (count($lgs) > 0)
                                        @foreach ($lgs as $lg)
                                            <tr>
                                                <td>{{ $lg->LocalGovtID }}</td>
                                                <td>{{ $lg->leader }}</td>
                                                <td>{{ $lg->region }}</td>
                                                <td>{{ $lg->district }}</td>
                                                <td>{{ $lg->ward }}</td>
                                                <td>{{ $lg->street }}</td>
                                                <td>{{ $lg->slp }}</td>
                                                <td>{{ $lg->phonenumber }}</td>
                                                <td>
                                                  <a class="btn btn-info btn-sm" href="{{ route('superadmin.mkazi', $lg->id) }}">
                                                    <i class="fa fa-eye">
                                                    </i>
                                                    View Residents
                                                </a>
                                                </td>
                                                <td>
                                                  <a class="btn btn-info btn-sm" href="{{ route('superadmin.nyumba', $lg->id) }}">
                                                    <i class="fa fa-eye">
                                                    </i>
                                                    View Houses
                                                </a>
                                                </td>
                                                <td>
                                                  <a class="btn btn-info btn-sm" href="{{ route('superadmin.balozi', $lg->id) }}">
                                                    <i class="fa fa-eye">
                                                    </i>
                                                    View balozi
                                                </a>
                                                </td>
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