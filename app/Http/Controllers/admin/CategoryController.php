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
        ], [
            'category_title.required' => 'Please Enter the title.',
        ]);
        
        $post = new Category;
        $post->category_title = $request->get('category_title');
        $post->url = $request->get('url');
        $post->save();

        return redirect()->route('category.index')->with('success', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin.category.editcategory', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $post = Category::find($id);
        $post->category_title = $request->get('category_title');
        $post->url = $request->get('url');
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
}