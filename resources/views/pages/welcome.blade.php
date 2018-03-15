@extends('main')

@section('title', '| Homepage')

@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1>Intenwatch.com</h1>
          <p class="lead">International Energy Watch</p>

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

        <div class="jumbotron">
          <h3>Latest Posts</h3>
          <h3></h3>

        </div>
       </div>
     </div>
  @endsection
