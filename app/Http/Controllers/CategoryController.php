<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

     public function all()
    {
        
    $categories = Category::all()->toArray();
        
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $categories
            ]
        );
        
        
    }

    public function store(Request $request)
    {

        Category::create($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $category->toArray()
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        
        $category->update($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => ''
            ]
        );
    }
}
