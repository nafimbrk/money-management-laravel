<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string'
        ], [
            'name.required' => 'name cannot be empty',
            'type.required' => 'type cannot be empty',
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Data has been successfully added');
    }
}
