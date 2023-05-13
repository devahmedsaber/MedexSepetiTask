<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Repositories\Website\HomeRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public HomeRepository $homeRepository;

    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }
    public function index(Request $request)
    {
        $data = $this->homeRepository->index($request);
        return view('website.index')->with('data', $data);
    }
}
