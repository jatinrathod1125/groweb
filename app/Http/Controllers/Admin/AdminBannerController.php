<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', ['banners' => $banners]);
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'image_data' => 'required|string',
            ]);

            $imageData = $request->input('image_data');

            // Remove the base64 prefix (data:image/png;base64,)
            $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $imageData);
            $imageData = base64_decode($imageData);

            if ($imageData === false) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid image data'
                ], 400);
            }

            // Generate unique filename
            $filename = 'banner_' . time() . '_' . uniqid() . '.png';
            $path = 'banners/' . $filename;

            // Store the image in storage/app/public/banners
            \Storage::disk('public')->put($path, $imageData);

            // Create banner record
            $banner = Banner::create([
                'image_preview' => $path,
                'html' => '',
                'css' => '',
                'js' => '',
                'status' => true,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Banner saved successfully',
                'data' => [
                    'id' => $banner->id,
                    'image_preview' => $banner->image_preview,
                ]
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to save banner: ' . $e->getMessage()
            ], 500);
        }
    }
}
