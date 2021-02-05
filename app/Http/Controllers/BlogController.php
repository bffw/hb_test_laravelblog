<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use \Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        
        $blogs = Blog::orderBy('created_at', 'desc') ->simplePaginate(10);
        return view('index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   if(Auth::user()->id != 1) {
        session()->flash('danger', '抱歉，只有博主才可以创建文章！');
        return redirect()->back();
        }
        session()->flash('success', '开始创建文章！');
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $blog = Blog::create($request->post());
        return redirect()->route('blog.show', $blog);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {   $comments = $blog->comments;
        return view('show', ['blog' => $blog,
        'comments' => $comments,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)

    {   if(Auth::user()->id != 1) {
        session()->flash('danger', '抱歉，只有博主才可以编辑文章！');
        return redirect()->back();
        }
        session()->flash('success', '编辑文章成功！');
        return view('edit', [

        'blog' => $blog,
        
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->post()); //调用 $blog对象->update(更新数据组成的数组) 更新

        return redirect()->route('blog.show', $blog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {   if(Auth::user()->id != 1) {
        session()->flash('danger', '抱歉，只有博主才可以删除文章！');
        return redirect()->back();
        }
        $blog->delete();
        session()->flash('success', '删除文章成功！');
        return redirect()->route('home');
    }
}
