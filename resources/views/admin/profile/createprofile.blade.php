@extends('layouts.appadmin')

@section('content')
<div class="wrapper">

    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Create Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Create Profile</li>
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
                            <div class="card-header">{{ __('Create Profile') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('profile.store') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
            
                                        <div class="col-md-6">
                                            @if ($regions)
                                            <select name="region" id="region" class="form-control">
                                                <option active>current no selection</option>
                                                @foreach ($regions as $region)
                                                    <option value="{{ $region->regionID }}">{{ $region->name }}</option>
                                                @endforeach
                                            </select>
                                            @endif
                                            
                                            @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('District Name') }}</label>
            
                                        <div class="col-md-6">
                                            <select name="district" id="district" class="form-control">
                                                    <option>current no selection</option>
                                            </select>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="phonenumber" type="tel" pattern="[0-9]{4}-[0-9]{6}" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" required autocomplete="phonenumber">
            
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
                                                {{ __('Create Profile') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>


</div>
@endsection