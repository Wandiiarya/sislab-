{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.admin')
@section('content')

    <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat datang  </h3>
                    <h6 class="font-weight-normal mb-0">Selamat bekerja , semoga menyenangkan harimu</h6>
                  </div>
                  <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
         
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                  <div class="card-people mt-auto">
                    <img src="assets/images/dashboard/people.svg" alt="people">
                    <div class="weather-info">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin transparent">
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">total data barang</p>
                        <p class="fs-30 mb-2">{{$barang}}</p>
                        <p>10.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">total  data ruangan</p>
                        <p class="fs-30 mb-2">{{$ruangan}}</p>
                        <p>22.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Number of Meetings</p>
                        <p class="fs-30 mb-2">34040</p>
                        <p>2.00% (30 days)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Number of Clients</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>0.22% (30 days)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
