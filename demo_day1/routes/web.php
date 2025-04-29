<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',function(){
//1- get all posts from database
//2-send data to view
$posts=[
   ["id"=>1,
   "title"=>"title 1",
   "body"=>"post body",
   "created_by"=>"Donia"],

   [
    "id"=>2,
   "title"=>"title 2",
   "body"=>"post body 2",
   "created_by"=>"Malak"],

   ["id"=>3,
   "title"=>"title 3",
   "body"=>"post body 3",
   "created_by"=>"Rahma"],

   ["id"=>4,
   "title"=>"title 4",
   "body"=>"post body 4",
   "created_by"=>"Mahmoud"],

];
return view("posts.index",["posts"=>$posts]);
});




Route::get('/posts/{id}',function($id){
    //1- get all posts from database
    //2-send data to view
    $post=[
       "id"=>$id,
       "title"=>"title 1",
       "body"=>"post body",
       "created_by"=>"Donia"

    ];
    return view("posts.view",["post"=>$post]);
    })->where('id', '[0-9]+');

    Route::get("/posts/create", function(){
        return view("posts.create");
    });

    Route::post('/posts', function(){
        return "Done";

    });

    Route::get("/posts/edit", function(){
        return view("posts.edit");
    });

    Route::get("/posts/destroy", function(){
        return view("posts.destroy");
    });
