@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        @include("post.carousel")
        <div style="height: 20px;">
        </div>
        <div>
            @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/posts/{{$post->id}}}" >{{$post->title}}</a></h2>
                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="/user/5}}">yeju</a></p>

                {!! str_limit($post->content,200,'....') !!}
                <p class="blog-post-meta">赞 0  | 评论 0</p>
            </div>
            @endforeach

            {{$posts->links()}}
        </div><!-- /.blog-main -->
    </div>
@endsection