@extends('layouts.appuser')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Wakazi wa eneo langu</h3>
        <div class="btn btn-default float-right">
          <a href="{{ route('resident.verify') }}">Usajili Mpya</a>
        </div>
        <div class="btn btn-default float-right">
          <a href="{{ route('resident.updateresident') }}">Sajili Mkazi Anayehamia</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="residenttable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>Namba ya NIDA</th>
              <th>Jina</th>
              <th>Namba ya Simu</th>
              <th>Nyumba namba</th>
              {{-- <th>Jina la Balozi</th> --}}
              <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
              @if(count($residents)>0)

              @foreach ($residents as $resident)
                <tr>
                  <td>{{ $resident->resid }}</td>
                  <td>{{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->lastname }}</td>
                  <td>{{ $resident->phonenumber }}</td>
                  <td>{{ $resident->house->HouseNumber }}</td>
                  {{-- <td>{{ $resident->balozi }}</td> --}}
                  <td>
                    <a class="btn btn-info btn-sm" href="{{ route('resident.edit', [$resident->id]) }}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Badili taarifa za mkazi
                  </a>
                  </td>
                </tr>
              @endforeach
              @endif
            </tfoot>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </div>  

@endsection