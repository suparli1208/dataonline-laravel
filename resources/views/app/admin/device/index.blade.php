@extends('layouts.app')

@section('title', 'Device')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Devices</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Device</a>
        </div>
      </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Device List</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Device Name</th>
                        <th>Type</th>
                        <th>Owners</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($devices as $index => $device)
                        <tr>
                          <td>{{ $devices->firstItem() + $index }}</td>
                          <td>{{ $device->id }}</td>
                          <td>{{ $device->device_name }}</td>
                          <td>AWS</td>
                          <td>{{ $device->owner }}</td>
                          <td><div class="badge badge-success">Online</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        {{ $devices->links() }}
                      </ul>
                    </nav>
                  </div>
              </div>
            </div>
          </div>
    </div>
  </section>
@endsection
