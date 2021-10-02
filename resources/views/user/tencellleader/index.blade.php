@extends('layouts.appuser')

@section('content')

<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Balozi wa Nyumba Kumi</h3>
        <div class="btn btn-default float-right">
          <a href="{{ route('tencellleader.create') }}">Sajili balozi Mpya</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="balozitable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>Jina</th>
              <th>Namba ya simu</th>
              <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($balozi)>0)
  
              @foreach ($balozi as $balo)
              <tr>
                <td>{{ $balo->name }}</td>
                <td>{{ $balo->phonenumber }}</td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{ route('tencellleader.edit', [$balo->id]) }}">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Badili taarifa
                </a>
                <a class="btn btn-danger btn-sm" onclick="return myFunction();">
                    <form action="{{ route('tencellleader.destroy', [$balo->id]) }}" method="POST" class="form-inline">
                        @csrf
                        @method("DELETE")
                        <i class="fas fa-trash">
                        </i>
                        <input type="submit" class="btn btn-danger btn-sm" value="Futa">
                    </form>

                    <script>
                      function myFunction() {
                          if(!confirm("Are You Sure you want to delete this?"))
                          event.preventDefault();
                      }
                     </script>
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