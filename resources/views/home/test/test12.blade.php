<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表单提交</title>
</head>

<body>
    <form action="{{route('test8')}}" method="post">
       <p>姓名：<input type="text" name="name" value=""  /></p> 
       <p>密码：<input type="text" name="password" value="" /></p> 
       <p>邮箱：<input type="text" name="email" value="" /></p> 
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"  /> -->
        {{ csrf_field() }}
        <input type="submit" value="提交" />
    </form>
</body>


</html>