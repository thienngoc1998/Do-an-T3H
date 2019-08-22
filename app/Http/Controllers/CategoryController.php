<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $list = Category::all();
        return view('Admin.module.category.list', compact('list'));
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return json_encode($category);
    }

    public function destroy($id)
    {
        $category = Category::findorFail($id);
        $category->delete();
        return response()->json(['data' => 'Xóa thành công '], 200);
    }
    public function update(Request $request,$id)
    {
        $category =Category::findorFail($id);
        $category->update($request->all());
        return json_encode($category);
    }
}
