<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        /*
        $categories = Category::latest()->paginate(5);
        return view('admin.categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        */
        $categories = Category::all();
        return view('admin.categories.index',['categories'=>$categories]);
    }

    public function create(Request $request){
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
            ->with('success','Category created successfully.');

    }
    public function edit(Category $category){
        return view('categories.edit',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')
            ->with('success','Category deleted successfully');
    }
}
