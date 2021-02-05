
@extends('layouts.app')
@section('content')
<div class="container">
<div class="check">
<a href="{{route('blog.index')}}"class="btnToblog">点击这里查看博客</a>
</div>
<div class="create">
<a href="{{ route('blog.create') }}" class="dropdown-item">点击这里新增博客</a>
</div>
</div>
@endsection