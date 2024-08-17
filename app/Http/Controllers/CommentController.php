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

    public function like($forumId,Comment $comment){
        $this->addReaction($comment,'liked');
        return back();
    }

    public function dislike($forumId,Comment $comment){
        $this->addReaction($comment,'disliked');
        return back();
    }

    function addReaction(Comment $comment, $reactionType){
        $reaction = $comment->reactions()->where('user_id',auth()->id())->first();
        if($reaction){
            //if same reaction then delete reaction, handle unlike(doesnt work)
            if ($reaction->reaction === $reactionType)
                $reaction->delete();
            else
                $reaction->reaction = $reactionType;
                $reaction->save();
        }
        else{
            $comment->reactions()->create([
                'user_id' => auth()->id(),
                'reaction' => $reactionType,
            ]);
        }


    }
}
