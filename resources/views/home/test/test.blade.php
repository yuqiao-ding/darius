id&emsp;&emsp;name&emsp;&emsp;email<br/>
@foreach($data as $val)
{{$val -> id}}&emsp;&emsp;{{$val -> name}}&emsp;&emsp;{{$val -> email}}<br/>
@endforeach
<br/>
今天是星期：
@if($day == '1')
一
@elseif($day == '2')
二
@elseif($day == '3')
三
@elseif($day == '4')
四
@elseif($day == '5')
五
@elseif($day == '6')
六
@else
七
@endif