@extends('layouts.app')

@section('title', 'Register Devices')

@section('content')
  <section class="section">
    <div class="section-header">
    <h1>Register Devices</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Device / </a>
                <div class="breadcrumb-item"><a href="#">Register </a>
                </div>
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
               
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric">
                      <option>AWS</option>
                      <option>AAWS</option>
                      <option>SPAS</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Device Name</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          AWS
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">GSM Number</label>
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
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Paket Expierd</label>
                    <div class="input-group col-sm-12 col-md-7">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control datepicker">
                    </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Information</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea class="summernote-simple"></textarea>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Device</label>
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
