<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function Show(){

      $Posts = Post::with ('category')->get();

      return view('Show',compact('Posts'));
   }
   public function Create(){

       return view('create');
   }
   public function Store(postRequest $request){

       Post::create([

           'name' => $request -> name,
           'description' => $request -> description,
           'category_id'=> $request -> category_id
       ]);

   }
   public function Edit($id){

     $post = Post::find($id);
     if (!$post)
        return redirect()->back();
     $post = Post::select(['id','name','description','category_id'])->find($id);
     return view('Edit',compact('post'));
   }

    public function Update(postRequest $request, $id){

        $post = Post::find($id);
        if (!$post)
            return redirect()->back();

        $post -> update($request->all());
        return redirect()->to('http://127.0.0.1:8000/show');

    }

}
