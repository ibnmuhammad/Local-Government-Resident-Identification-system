@extends('layouts.appuser')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Nyumba</h3>
        <div class="btn btn-default float-right">
          <a href="{{ route('house.create') }}">Sajili Nyumba Mpya</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="HouseTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>Namba ya Nyumba</th>
              <th>Mmiliki</th>
              <th>Namba ya Simu</th>
              {{-- <th>Balozi</th> --}}
              <th>Aina ya Nyumba</th>
              <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($houses)>0)
  
              @foreach ($houses as $house)
              <tr>
                <td>{{ $house->HouseNumber }}</td>
                <td>{{ $house->owner }}</td>
                <td>{{ $house->phonenumber }}</td>
                {{-- <td>{{ $house->tencellleaders->name }}</td> --}}
                <td>{{ $house->status }}</td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{ route('house.edit', $house->id) }}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Badili Taarifa
                </a>
                <a class="btn btn-danger btn-sm" onclick="return myFunction();">
                    <form action="{{ route('house.destroy', $house->id) }}" method="POST" class="form-inline">
                        @csrf
                        @method("DELETE")
                        <i class="fas fa-trash">
                        </i>
                        <input type="submit" class="btn btn-danger btn-sm" value="Futa">
                    </form>
                </a>
                <script>
                  function myFunction() {
                      if(!confirm("Are You Sure you want to delete this?"))
                      event.preventDefault();
                  }
                 </script>
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