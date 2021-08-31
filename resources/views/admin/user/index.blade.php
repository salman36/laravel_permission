@extends('layouts.main')
@section('content')
@section('breadcrumb', 'All Admin')
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Admins With Roles</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>User Name</th>
                      <th>Role</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($admins as $admin)
                    <tr>
                      <td>{{$admin->id}}</td>
                      <td>{{$admin->name}}</td>
                      <td>{{$admin->username}}</td>
                      <td>{{$admin->role->role}}</td>
                      <td>{{$admin->email}}</td>                     
                    </tr>
                  @endforeach
                    
                  
                  </tbody>
                </table>
                     {{$admins->links("pagination::bootstrap-4")}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
@endsection


