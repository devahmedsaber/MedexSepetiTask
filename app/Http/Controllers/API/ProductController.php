<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Repositories\API\ProductRepository;
use App\Http\Requests\API\StoreProductRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Request $request): JsonResponse
    {
        $data = $this->productRepository->index($request);
        return responseBuilder()->setData($data)->response();
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $data = $this->productRepository->store($request);
        return responseBuilder()->setData($data)->response();
    }
}
