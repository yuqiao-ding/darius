  @foreach($data as $val)
  id:{{$val -> id}}
  name:{{$val -> name}}
  {{$val -> age}}
  {{$val -> created_at}}
  {{$val -> email}}
  {{$val -> address}},
  @endforeach


  