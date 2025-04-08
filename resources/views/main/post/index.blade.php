@extends('layouts.blog')

@section('content')

<div class="container-xxl">

  <div class="row">

    @foreach($posts AS $post)

    <div class="col-12 post-short">

      <div class="post-short-body">
      
        <h5 class="post-short-title"><a href="{{ route('main.post.show',$post->slug) }}">{{ $post->title }}</a></h5>
      
        {!! $post->getExcerpt() !!}

      </div>

      <div class="post-short-footer">
        <div><i class="fa-brands fa-readme"></i> <a href="{{ route('main.post.show',$post->slug) }}">Read More</a></div>
        <div><i class="fa-solid fa-tags"></i>
          @foreach($post->tags AS $tag)
            <a href="{{ route('main.post.tag',$tag->title) }}">{{ $tag->title }}</a> 
          @endforeach
        </div>
        @if( isset($post->user->name) )
        <div><i class="fa-solid fa-user"></i> {{ $post->user->name }}</div>
        @endif
        <div><i class="fa-solid fa-calendar-days"></i> {{ $post->created_at }}</div>
      </div>    

    </div>

    @endforeach

    <div class="col-12 post-short">
      {{ $posts->links() }}
    </div>

    </div>

  </div>

@endsection

