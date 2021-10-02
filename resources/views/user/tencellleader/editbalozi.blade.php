@extends('layouts.appuser')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Badili Taarifa za Balozi') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <section class="content">
                  <div class="container-fluid">
                      <form method="POST" action="{{ route('tencellleader.update', $balozi->id) }}">
                          @csrf
                          <input type="hidden" name="_method" value="PUT">   {{-- to support POST method on this form since the route support put method --}}
                          
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Balozi') }}</label>
  
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $balozi->name }}" required>
  
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu') }}</label>
  
                              <div class="col-md-6">
                                <input id="phonenumber" type="tel" pattern="[0-9]{4}-[0-9]{6}" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" placeholder="eg: 0755-650650" value="{{ $balozi->phonenumber }}" required>
  
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
                                      {{ __('Hifadhi') }}
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