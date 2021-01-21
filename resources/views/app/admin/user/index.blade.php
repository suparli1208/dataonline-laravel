@extends('layouts.app')

@section('title', 'Users')

@section('content')
  <section class="section">
    <div class="section-header">
    <h1>Users</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Users</a>
            </div>
        </div>
    </div>
    <div class="section-body">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>User List</h4>
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
                      <th>Username</th>
                      <th>Email</th>
                      <th>Owners</th>
                      <th>Phone Number</th>
                      <th>Accessibility</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>100</td>
                      <td>AWS MNI</td>
                      <td>AWS</td>
                      <td>PT. Meteo Nusantara Instrumen</td>
                      <td><div class="badge badge-success">Online</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>200</td>
                      <td>AAWS MNI</td>
                      <td>AWS</td>
                      <td>PT. Meteo Nusantara Instrumen</td>
                      <td><div class="badge badge-success">Online</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>300</td>
                      <td>AAWS_DAVIS MNI</td>
                      <td>AAWS</td>
                      <td>PT. Meteo Nusantara Instrumen</td>
                      <td><div class="badge badge-success">Online</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>400</td>
                      <td>SPAS MNI</td>
                      <td>SPAS</td>
                      <td>PT. Meteo Nusantara Instrumen</td>
                      <td><div class="badge badge-success">Online</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="card-footer text-right">
                  <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </div>
            </div>
          </div>
        </div>
  </div>
  </section>
@endsection
