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
                    @if ($users)
                    @foreach ($users as $user)
                        <form method="POST" action="#">
                            @csrf
    
                            <div class="form-group row">
                                <label for="LocalGovtID" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Serikali ya Mtaa') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->LocalGovtID }}" readonly>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="Leader" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Mwenyekiti') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->leader }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mtendaji" class="col-md-4 col-form-label text-md-right">{{ __('Jina la Afisa Mtendaji') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->AfisaMtendaji }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Mkoa') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->region }}" readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('Wilaya') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->district }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Kata') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->ward }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Mtaa') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->street }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="LocalGovtID" class="col-md-4 col-form-label text-md-right">{{ __('Sanduku la Posta') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" value="{{ $user->slp }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Namba ya Simu ya Ofisi') }}</label>
    
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" value="{{ $user->phonenumber }}" readonly>
                              </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12 offset-md-4">
                                    <a class="btn btn-primary" href="/user/editprofile/{{ $user->LocalGovtID }}">
                                       Badilisha Taarifa zako 
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('user.edit', $user->user_id) }}">
                                        Badilisha Taarifa za Kuingia katika Mfumo
                                     </a>
                                </div>
                            </div>
                        </form>
                    @endforeach
                      
                    @else
                        Unatakiwa kujaza taarifa kuhusu mtaa wako kwanza ili kuendelea kutumia mfumo
                        <br>
                        <a class="btn btn-primary" href="/user/createprofile">
                            Ingiza taarifa kuhusu mtaa wako 
                         </a>
                    @endif
                    </div>
                </section>
              </div>
          </div>
      </div>
  </div>
@endsection