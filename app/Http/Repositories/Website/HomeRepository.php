<?php

namespace App\Http\Repositories\Website;

use App\Http\Interfaces\Website\HomeRepositoryInterface;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeRepository implements HomeRepositoryInterface
{
    public function index(Request $request): array
    {
        $data = [];

        $data['categories'] = Category::where('status', 'active')->select('id', 'title')->get();

        $data['promoted'] = Product::where('status', 'active')
            ->where('is_promoted', 'yes')
            ->select('*')
            ->get();

        $data['bestSelling'] = Product::where('status', 'active')
            ->where('tag', 'best_selling')
            ->select('*')
            ->get();

        $data['brandsSection'] = Brand::where('status', 'active')
            ->select('*')
            ->inRandomOrder()
            ->get();

        $data['mostViewed'] = Product::where('status', 'active')
            ->where('tag', 'most_viewed')
            ->select('*')
            ->get();

        $data['justArrived'] = Product::where('status', 'active')
            ->where('tag', 'just_arrived')
            ->select('*')
            ->get();

        return $data;
    }
}
