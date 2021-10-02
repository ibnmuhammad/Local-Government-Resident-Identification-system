@extends('layouts.appuser')

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Sajili Mkazi') }}
                <a href="{{ route('resident.index') }}" class="btn btn-default float-right" >
                    <i class="fas fa-times"></i>
                </a>
                </div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <section class="content">
                      <div class="container-fluid">
                        @if ($resident)
                        @foreach ($resident as $res)
                            <form method="POST" action="{{ route('resident.store') }}">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="hidden" value="{{ $res->pic }}" class="form-control" name="pic" value="{{ $res->pic }}">
                                        <input type="image" src="/storage/images/{{ $res->pic }}" class="float-right" style="width: 100px; height: 100px" alt="user image">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="resid" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya NIDA') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="resid" value="{{ $res->resid }}" readonly>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Jina La Kwanza') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="firstname" value="{{ $res->firstname }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Kati') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="middlename" value="{{ $res->middlename }}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Mwisho') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="lastname" value="{{ $res->lastname }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phonenumber" value="{{ $res->phonenumber }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jinsia') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="gender" value="{{ $res->gender }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Tarehe ya kuzaliwa') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="dob" value="{{ $res->birthdate }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="marital" class="col-md-4 col-form-label text-md-right">{{ __('Hali ya Ndoa') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="marital" value="{{ $res->marital }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="work" class="col-md-4 col-form-label text-md-right">{{ __('Kazi') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="work" value="{{ $res->work }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="house" class="col-md-4 col-form-label text-md-right">{{ __('Makazi') }}</label>
        
                                    <div class="col-md-6">
                                        @if ($houses)
                                        <select name="house" id="house" class="form-control">
                                            @foreach ($houses as $house)
                                                <option value="{{ $house->id }}">{{ $house->HouseNumber }} - {{ $house->owner }}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Sajili') }}
                                        </button>
                                        <a href="{{ route('resident.index') }}" class="btn btn-danger float-right" >
                                            <i class="fas fa-window-close"></i>
                                                Ghairi
                                        </a>
                                    </div>
                                </div>
                                
                            </form>
                        @endforeach
                        @endif
                      </div>
                </section>
              </div>
          </div>
      </div>
  </div>
@endsection