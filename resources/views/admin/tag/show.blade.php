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
                <h3 class="mb-0 me-3">Tag</h3>

                <a href="{{ route('admin.tag.edit', $tag->id) }}" class="text-success me-3"><i class="bi bi-pencil-square"></i></a>

                <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" style="display: inline-block;">
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
                  <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Tags</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Show Tag</li>
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
              <div class="col-lg-8 col-12">
                <!--begin::Small Box Widget 2-->


                  <div class="card-body p-0">
                    <table class="table table-striped">

                      <tbody>

                        <tr class="align-middle">
                          <td>Title</td>
                          <td class="text-end">
                            {{ $tag->title }}
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>Related Posts</td>
                          <td class="text-end">
                            <a href="{{ route('admin.post.tag',$tag->title) }}">
                            {{ $tag->posts_count }}
                            </a>
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
