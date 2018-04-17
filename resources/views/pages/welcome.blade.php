@extends('main')

@section('title', '| Homepage')

@section('content')
  <br />
  <div class="row">
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid" style="background-color:#e2edff">
          <h2 class="display-4">What is Intenwatch?</h2>
           <hr class="my-4">

            <p align="justify" class="lead">
            Intenwatch (International Energy Watch) is a system that uses the Raspberry Pi and is designed specifically to assist
            in the clear and easy understanding of the use and consumption of electricity.

              <br />
              <hr class="my-4">

              <p align="justify" class="lead">
                The Intenwatch system is designed to securely analyse your electricity consumption in near Real Time,
                in an efficient and economical way. Providing you with a clear and accurate understanding of what your electricity
                consumption is.
              </p>

              <hr class="my-4">

              <p align="justify" class="lead">
                Detailed reports and analysis of multiple unobtrusive sites are created in real time, and can be accessed via
                a mobile or web application, or even delivered right to your email box.
              </p>
          </div>
      </div>
    </div> <!-- end of header .row -->

    <div class="row">
      <div class="col-md-8">

        @foreach($posts as $post) <!--Displays latest posts, upto 300 characters-->

        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
        </div>

        <hr>
        @endforeach
      </div>

     <div class="col-md-3 col-md-offset-1">
       <div class="jumbotron" style="background-color:#e2edff">
          <h3>Latest Posts</h3>
          <h3></h3>
        </div>
       </div>
     </div>
  @endsection
