@extends('layouts.app')

@section('title', 'Register Users')

@section('content')
  <section class="section">
    <div class="section-header">
    <h1>Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Register Users</a>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Device</h4>
              </div>
              <div class="card-body">               
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="password" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <input id="password" type="password" class="form-control pwstrength " data-indicator="pwindicator" name="password">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="password2" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <input id="password2" type="password" class="form-control  " name="password-confirm">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Owners</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone Number</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-phone"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo Profile</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Create Device</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
