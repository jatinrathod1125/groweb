<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'category_name' => [
                'required',
                'string',
                'max:255',
                'unique:categories,category_name',
                'regex:/^[a-zA-Z0-9\s\-\_]+$/'
            ],
            'category_image' => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,gif',
                'max:2048' // 2MB max
            ],
            'status' => 'nullable|in:active,inactive'
        ], [
            // Custom error messages
            'category_name.required' => 'Category name is required.',
            'category_name.unique' => 'This category name already exists.',
            'category_name.max' => 'Category name must not exceed 255 characters.',
            'category_name.regex' => 'Category name can only contain letters, numbers, spaces, hyphens, and underscores.',
            'category_image.required' => 'Category image is required.',
            'category_image.image' => 'The file must be an image.',
            'category_image.mimes' => 'Image must be a file of type: jpeg, jpg, png, gif.',
            'category_image.max' => 'Image size must not exceed 2MB.',
        ]);

        try {
            // Handle image upload
            if ($request->hasFile('category_image')) {
                $image = $request->file('category_image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Create directory if it doesn't exist
                $uploadPath = public_path('assets/images/categories');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                // Move the image
                $image->move($uploadPath, $imageName);

                $validated['category_image'] = $imageName;
            }

            // Set status
            $validated['status'] = $request->has('status') ? 'active' : 'inactive';

            // Create category
            Category::create($validated);

            return redirect()
                ->route('admin.categories.index')
                ->with('success', 'Category created successfully!');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create category. Please try again.']);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->status = $request->status;
            $category->save();

            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully',
                'status' => $category->status
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update status'
            ], 500);
        }
    }
}
