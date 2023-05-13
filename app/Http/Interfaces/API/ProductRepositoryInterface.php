<?php

namespace App\Http\Interfaces\API;

use App\Http\Requests\API\StoreProductRequest;
use Illuminate\Http\Request;

interface ProductRepositoryInterface
{
    public function index(Request $request);

    public function store(StoreProductRequest $request);
}
