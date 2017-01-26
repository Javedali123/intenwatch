@extends('main')

@section('title', '| Edit Post')

@section('content')

  <div class="row">
  {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
  <div class="col-md-8">
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

        {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
  </div>

    <div class="col-md-4">
      <div class="well">
        <dl class"dl-horizontal">
          <dt>Create At:</dt>
          <dd>{{ date( 'j M, Y H:i', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class"dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{ date( 'j M, Y H:i', strtotime($post->updated_at)) }}</dd>
       </dl>
       <hr>
       <div class="row">
         <div class="col-sm-6">
           {!! Html::linkroute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}

           </div>

           <div class="col-sm-6">
             {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
                 {!! Form::close() !!}
          </div>
        </div>
      </div>
     </div>

    </div><!-- end of form-->

@endsection