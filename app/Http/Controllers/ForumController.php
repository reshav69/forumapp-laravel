<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $forums = Forum::all();
        $forums = Forum::withCount('comments')->get();

        return view('index',['forums'=>$forums]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =$request->validate([
            'title'=> 'required|max:255',
            'description'=> 'required|max:255',
            
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
