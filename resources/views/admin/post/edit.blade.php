@extends('admin.layouts.admin')

@section('content')
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Edit Post</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-12 col-12">
                <!--begin::Upodate Post -->

                  <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-4">
                      <label for="postTitle" class="form-label">Post Title</label>
                      <input type="text" class="form-control" name="title" id="postTitle" aria-describedby="postHelp" value="{{ $post->title }}">
                      @error('title')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label class="form-label">Post Slug</label>
                      <div><a href="{{ url('/') . '/post/' . $post->slug}}" target="_blank">{!! url('/') . "/post/<strong>" . $post->slug."</strong>" !!}</a></div>
                    </div>

                    <div class="form-group  mb-4">
                      <textarea name="content" id="content">{{ $post->content }}</textarea>
                      @error('content')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label class="form-label">Select Tags</label>
                    </div>

                    <div class="form-group mb-4">
                      <select id="tag-ids" name="tag_ids[]" multiple="multiple" class="form-select">
                        @foreach( $tags AS $tag )
                          <option {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array( $tag->id, $post->tags->pluck('id')->toArray() ) ? ' selected' : ''; }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                      </select>
                      @error('tag_ids')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-5">
                      <button type="submit" class="btn btn-primary form-control" value="create">Update Post</button>
                    </div>

                    <div class="mb-5">
                      <ul class="list-group">
                        <li class="list-group-item list-group-item-info">Notes</li>
                        <li class="list-group-item">Use:
                          <i id="postCopy" class="ccopy bi bi-copy"></i>
                          <br>
                        &lt;!--more--&gt;
                        <br>
                        as delimeter</li>
                      </ul>
                    </div>

                  </form>


                </div>
                <!--end::Update Post-->
              </div>

              <!--end::Col-->
            </div>
            <!--end::Row-->

          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
@endsection
