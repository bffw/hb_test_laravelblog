
<link rel="stylesheet" href="{{ asset('forindex.css') }}">

@extends('layouts.app')
@section('content')
<div class="contain">
  <div class="introduce">
   <div class="inHead">博客文章列表</div>
     <div class="inBody">
       <table class="inTable">
         <thead class="info">
       <tr>
       <th> 文章标题</th>
        <th> 发布时间</th>
        <th> 相关操作</th>  
        </tr>
  <tbody>
  @foreach ($blogs as $blog)    
<tr>
<td>{{ $blog->title }}</td>        
<td>{{ $blog->created_at }}</td>  
<td><a href="{{ route('blog.show', $blog) }}" class="btn btn-info">查看-修改文章</a>

<form method="POST" action="{{ route('blog.destroy', $blog->id) }}" id="delete-blog-{{ $blog->id }}">

@csrf
@method("DELETE")
</form>

</td>                 
</tr>
@endforeach
</tbody>
<tfoot>

 </tfoot>
 </table>
 </div>        
 </div>     
 </div>           
<div class="turn">
{{ $blogs->links() }} 

</div>
         

        
    

      
  

    


 










