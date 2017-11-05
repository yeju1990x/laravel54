<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 文章列表页
    public function index()
    {
        return view("/post/index");
    }

    //文章详情页
    public function show()
    {
        return;
    }

    // 文章新建页
    public function create()
    {
        return;
    }

    // 提交文章
    public function store()
    {
        return;
    }

    // 文章编辑页
    public function edit()
    {
        return;
    }

    // 提交文章编辑
    public function update()
    {
        return;
    }

    // 删除文章
    public function delete()
    {
        return;
    }
}
