<?php

namespace App\Http\Interfaces\Website;

use Illuminate\Http\Request;

interface HomeRepositoryInterface
{
    public function index(Request $request);
}
