@extends('main')

@section('title', '| Homepage')

@section('content')
  <div class="row">
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid" style="background-color:#90EE90">


          <style>
          img {
              float: left;
          }
          </style>

        <!--  <video width="320" height="240" autoplay loop>
  <source src="IntenwatchSpinLogo.mp4" type="video/mp4" />

  Your browser does not support the video tag.
</video> -->
       <!--<img src="intenwatch.png" alt="Intenwatch Logo " style="width:300px;height:150px;"> -->
          <h1>What is Intenwatch?</h1>
          <p class="lead">Intenwatch (International Energy Watch) is a system that uses the Raspberry Pi and is designed specifically to assist in the clear and easy understanding of the use and consumption of electricity. <br />

<br />The Intenwatch system is designed to securely analyse your electricity consumption in near Real Time, in an efficient and economical way. Providing you with a clear and accurate understanding of what your electricity consumption is.

<br /><br />Detailed reports and analysis of multiple unobtrusive sites are created in real time, and can be accessed via a mobile or web application, or even delivered right to your email box.</p>



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
          <h3>Latest News</h3>
          <h3></h3>

        </div>
       </div>
     </div>
  @endsection
