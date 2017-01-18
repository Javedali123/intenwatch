<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    return view('pages.welcome');
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
