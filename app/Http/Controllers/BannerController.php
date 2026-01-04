<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Services\ImageGenerationService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {

        $banner = Banner::where('status', true)->latest()->first();

        return view('index', compact('banner'));
    }

}
