<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('inc.head')

<body>
    @include('inc.navuser')
    <div id="app">   
        <main class="py-4">
            @include('sweetalert::alert')
            @yield('content')
        </main>
    </div>
    @include('inc.masterquery')
    <script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
    $(document).ready(function(){

        // console.log('test');
      $("#HouseTable").dataTable({
          "responsive": true,
          "autoWidth": false, 
      });
      $("#balozitable").dataTable({
          "responsive": true,
          "autoWidth": false, 
      });
      $("#residenttable").dataTable({
          "responsive": true,
          "autoWidth": false, 
      });

    })
    </script>



</body>


</html>