<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class,'index']);

// Route::get('/posts',[PostController::class,'index']);  => name= posts.index اسم بدل كل الداتا دي

// Route::get('/posts/{id}',[PostController::class,'show'])->where('id', '[0-9]+');

// Route::get("/posts/create", [PostController::class,'create']);

// Route::post('/posts', [PostController::class,'store']);

// Route::get("/posts/{id}/edit", [PostController::class, 'edit'])->where('id', '[0-9]+');

// Route::get("/posts/destroy", function(){
//     return view("posts.destroy");
// });

// Route::put("/posts/{id}",[PostController::class, 'update']);

// Route::delete("/posts/{id}",[PostController::class, 'destroy']);

Route::resource("posts", PostController::class);
Route::resource("comments", CommentController::class);

