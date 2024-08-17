<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Forum;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(Category $category){
        $forums = Forum::where('category_id',$category->id)->withCount('comments')->get();
        // dd($forums);
        return view('category.show',[
            'forums'=>$forums,
            'category'=>$category
        ]);
    }
}
