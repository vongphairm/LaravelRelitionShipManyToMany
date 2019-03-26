<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    //
    public function teacher(){
        return view('page.teacher');
    }
    public function student(){
        return view('page.student');
    }
    public function room(){
        return view('page.room');
    }
    public function showPost(){
      //  $query="SELECT * FROM post";
     $post=\App\Post::all();
       return view('showPost',compact('post'));
       

    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        
        $titl=$request->title;
        $body=$request->body;
        //Create an object
        $post= new Post;
        $post->title=$titl;
        $post->body=$body;
        $post->save();
        return redirect('post');
    }
    public function edit($id){
        //select * from post
          $post=Post::findOrFail($id);
        return view('edit',compact('post'));
    }
    public function update(REQUEST $request,$id){
        $post= POST::find($id);
        $post->title= $request->get('title');
        $post->body= $request->get('body');
        $post->save();
        return redirect('/post');


    }
    public function delete($id){
        $post=POST::findOrfail($id);
        $post->delete();
       return back();
    }
   
}
