<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示文章</title>
    <script src="js/jquery.min.js"></script>
    <script>
        $(function () {
            //删除文章
            $('.del').click(function () {
                if(confirm('真的删除吗?')){
                    $.ajax({
                        type : 'DELETE',
                        url  : '/article/'+$(this).attr('art_id'),
                        data : {},
                        dataType : 'json',
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token()}}'
                        },
                        success : function (ret) {
                            if(ret.status==0){
                                location.reload();  //成功,刷新页面
                            }else{
                                alert('删除失败'+ret.msg);
                            }
                        }
                    })
                }
                
            })
        })
    </script>
</head>
<body>
    <div>欢迎, {{Auth::user()->name}}  <a href="{{url('logout')}}">退出</a></div>
    <a href="{{url('article/create')}}">添加文章</a><hr>
    <ul>
        @foreach($data as $v)

            <li>
                <a href="{{url('article',['id'=>$v->id])}}"><h3>{{$v->title}}</h3></a>
                <i>作者:{{$v->user->name}}</i>
                <span>
                    <a href="{{url('article/'.$v->id.'/edit')}}">修改</a>
                    <button class="del" art_id="{{$v->id}}">删除</button>
                </span>
            </li>
        @endforeach 
    </ul>
</body>
</html>