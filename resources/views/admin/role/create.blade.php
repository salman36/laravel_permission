@extends('layouts.main')
@section('content')
@section('breadcrumb', 'Add Role')

    <div class="container-fluid">
        <div class="row">
            <label><h2>Add Role</h2></label>
            <div class="col-md-12 border">
                <form action="{{route('role.save')}}" method="post">
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
                        <label for="inputName">Role</label>
                        <input type="text" name="role" class="form-control"  placeholder="Role">
                        <span class="text-danger">@error('role'){{$message}} @enderror </span>
                        </div>
                        
                    </div>
                
                    
                    <button type="submit" class="btn btn-primary">Add Role</button><br><br>
                </form>
            </div>
        </div>   
    </div>

@endsection


