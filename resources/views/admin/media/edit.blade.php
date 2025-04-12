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
              <div class="col-sm-6"><h3 class="mb-0">Edit Media</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.media.index') }}">Media</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Media</li>
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

                  <form action="{{ route('admin.media.update', $media->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-4">
                      <label for="mediaAlt" class="form-label">Media Alt</label>
                      <input type="text" class="form-control" name="alt" id="mediaAlt" value ="{{ $media->alt }}">
                      @error('alt')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="mediaAlt" class="form-label">Media Image</label>
                      <img src="{{ asset('storage/' . $media->url) }}" class="w-100">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control" value="create">Update Media</button>
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
