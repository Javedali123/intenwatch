<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; // uses post model

class BlogController extends Controller
{


    public function getIndex() {
      $post = Post::paginate(10); // displays 10 posts

        return view('blog.index')->withPosts($post); // returns blog.index with posts
    }
    public function getSingle($slug) {
      // fetch from database based on slug
      $post = Post::where('slug', '=', $slug)->first(); // get first and stop

      // return view and pass in the post object
      return view('blog.single')->withPost($post);

    }
}
