@extends('layouts.blog')

@section('postTitle', " :: ".$post->title)

@section('content')

<div class="container-xxl">

  <div class="row">

    <div class="col-12 post-short">

      <div class="post-short-body">
      
        {!! html_entity_decode($post->content) !!}

      </div>

      <div class="post-short-footer">
        <div><i class="fa-solid fa-tags"></i>
          @foreach($post->tags AS $tag)
            <a href="{{ route('main.post.tag',$tag->title) }}">{{ $tag->title }}</a> 
          @endforeach
        </div>
        <div><i class="fa-solid fa-user"></i> {{ $post->user->name }}</div>
        <div><i class="fa-solid fa-calendar-days"></i> {{ $post->created_at }}</div>
      </div>    

    </div>

    </div>

  </div>

@endsection

