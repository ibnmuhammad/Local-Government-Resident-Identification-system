@extends('layouts.appuser')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Uhamisho wa Mkazi') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <section class="content">
                  <div class="container-fluid">
                      <form method="POST" action="{{ route('resident.shifting') }}">
                          @csrf
                          
                          <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" value="{{ $resident->pic }}" class="form-control" name="pic">
                                <input type="image" src="/storage/images/{{ $resident->pic }}" class="float-right" style="width: 100px; height: 100px" alt="user image">
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="resid" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya NIDA') }}</label>

                            <div class="col-md-6">
                                <input id="resid" type="text" class="form-control" name="resid" value="{{ $resident->resid }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Kwanza') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $resident->firstname }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Kati') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ $resident->middlename }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Mwisho') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $resident->lastname }}" required>
                            </div>
                        </div>

                          <div class="form-group row">
                              <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu') }}</label>
  
                              <div class="col-md-6">
                                <input id="phonenumber" type="tel" placeholder="+255768291175" class="form-control" name="phonenumber" value="{{ $resident->phonenumber }}" required>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="exampleFormControlTextarea1">Sababu ya kuhama</label>
                            <div class="col-md-6">
                                <textarea name="status" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </div>
  
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Tuma') }}
                                  </button>
                              </div>
                          </div>
                          
                      </form>

                  </div>
              </section>
            </div>
        </div>
    </div>
</div>
@endsection