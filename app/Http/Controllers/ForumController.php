<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Category;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $forums = Forum::all();
        $forums = Forum::withCount('comments')->get();
        $searchterm = request()->get('search','');

        $cat = Category::all();
        // dd($forums);

        // $forums = $forums->where('title','like','%' . $searchterm .'%');

        return view('index',['forums'=>$forums,'categories'=>$cat]);
    }

    public function search(Request $request){
        $search = $request->input('search');
        $results = Forum::where('title', 'like', "%$search%")->withCount('comments')->get();

        return view('index',['forums'=>$results]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('forum.create',['categories'=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =$request->validate([
            'title'=> 'required|max:255',
            'description'=> 'required|max:255',
            'category_id'=>'required'
            
        ]);

        $validated['user_id'] = auth()->id();

        Forum::create($validated);

        return redirect('/');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        $commentCount = $forum->comments()->count();
        return view('forum.show',['forum'=>$forum,'commentCount'=>$commentCount]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
