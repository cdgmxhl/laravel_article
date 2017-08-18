<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <form action="{{url('article')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="title">
        <textarea name="content"></textarea>
        <input type="hidden" name="user_id" value="1">
        <input type="submit" value="提交">
    </form> -->
    
     {!! Form::model(null,['url'=>url('article'),'method'=>'post']) !!}
        {!! Form::text('title', null, ['class' => 'form-control','autocomplete'=>'off']) !!}
        {!! Form::text('content', null, ['class' => 'form-control','autocomplete'=>'off']) !!}
        {!! Form::hidden('user_id', Auth::user()->id, ['autocomplete'=>'off']) !!}
        {!! Form::submit('提交',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}




    <!-- 错误信息 -->
    @if($errors->any()) 
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>