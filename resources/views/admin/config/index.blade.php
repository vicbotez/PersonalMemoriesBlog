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
              <div class="col-sm-6"><h3 class="mb-0">Config</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
              <div class="col-lg-6 col-12">

                <form method="POST" action="{{ route('admin.config.update') }}" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')

                  <div class="mb-3">
                    <label for="blogName" class="form-label">Blog Name</label>
                    <input type="text" class="form-control" id="blogName" name="blog_name" value="{{ $config->blog_name ?? '' }}">
                  </div>

                  <div class="mb-3">
                    <label for="blogTitle" class="form-label">Blog Title</label>
                    <input type="text" class="form-control" id="blogTitle" name="blog_title" value="{{ $config->blog_title ?? '' }}">
                  </div>

                  <div class="mb-3">
                    <label for="blogFavicon" class="form-label">Blog Favicon</label>
                    <div class="mb-2">
                      <img src="{{ asset('storage/'.$config->blog_favicon) }}" style="width:32px;height:32px;">
                    </div>
                    <input class="form-control" type="file" id="blogFavicon" name="blog_favicon" value="">
                  </div>

                  <div class="mb-3">
                    <label for="blogMetaTitle" class="form-label">Blog Meta Title</label>
                    <input type="text" class="form-control" id="blogMetaTitle" name="blog_meta_title" value="{{ $config->blog_meta_title ?? '' }}">
                  </div>

                  <div class="mb-3">
                    <label for="blogMetaDescription" class="form-label">Blog Meta Description</label>
                    <textarea id="blogMetaDescription" name="blog_meta_description" class="form-control" style="height: 100px;">{{ $config->blog_meta_description ?? '' }}</textarea>
                  </div>

                  <div class="mt-5 mb-5">
                    <button type="submit" class="btn btn-primary form-control">Save Configuration</button>
                  </div>

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