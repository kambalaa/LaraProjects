
@foreach($dealers as $dealer)
  <li><a href="/dealers/{{$dealer -> id}}">{{ $dealer->name }}</a></li>
@endforeach
