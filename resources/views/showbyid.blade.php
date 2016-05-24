
<h1>{{$dealer->name}}</h1>
<br>
<p>
  {{$dealer->description}}
</p>

{!! Form::open() !!}
  {!! Form::textarea('comment')!!}
  {!! Form::submit('Save Comment')!!}

{!! Form::close() !!}
