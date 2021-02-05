
@extends('layouts.app')
@section('content')

<div class="container">
<div class="card">
<div class="cHead">文章详情</div>
<div class="cBody">
<h1 class="text-center">{{ $blog->title }}</h1>
<div>
<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info">修改文章</a>
</div>
<div>
<a href="javascript:deleteConfirm({{ $blog->id }});">删除文章</a> 
</div>
<p><small>发布时间</small>{{ $blog->created_at }}</p>
<hr>
<p>{{ $blog->content }}</p>


</div>
</div>
@if ($errors->has('content'))

<span>

<strong>{{ $errors->first('content') }}</strong>

</span>

@endif

<div class="commentshow">
<h3>评论</h3>
<ul> @foreach ($comments as $comment)
<li><small>{{ $comment->userName() }} 评论说：“ {{ $comment->content }} ”</small></li>
@endforeach
</u>
</br>
</br>
<form form method="POST" action="{{ route('comment.store') }}">
@csrf
<input  type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<input type="hidden" name="blog_id" value="{{ $blog->id }}">
<div>
<div>
<label  for="content"></label>
<textarea placeholder="您对本篇文章有何看法呢"id="content" class="form-control" cols="50" rows="5" name="content" ></textarea>
</div>


<button class="btn btn-primary" type="submit">
发表评论
</button>


</form>
</div>
@endsection
