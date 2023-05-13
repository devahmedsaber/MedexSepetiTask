<?php

namespace App\Http\Repositories\API;

use App\Http\Interfaces\API\ProductRepositoryInterface;
use App\Http\Requests\API\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository implements ProductRepositoryInterface
{
    CONST ACTIVE_STATUS = 'active';

    public function index(Request $request)
    {
        $query = Product::where('status', self::ACTIVE_STATUS);

        if (isset($request['category_id']) && !is_null($request['category_id'])){
            $query->where('category_id', $request['category_id']);
        }

        $products = $query->get();

        return $products;
    }

    public function store(StoreProductRequest $request)
    {
        if (isset($request['image']) && !is_null($request['image']) && $request->hasFile('image')){
            $image = uploadImage($request['image'], 'products/images');
        }

        $product = Product::create([
            'category_id' => $request['category_id'],
            'title'       => $request['title'],
            'description' => $request['description'],
            'price'       => $request['price'],
            'image'       => $image['image_path'] ?? null,
            'tag'         => $request['tag'],
            'added_by'    => auth()->user()->id ?? null,
            'is_promoted' => $request['is_promoted'],
            'status'      => $request['status'],
        ]);

        return $product;
    }
}
