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
              <div class="col-sm-6 d-flex align-items-center">
                <h3 class="mb-0 me-3">Media List</h3>

                <a href="{{ route('admin.media.create') }}" class="btn btn-primary btn-sm me-3">Add Media File</a>

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Media</li>
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
                    <table class="table table-striped multitemstable">

                      <thead>
                        <tr>
                          <th>Media File</th>
                          <th>Media URL</th>
                          <th colspan="4" class="text-center">Action</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach($media AS $file)
                        <tr class="align-middle">
                          <td><img src="{{ asset('storage/' . $file->url) }}" style="width: 150px;" alt="{{ $file->alt }}" title="{{ $file->alt }}"></td>
                          <td class="text-break">{{ asset('storage/' . $file->url) }}</a></td>
                          <td class="text-end text-info"><i class="bi bi-copy copymedia" title="copy to clipboard" data-url="{{ asset('storage/' . $file->url) }}"></i></td>
                          <td class="text-center">
                            <a href="{{ route('admin.media.show', $file->id) }}" class="text-alert"><i class="bi bi-eye"></i></a>
                          </td>
                          <td class="text-center">
                            <a href="{{ route('admin.media.edit', $file->id) }}" class="text-success"><i class="bi bi-pencil-square"></i></a>
                          </td>
                          <td class="text-left">
                            <form action="{{ route('admin.media.delete', $file->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent">
                                <i class="bi bi-bucket text-danger" role="button"></i>
                              </button>
                            </form>
                          </td>
                          {{--<td>
                            <input type="checkbox" name="media[]" vallue="{{ $file->id }}">
                          </td>--}}
                        </tr>
                        @endforeach

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
