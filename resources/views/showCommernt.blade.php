<form form method="POST" action="{{ route('comment.store') }}">
@csrf
<input type=input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<input type="hidden" name="blog_id" value="{{ $blog->id }}">
<div>
<label  for="content"></label>
<textarea id="content" class="form-control" cols="30" rows="10" name="content">
您对本篇文章有何看法呢？
</textarea>
@if ($errors->has('content'))

<span>

<strong>{{ $errors->first('content') }}</strong>

</span>

@endif
<button class="btn btn-primary" type="submit">
发表评论
<button>
</div>
</textarea>
</form>
