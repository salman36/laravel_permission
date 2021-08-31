@extends('layouts.main')
@section('content')
@section('breadcrumb', 'Update Product')
    <div class="container-fluid">
        <div class="row">
            <label><h2>Update Product</h2></label>
            <div class="col-md-12 border">
                <form action="{{route('product.update')}}" method="post">
                    @csrf
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $products->name }}" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Type</label>
                            <input type="text" name="type" class="form-control" value="{{ $products->type }}"  placeholder="Type">
                        </div>
                    </div>

                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputName">Detail</label>
                            <input type="text" name="detail" class="form-control" value="{{ $products->detail }}"  placeholder="detail">
                        </div>
                    </div>
      
                    <button type="submit" class="btn btn-primary">Add Product</button><br><br>
                </form>
            </div>
        </div>   
    </div>

@endsection


