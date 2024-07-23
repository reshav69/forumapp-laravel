<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Forum;
use App\Models\Comment;


class CommentController extends Controller
{
    public function store(Forum $forum){
        $comment = Comment::create([
            'comment'=>request()->get('comment',''),
            'forum_id'=>$forum->id,
            'user_id'=>auth()->id(),
        ]);

        return redirect()->route('forums.show',$forum->id);


    }
}
