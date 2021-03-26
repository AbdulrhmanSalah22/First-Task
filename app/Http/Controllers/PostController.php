<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function Show(){

      $Posts = Post::with ('category')->get();

      return view('Show',compact('Posts'));
   }
}
