@extends('layouts.appadmin')

@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="m-0">Profile</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                          <li class="breadcrumb-item active">Profile</li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    
                  @if ($profile)
                    @foreach ($profile as $profil)
                        <form method="POST" action="#">
                            @csrf
    
                            <div class="form-group row">
                                <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $profil->region }}" readonly>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('District Name') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $profil->name }}" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
    
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" value="{{ $profil->phonenumber }}" readonly>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <a class="btn btn-primary" href="{{ route('profile.edit', $profil->name) }}">
                                       Click Here to Edit Profile 
                                    </a>
                                </div>
                            </div>
                        </form>
                    @endforeach
                      
                    @else
                        You need to create your profile first
                        <br>
                        <a class="btn btn-primary" href="{{ route('profile.create') }}">
                            Create Profile 
                         </a>
                    @endif

                </div>
            </section>
        </div>
    </div>
@endsection