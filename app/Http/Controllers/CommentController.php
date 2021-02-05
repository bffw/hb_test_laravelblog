<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Comment::create($request->post());
session()->flash('success', '评论成功！');

return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function show(Commment $commment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function edit(Commment $commment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commment $commment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commment  $commment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commment $commment)
    {
        //
    }
}
