@extends('layouts.appuser')

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Kuhusu') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <section class="content">
                    <div class="container-fluid">
                        <form method="POST" action="{{ route('details.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="LocalGovtID" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Serikali ya Mtaa') }}</label>
    
                                <div class="col-md-6">
                                    <input id="LocalGovtID" type="text" pattern="SM-[0-9]{4}" class="form-control @error('LocalGovtID') is-invalid @enderror" name="LocalGovtID" required autocomplete="LocalGovtID">
    
                                    @error('LocalGovtID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Leader" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Mwenyekiti') }}</label>
    
                                <div class="col-md-6">
                                    <input id="leader" type="text" class="form-control @error('leader') is-invalid @enderror" name="leader" required autocomplete="leader">
    
                                    @error('leader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mtendaji" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Afisa Mtendaji') }}</label>
    
                                <div class="col-md-6">
                                    <input id="mtendaji" type="text" class="form-control @error('mtendaji') is-invalid @enderror" name="mtendaji" required autocomplete="mtendaji">
    
                                    @error('mtendaji')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="ward" class="col-md-4 col-form-label text-md-right">{{ __('Kata') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ward" type="text" class="form-control @error('ward') is-invalid @enderror" name="ward" required autocomplete="ward">
    
                                    @error('ward')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Mtaa') }}</label>
    
                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" required autocomplete="street">
    
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slp" class="col-md-4 col-form-label text-md-right">{{ __('Sanduku la posta') }}</label>
    
                                <div class="col-md-6">
                                    <input id="slp" type="text" class="form-control @error('slp') is-invalid @enderror" name="slp" required autocomplete="slp">
    
                                    @error('slp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu ya Ofisi') }}</label>
    
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