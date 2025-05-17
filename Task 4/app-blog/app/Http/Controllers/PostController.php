<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\post;

class PostController extends Controller
{
    function index(){
        //1- get all posts from database
        //2-send data to view
        // to get data from db || the below is another way
       $posts= post::all();

       // $posts=DB::table('posts')->get();
       return view("posts.index",["posts"=>$posts]);

     }

    function show($id){
        //1- get one post from posts database
    //2-send data to view
    $post=post::find($id);

     return view("posts.view",["post"=>$post]);
    }
    function create(){
        return view("posts.create");

    }
    function store(StorePostRequest $request){
         //1-validate data from html


        //  $request->validate( ["title"=>["required","min:4", "max:255","unique:posts"],
        //                        "body"=> ["required"]]);

        // $request->validate(
        //     ["title"=>"required | min:4| max:255|unique:posts",
        //     "body"=> "required"]);



        //2- insert post in database

        // dd($request);  to show all data of request I send in add post



        // way to insert data

        // post::create([
        //     "title"=>$request->title,
        //     "body" =>$request->body

        // ]);

        // second way
        $post = new post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id= Auth::id();

        $imagePath = $request->file('image')->store('public/images');
        $post->image = str_replace('public/', '', $imagePath);

        $post->save();



        //3- redirect to /posts

      return redirect("/posts");
    }

    function edit($id){
        //get old post
        $post=post::find($id);

         return view("posts.edit",["post"=>$post]);
    }

    function update($id, StorePostRequest $request){
        //1- vaildate

        // $request->validate(
        //     ["title"=>"required | min:4| max:255|unique:posts",
        //     "body"=> "required"]);

        //2- find old post and update data
        $post=post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
         if ($request->hasFile('image')) {
        if ($post->image && Storage::exists('public/' . $post->image)) {
             Storage::delete('public/' . $post->image);
        }
        $imagePath = $request->file('image')->store('public/images');
        $post->image = str_replace('public/', '', $imagePath);
    }



        $post->save();
        //redirect to posts
        return redirect("/posts");
    }

    function destroy($id){
        //delete post where id = $id
        //redirect / posts
        post::destroy($id);
         if ($post->image && Storage::exists('public/' . $post->image)) {
         Storage::delete('public/' . $post->image);
    }
        return redirect("/posts");
    }


}





