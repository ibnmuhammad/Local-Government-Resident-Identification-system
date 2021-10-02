<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('inc.head')

<body class="hold-transition sidebar-mini layout-fixed">
    
        @include('inc.navsuperadmin')
        @include('inc.supersidebar')
    <div id="app">
        <main class="py-4">        
            {{-- @include('inc.messages') --}}
            @include('sweetalert::alert')
            @yield('content')
            @include('inc.superfooter')
        </main>
    </div>

    @include('inc.masterquery')
    <script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>    

    <script>
        $(document).ready(function(){
    
            // console.log('test');
          $("#usertable").dataTable({
              "responsive": true,
              "autoWidth": false, 
          });
          $("#lgtable").dataTable({
              "responsive": true,
              "autoWidth": false, 
          });
          $("#nyumba").dataTable({
              "responsive": true,
              "autoWidth": false, 
          });
          $("#wakazi").dataTable({
              "responsive": true,
              "autoWidth": false, 
          });
          $("#balozi").dataTable({
              "responsive": true,
              "autoWidth": false, 
          });
    
        })
    </script>
</body>
</html>