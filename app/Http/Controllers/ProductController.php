<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct(
        private Product $product
    ) {
    }

    public function index(): array
    {
        $productList = Product::all()->toArray();
        return $productList;
    }

    public function store(Request $request)
    {
        $this->product->saveData($request);
    }

    public function show(int $id)
    {
        return $this->product->find($id, ['code', 'name', 'description']);
    }

    public function update(int $id, Request $request)
    {
        $this->product
            ->where('id', $id)
            ->update($request->all());
    }

    public function destroy(int $id)
    {
        $this->product->destroy($id);
    }
}
