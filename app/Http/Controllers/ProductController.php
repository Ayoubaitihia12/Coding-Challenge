<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProduct();

        return response()->json($products);
    }


    public function store(ProductRequest $request)
    {
        $data = $request->validated();
    }


    public function show(string $id)
    {
        //
    }


    public function update(ProductRequest $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
