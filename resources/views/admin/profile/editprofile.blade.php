@extends('layouts.appadmin')

@section('content')
<div class="wrapper">

    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Edit Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Edit Profile</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main Content goes here -->
        <section class="content">
            <div class="container-fluid">
                
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Edit Profile') }}</div>
            
                            <div class="card-body">
                                @if($profile)
                                @foreach ($profile as $profil)
                                <form method="POST" action="{{ route('profile.update', $profil->id) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">   {{-- to support POST method on this form since the route support put method --}}

                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="phonenumber" type="tel" pattern="[0-9]{4}-[0-9]{6}" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ $profil->phonenumber }}" required autocomplete="phonenumber">
            
                                            @error('phonenumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update Profile') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

</div>
@endsection