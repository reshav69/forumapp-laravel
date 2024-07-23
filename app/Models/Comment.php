<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comment;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'forum_id',
        'user_id'
    ];

    public function forum(){
        return $this->belongsTo(Forum::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reactions(){
        return $this->hasMany(CommentReaction::class);
    }
    public function likes(){
        return $this->reactions()->where('reaction','liked');
    }
    public function dislikes(){
        return $this->reactions()->where('reaction','disliked');
    }
}
