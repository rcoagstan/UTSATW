<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function showCategory(){
        $category = Category::paginate(10);
        return view('admin.category.index', compact('category'));
    }

    function create(){
        return view('admin.category.create');
    }

    function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)

        ]);

        return redirect()->back()->with('success','Data Berhasil Disimpan');
    }

    function edit(Request $id)
    {
        $category = Category::findorfail($id);
        return view('admin.category.edit', compact('category'));
    }

    function update(Request $request)
    {
        $category_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)

        ];

        return redirect()->route('category.index')->with('success','Data Berhasil Diedit');
    }

    function destroy(Category $id){
        $category = Category::findorfail($id);
        $category->delete();

        return redirect('category')->with('danger', 'Data berhasil dihapus');
    }
}
