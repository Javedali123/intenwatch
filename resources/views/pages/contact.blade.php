@extends('main')

@section('title', '| Contact Us')

@section('content')

  <br />
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron jumbotron-fluid" style="background-color:#e2edff">

        <h2>Contact Us</h2>
        <hr>
        <form action="{{ url('contact') }}" method= "POST">
          {{ csrf_field() }}


          <div class="form-group">
            <label name="email">Email:</label>
            <input id="email" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label name="subject">Subject:</label>
            <input id="subject" name="subject" class="form-control">
          </div>

          <div class="form-group">
            <label name="message">Message:</label>
            <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
          </div>
          <input type="submit" value="Send Message" class="btn btn-success">
        </form>

        <br/>
        <hr>

        <p>
          Intenwatch Ltd
          <br />Registered U.K. Office. 6a Pickering Street, Leeds, LS12 2QG
          <br />E-Mail info@intenwatch.com
          <br />Tel: - 07970 765786
        </p>
<br />
        <div class="row">
          <div class="col-md-12">
        <iframe width="600" height="450" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJnytqUMZeeUgRXVwU7eBVbfI&key=AIzaSyDsx_GQNQZqrCbUKe_H08ehATq6GCtOWRc" allowfullscreen>
          </iframe>
          <br />
          <hr>
          <p>
            Intenwatch China Office
            <br />10 Dajiang Road
            <br />Nanjing 210039
            <br />China
          </p>

        <iframe width="600" height="450" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/search?q=Nanjing%2C%20Jiangsu%2C%20China&key=AIzaSyDsx_GQNQZqrCbUKe_H08ehATq6GCtOWRc" allowfullscreen></iframe>

      </div>

    </div>
      </div>
    </div>
  </div>
</div>
@endsection
