<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductRepository extends Model
{
    public function getAllProducts()
    {
        return Product::get();
    }

    public function saveProduct($request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'detail' => 'required',
        ]);
    
        Product::create($request->all());
    }

    public function getEditProduct($id)
    {
        return Product::first();
    }

    public function UpdateProduct($request)
    {
        $updateProduct = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'detail' => 'required',
        ]);

        DB::table('products')->update($updateProduct);

        return back();
    }

    public function destroyProduct($id)
    {
        Product::where('id', $id)->delete();
        
    }
}