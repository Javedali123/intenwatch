<!-- Default Bootstrap Navbar -->
<div class="row" style="background:#e2edff;">
    <div class="col-md-12">
      <style>
        img {
            float: left;
        }
      </style>

      <!--  <video width="320" height="240" autoplay loop>
<source src="IntenwatchSpinLogo.mp4" type="video/mp4" />

Your browser does not support the video tag.
</video> -->
    <a href="https://www.facebook.com/Intenwatchcom-276893569513719/" class="fa fa-facebook"></a>
    <a href="https://twitter.com/intenwatch22318" class="fa fa-twitter"></a>
    <a href="https://plus.google.com/u/0/" class="fa fa-google"></a>
    <a href="https://www.youtube.com/channel/UCvSKcbxeX3sJ7jyBfr4PeCw?view_as=subscriber" class="fa fa-youtube"></a>

     <img src="intenwatch.png" alt="Intenwatch Logo " style="width:300px;height:150px;">
        <h2>Intenwatch.com</h2>
        <p class="lead">International Energy Watch</p>


      </div>
    </div>
  </div> <!-- end of header .row -->

  <div class="row">
    <div class="col-md-8">




  </div>


     </div>
   </div>

<nav class="navbar navbar-inverse bg-dark">
<!--<nav class="navbar navbar-inverse bg-primary">-->
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Intenwatch</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul class="nav navbar-nav">
     <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
     <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
     <li class="{{ Request::is('presentations') ? "active" : "" }}"><a href="/presentations">Pi/Presentations</a></li>
     <li class="{{ Request::is('mission') ? "active" : "" }}"><a href="/mission">Mission</a></li>
     <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
     <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Posts
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>


            <li role="separator" class="divider"></li>
            <li><a href="#">Close</a></li>
          </ul>
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
