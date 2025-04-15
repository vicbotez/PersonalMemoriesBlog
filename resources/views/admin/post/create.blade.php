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
              <div class="col-sm-6"><h3 class="mb-0">Create Post</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Post</li>
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
                <!--begin::Create Post-->

                  <form action="{{ route('admin.post.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                      <label for="postTitle" class="form-label">Post Title</label>
                      <input type="text" class="form-control" name="title" id="postTitle" aria-describedby="postHelp" value="{{ old('title') }}">
                      @error('title')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group  mb-4">
                      <textarea name="content" id="content" rows="80">{{ old('content') }}</textarea>
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
                          <option {{ is_array( old('tag_ids') ) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''; }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                      </select>
                      @error('tag_ids')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-5">
                      <button type="submit" class="btn btn-primary form-control" value="create">Create Post</button>
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
                <!--end::Create Post-->
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
