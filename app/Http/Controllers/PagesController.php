<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

  public function getIndex() {
    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout() {
    $first = 'Javed';
    $last = 'Ali';

    $fullname = $first . " " . $last;
    $email = 'javedali@hotmail.co.uk';
    $data = [];
    $data['email'] = $email;
    $data['fullname'] = $fullname;
    return view('pages.about')->withData($data);
  }

  Public function getContact() {
    return view('pages.contact');
  }

}
