<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', '   category deleted successfully');
    }


    public function edit($id)
    {
        $category = category::find($id);
        $data = [
            "category"   => $category,
        ];
        return view('admin.category.edit', $data);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);
        $category = category::find($id);

    // Update data pengguna
    $category->name = $request->input('name');
    $category->save();

        return redirect()->route('category.index')->with('success', 'category berhasil diupdate');
    }

    public function create()
    {
        $category = Category::all();
        $data = [
            "$category"  => $category
        ];
        return view('admin.category.create',$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);

        $category = category::create([
            'name' => $request->input('name'),

        ]);

        return redirect()->route('category.index')->with('success', 'category baru berhasil ditambahkan');
    }

}