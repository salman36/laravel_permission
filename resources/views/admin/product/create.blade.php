@extends('layouts.main')
@section('content')
@section('breadcrumb', 'Create Product')
    <div class="container-fluid">
        <div class="row">
            <label><h2>Add Product</h2></label>
            <div class="col-md-12 border">
                <form action="{{route('product.store')}}" method="post">
                    @csrf
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Type</label>
                            <input type="text" name="type" class="form-control"  placeholder="Type">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Detail</label>
                            <input type="text" name="detail" class="form-control" placeholder="detail">
                        </div>
                    </div>
      
                    <button type="submit" class="btn btn-primary">Add Product</button><br><br>
                </form>
            </div>
        </div>   
    </div>

@endsection


