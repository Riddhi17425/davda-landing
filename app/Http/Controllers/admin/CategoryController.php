<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(request $request)
    {
        $search = $request->get('search');

        $data = Category::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('category_title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.category.categorylisting', compact('data','search'));
    }

    public function create()
    {
        return view('admin.category.addcategory');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_title' => 'required',
            'slider_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif',
        ], [
            'category_title.required' => 'Please Enter the title.',
            'slider_images.*.image' => 'Only image files are allowed.',
            'slider_images.*.mimes' => 'Images must be jpg, jpeg, png, webp, or gif.',
        ]);

        Category::create([
            'category_title' => $request->get('category_title'),
            'url' => $request->get('url'),
            'slider_images' => $this->uploadCategoryImages($request),
        ]);

        return redirect()->route('category.index')->with('success', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin.category.editcategory', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_title' => 'required',
            'slider_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif',
        ], [
            'category_title.required' => 'Please Enter the title.',
            'slider_images.*.image' => 'Only image files are allowed.',
            'slider_images.*.mimes' => 'Images must be jpg, jpeg, png, webp, or gif.',
        ]);

        $post = Category::findOrFail($id);
        $existingImages = $this->normalizeCategoryImages($post->slider_images);
        $removedImages = array_values(array_filter((array) $request->input('removed_images', [])));
        $remainingImages = array_values(array_diff($existingImages, $removedImages));

        $this->deleteCategoryImages($removedImages);

        $newImages = $this->uploadCategoryImages($request);

        $post->category_title = $request->get('category_title');
        $post->url = $request->get('url');
        $post->slider_images = array_values(array_merge($remainingImages, $newImages));
        $post->save();
        return redirect()->route('category.index')->with('success', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Category Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Category not found!');
    }

    private function uploadCategoryImages(Request $request): array
    {
        if (! $request->hasFile('slider_images')) {
            return [];
        }

        $uploadedImages = [];

        foreach ($request->file('slider_images') as $image) {
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $sanitizedName = preg_replace('/[^A-Za-z0-9_-]/', '-', $originalName);
            $fileName = time() . '_' . uniqid() . '_' . trim($sanitizedName, '-') . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('PropertyImage'), $fileName);
            $uploadedImages[] = $fileName;
        }

        return $uploadedImages;
    }

    private function normalizeCategoryImages($images): array
    {
        if (is_array($images)) {
            return array_values(array_filter($images));
        }

        if (empty($images)) {
            return [];
        }

        $decodedImages = json_decode($images, true);

        return is_array($decodedImages) ? array_values(array_filter($decodedImages)) : [];
    }

    private function deleteCategoryImages(array $removedImages): void
    {
        foreach ($removedImages as $removedImage) {
            $imagePath = public_path('PropertyImage/' . $removedImage);

            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }
    }
}