<form action="{{url('register')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="password" name="password" id="">
    <input type="submit" value="提交">
</form>