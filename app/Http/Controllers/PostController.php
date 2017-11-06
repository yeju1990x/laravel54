<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    // 文章列表页
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(6);
        return view("/post/index", compact('posts'));
    }

    //文章详情页
    public function show(Post $post)
    {
        return view("/post/show", compact("post"));
    }

    // 文章新建页
    public function create()
    {
        return view("/post/create");
    }

    // 提交文章
    public function store()
    {
        // 验证
        $this->validate(request(),[
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);
        // 逻辑
        Post::create(request(['title','content']));
        // 渲染
        return redirect("/posts");
    }

    // 文章编辑页
    public function edit(Post $post)
    {
        return view("/post/edit", compact("post"));
    }

    // 提交文章编辑
    public function update(Post $post)
    {
        // 验证
        $this->validate(request(),[
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ]);
        // 逻辑
        $post->title = request('title');
        $post->content = request('content');
        $post->save();
        // 渲染
        return redirect("/posts");
    }

    // 删除文章
    public function delete()
    {
        return;
    }

    // 上传图片
    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditH5File')->storePublicly(md5(time()));
        return assert("storage/".$path);
    }
}
