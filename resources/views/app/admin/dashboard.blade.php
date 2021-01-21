@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a>
        </div>
      </div>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Users</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-plug"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Devices</h4>
              </div>
              <div class="card-body">
                42
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Reports</h4>
              </div>
              <div class="card-body">
                1,201
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Online Users</h4>
              </div>
              <div class="card-body">
                47
              </div>
            </div>
          </div>
        </div>                  
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-body p-0">
              <div id="map" style="height: 450px"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Recent Activities</h4>
            </div>
            <div class="card-body">             
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/users/syngenta.jpg') }}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary">Now</div>
                    <div class="media-title">AWS SFSA</div>
                    <span class="text-small text-muted">Suhu : 20</span>                 
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/users/mni.png') }}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">AAWS MNI</div>
                    <span class="text-small text-muted">Suhu : 20</span>                 
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/users/mni.png') }}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">17m</div>
                    <div class="media-title">SPAS AKI</div>
                    <span class="text-small text-muted">Suhu : 20</span>                 
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="{{ asset('assets/img/users/mni.png') }}" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">21m</div>
                    <div class="media-title">SPAS AKM</div>
                    <span class="text-small text-muted">Suhu : 20</span>
                  </div>
                </li>
              </ul>
              <div class="text-center pt-1 pb-1">
                <a href="#" class="btn btn-primary btn-lg btn-round">
                  View All
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
