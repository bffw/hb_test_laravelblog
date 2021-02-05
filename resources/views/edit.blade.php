@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="cHead">编辑该文章</div>
<div class="cBody">
<form method="POST" action="{{ route('blog.update',$blog->id)}}">
@csrf
@method("PATCH")
<div class="form-group">
<label for="title">博客文章标题</label>
<input type="text" class="form-control" id="title" placeholder="{{ $blog->title}}(原标题）" name="title">

</div>
<div class="form-group">
<label for="content">博客文章内容</label>
<textarea id="content" cols="30" rows="10" class="form-control" name="content">{{ $blog->content }}</textarea>
</div>
<button class="btn btn-primary" type="submit">确认完成编辑</button>
</form>
</div>
</div>
@endsection