
@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
<div class="cHead">添加该文章</div>
<div class="cBody">
<form method="POST" action="{{ route('blog.store') }}">
@csrf
<div class="form-group">
<label for="title">博客文章标题</label>
<input type="text" class="form-control" id="title" placeholder="请输入文章标题" name="title">
</div>
<div class="form-group">
<label for="content">博客文章内容</label>
<textarea id="content" cols="30" rows="10" class="form-control" name="content"></textarea>
</div>
<button class="btn btn-primary" type="submit">发布文章</button>
</form>
</div>
</div>
@endsection