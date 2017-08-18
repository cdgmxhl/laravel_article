<form action="{{url('login')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="email"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="提交">
</form>