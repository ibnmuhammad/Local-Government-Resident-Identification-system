@extends('layouts.appuser')

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Hakiki Namba ya NIDA') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <section class="content">
                    <div class="container-fluid">
                        <form method="POST" action="{{ route('resident.create') }}">
                            @csrf
                            @method('GET')
                            <div class="form-group row">
                                <label for="resid" class="col-md-4 col-form-label text-md-right">{{ __('Namba Ya NIDA') }}</label>
    
                                <div class="col-md-6">
                                    <input id="resid" type="text" class="form-control @error('resid') is-invalid @enderror" name="resid" required>
    
                                    @error('resid')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Hakiki') }}
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