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
              <div class="col-sm-6 d-flex align-items-center multitemstable">
                <h3 class="mb-0 me-3">Show Media</h3>

                <span class="text-info"><i class="bi bi-copy copymedia me-3" title="copy to clipboard" data-url="{{ asset('storage/' . $media->url) }}"></i></span>

                <a href="{{ route('admin.media.edit', $media->id) }}" class="text-success me-3"><i class="bi bi-pencil-square"></i></a>

                <form action="{{ route('admin.media.delete', $media->id) }}" method="POST" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="border-0 bg-transparent">
                    <i class="bi bi-bucket text-danger" role="button"></i>
                  </button>
                </form>

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.media.index') }}">Media</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Show Media</li>
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
                <!--begin::Small Box Widget 2-->


                  <div class="card-body p-0">
                    <table class="table table-striped">

                      <tbody>

                        <tr class="align-middle">
                          <td style="min-width: 150px;">Alt Text</td>
                          <td>
                            {{ $media->alt }}
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>Image Path</td>
                          <td>
                            {{ asset('storage/'.$media->url) }}
                          </td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td>
                            <img src="{{ asset('storage/'.$media->url) }}" alt="{{ $media->alt }}" title="{{ $media->alt }}" class="w-50">
                          </td>
                        </tr>

                      </tbody>

                    </table>
                  </div>


                </div>
                <!--end::Small Box Widget 2-->
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
