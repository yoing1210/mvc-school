<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index',[
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);
        $validatedData['image'] = $request->file('image')->store('post-images');
        
        Category::create($validatedData);

        return redirect('/admin/categories')->with('success','New Post has been added');
    }
    public function destroy($id)
    {

        $data = Category::find($id);
        Category::destroy($data->id);

        return redirect('/admin/categories')->with('success','Category has been deleted');
    }

  
    
}
