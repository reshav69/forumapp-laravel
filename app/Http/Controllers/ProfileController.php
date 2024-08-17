<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Forum;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user){
        $forums = Forum::where('user_id',$user->id)->withCount('comments')->get();
        return view('profile.show',[
            'forums'=>$forums,
            'user'=>$user,]);
    }
}
