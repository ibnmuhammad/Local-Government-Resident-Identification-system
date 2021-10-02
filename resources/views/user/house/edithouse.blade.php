@extends('layouts.appuser')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Badili Taarifa za Nyumba') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <section class="content">
                  <div class="container-fluid">
                      <form method="POST" action="{{ route('house.update', $house->id) }}">
                          @csrf
                          <input type="hidden" name="_method" value="PUT">   {{-- to support POST method on this form since the route support put method --}}
                          
                          <div class="form-group row">
                            <label for="HouseNumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Nyumba') }}</label>

                            <div class="col-md-6">
                                <input id="HouseNumber" type="text" class="form-control" name="HouseNumber" value="{{ $house->HouseNumber }}" pattern="[A-Z]{3}/[0-9]{3}" placeholder="ABC/0001" required>

                                @error('HouseNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('Mmiliki') }}</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ $house->owner }}" required>

                                @error('owner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu') }}</label>

                            <div class="col-md-6">
                              <input id="phonenumber" type="tel" pattern="[0-9]{4}-[0-9]{6}" value="{{ $house->phonenumber }}" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" placeholder="eg: 0755-650650" required>

                              @error('phonenumber')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="baloziID" class="col-md-4 col-form-label text-md-right">{{ __('Balozi') }}</label>

                            <div class="col-md-6">
                                @if ($balozi)
                                    <select name="baloziID" id="baloziID" class="form-control">
                                        @foreach ($balozi as $balo)
                                            <option value="{{ $balo->id }}">{{ $balo->name }}</option>
                                        @endforeach
                                    </select>
                                @endif
                                
                                @error('baloziID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Aina ya Nyumba') }}</label>

                            <div class="col-md-6">
                                    <select name="status" id="status" class="form-control">
                                        <option>Binafsi</option>
                                        <option>Kupangisha</option>
                                    </select>
                                @error('status')
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