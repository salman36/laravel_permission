@extends('layouts.main')
@section('content')
@section('breadcrumb', 'Add Admin')
    <div class="container-fluid">
        <div class="row">
            <label><h2>Add Admin</h2></label>
            <div class="col-md-12 border">
                <form action="{{route('admin.save')}}" method="post">
                    @if(Session::get('success'))
						<div class="alert alert-success">
							{{ Session::get('success') }}
						</div>
                    @endif

					@if(Session::get('fail'))
						<div class="alert alert-danger">
							{{ Session::get('fail') }}
						</div>
					@endif
                    
                    @csrf
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Name">
                        <span class="text-danger">@error('name'){{$message}} @enderror </span>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputUsername">User Name</label>
                        <input type="text" name="username" class="form-control"  placeholder="User Name">
                        <span class="text-danger">@error('username'){{$message}} @enderror </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputRole">Role</label>
                        <select id="inputState" name="role" class="form-control">
                            <option selected>Choose...</option>
                            @foreach ($admins as $admin)
                            <option value="{{ $admin->id }}">{{$admin->role}}</option> 
                            @endforeach

                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Example@gmail.com">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="form-row mt-4" style="margin-left:20px;">
                        <div class="form-group col-md-6">
                            
                            <input type="checkbox" class="form-check-input" name="admin_access" id="exampleCheck1">
                            <label class="form-check-label"  for="exampleCheck1">Admin Access</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <input type="checkbox" class="form-check-input" name="role_access" id="exampleCheck1">
                            <label class="form-check-label"  for="exampleCheck1">Role Access</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="checkbox" class="form-check-input" name="account_access" id="exampleCheck1">
                            <label class="form-check-label"  for="exampleCheck1">Account Access</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputAddress" placeholder="********">
                         <span class="text-danger">@error('password'){{$message}} @enderror </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Admin</button><br><br>
                </form>
            </div>
        </div>   
    </div>

@endsection


