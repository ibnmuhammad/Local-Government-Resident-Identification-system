@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashibodi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-lg-4 col-8">
                          <!-- small card -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>{{ $wakazi }}</h3>
              
                              <p>Wakazi waliosajiliwa</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('resident.index') }}" class="small-box-footer">
                              Taarifa Zaidi <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-8">
                          <!-- small card -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>{{ $nyumba }}</h3>
              
                              <p>Nyumba zilizosajiliwa</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-home"></i>
                            </div>
                            <a href="{{ route('house.index') }}" class="small-box-footer">
                              Taarifa Zaidi <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-8">
                          <!-- small card -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>{{ $balozi }}</h3>
              
                              <p>Mabalozi katika mtaa</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('tencellleader.index') }}" class="small-box-footer">
                              Taarifa Zaidi <i class="fas fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                    </div>

                    <!-- <div class="jumbotron">
                          Its either tugawanye nyumba zilizosajiliwa to idadi ya nyumba za kupangisha and idadi ya nyumba binafsi of which card zitakuwa 4
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection