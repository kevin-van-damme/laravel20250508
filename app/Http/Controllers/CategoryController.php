<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function update(Request $request, Category $category)
    {
        //
    }
    public function destroy(Category $category)
    {
        //
    }
}
