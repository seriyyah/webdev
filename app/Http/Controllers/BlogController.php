<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
   public function blog()
   {
        $posts = Post::simplePaginate(4);
        return view('blog.blog', ['posts'=> $posts]);
   }

   public function show($slug)
   {
       $post = Post::where('slug', $slug)->first();
       return view('blog.show', ['post'=> $post]);
   }

   public function blogprev()
   {
        $posts = Post::simplePaginate(3);
        return view('home', ['posts'=> $posts]);
    }

}
