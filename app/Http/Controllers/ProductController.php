<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    private $ProductRepositorory;
    function __construct(ProductRepository $ProductRepositorory)
    {
        $this->ProductRepository = $ProductRepositorory;
    }


    public function index()
    {
        $products = $this->ProductRepository->getAllProducts();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->ProductRepository->saveProduct($request);
        return redirect()->route('products.index');

    }

    public function edit($id)
    {
        $products = $this->ProductRepository->getEditProduct($id);
        return view('admin.product.edit', compact('products'));

    }

    public function update(Request $request)
    {
        $this->ProductRepository->UpdateProduct($request);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = $this->ProductRepository->destroyProduct($id);
        return redirect()->back();
    }
}
