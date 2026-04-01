<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $search = $request->get('search');

        $data = Property::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('admin.property.propertylisting', compact('data','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
        return view('admin.property.addproperty',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'image' => 'required',
            ],
            [
                
                'title.required' => 'Please enter a Title.',
                
                'image.required' => 'Please upload a file.',
                'image.mimes' => 'Only image are allowed.',
            ]
        );

        $imagePaths = [];

        if($request->hasFile('image')){
        foreach($request->file('image') as $img){
            $fileName = $img->getClientOriginalName();   // original name
            $img->move(public_path('PropertyImage'), $fileName); // move to public/PropertyImage
            $imagePaths[] = $fileName;
        }
    }
        Property::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $imagePaths
        ]);
        
        return redirect()->route('property.index')
                        ->with('success','Property created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $data = Property::find($id);
        return view('admin.property.editproperty',compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                
                'title' => 'required',
            ],
            [
                'title.required' => 'Please enter a Title.',
            ]
        );

        $data = Property::find($id);

    if($request->hasFile('image')){
        $oldImages = is_array($data->image) ? $data->image : json_decode($data->image, true) ?? [];
        foreach($oldImages as $oldImg){
            $file = public_path('PropertyImage/'.$oldImg);
            if(file_exists($file)) @unlink($file);
        }
        $image = [];
        foreach($request->file('image') as $img){
            $fileName = $img->getClientOriginalName();
            $img->move(public_path('PropertyImage'), $fileName);
            $image[] = $fileName;
        }
    } else {
        $image = is_array($data->image) ? $data->image : json_decode($data->image, true) ?? [];
    }

    // Update baaki fields
    $data->category_id = $request->category_id;
    $data->title = $request->title;
    $data->image = $image; // update images
    $data->save();


        return redirect()->route('property.index')->with('success','Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Property::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Property Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Property not found!');
    }
}
