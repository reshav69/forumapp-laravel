<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

Route::get('/', [ForumController::class,'index'])->name('root');

Route::resource('forums',ForumController::class)->except('index')->middleware('auth');

Route::resource('forums.comments',CommentController::class)->only('store')->middleware('auth');


Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticate']);

Route::post('/logout',[AuthController::class,'logout'])->name('logout');
//todo
//user authentication --
    //associate forum with user --
    //associate comment with user --

//tags,categories
    //add tags,categories in forums
    //filter by category and tags
//forum edit/delete
    //image upload
//comment like dislike
    //track user likes/dislikes
//comment edit/delete
//show all post made by a users

//...
//profile edit
//share
//notifications
//recently viewed
//replies