<?php

namespace App\Http\Controllers;

//models used
use Illuminate\Http\Request;

Use App\Http\Requests;
use App\Post;
use Mail;
use Session;

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
//contact us email function
  public function postContact(Request $request) {
    $this->validate($request, [
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:10'  ]);

      $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message

);

          Mail::send('emails.contact' , $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('javedali@hotmail.co.uk');// emails from users will be sent here
            $message->subject($data['subject']);


          });

          session::flash('success', 'Your Email was Sent!');// displays success message
          return redirect('/'); // redirects to homepage

   }

}
