<!-- @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="container mt-2">
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        </div>
    @endforeach
@endif

@if (session('success'))
        <div class="container mt-2">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
@endif

@if (session('error'))
    <div class="container mt-2">
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    </div>
@endif -->

@if ($message = Session::get('success'))
<div class="container mt-2" style="width:50%">
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="container mt-2" style="width:50%">
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="container mt-2" style="width:50%">
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="container mt-2" style="width:50%">
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
</div>
@endif

@if ($errors->any())
<div class="container mt-2" style="width:50%">
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
</div>
</div>
@endif