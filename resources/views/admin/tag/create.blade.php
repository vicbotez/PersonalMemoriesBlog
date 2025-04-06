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
              <div class="col-sm-6"><h3 class="mb-0">Create Tag</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Tags</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Tag</li>
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
                <!--begin::Create Tag 2-->

                  <form action="{{ route('admin.tag.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                      <label for="tagName" class="form-label">Tag Name</label>
                      <input type="text" class="form-control" name="title" id="tagName" aria-describedby="tagHelp">
                      @error('title')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control" value="create">Create Tag</button>
                    </div>

                  </form>


                </div>
                <!--end::Create Tag-->
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
