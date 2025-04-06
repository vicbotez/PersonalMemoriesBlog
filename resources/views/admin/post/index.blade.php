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
                <h3 class="mb-0 me-3">Post List</h3>

                <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-sm me-3">Add Post</a>

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Posts</li>
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

                      <thead>
                        <tr>
                          <th>Post Title</th>
                          <th>Related Tags</th>
                          <th colspan="3" class="text-center">Action</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach($posts AS $post)
                        <tr class="align-middle">
                          <td>{{ $post->title }}</td>
                          <td>
                            @foreach($post->tags AS $tag)
                              <a href="{{ route('admin.post.tag', $tag->title) }}">
                              {{ $tag->title }}
                              </a>
                              @if(!$loop->last), @endif
                            @endforeach
                          </td>
                          <td class="text-end">
                            <a href="{{ route('admin.post.show', $post->id) }}" class="text-alert"><i class="bi bi-eye"></i></a>
                          </td>
                          <td class="text-center">
                            <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="bi bi-pencil-square"></i></a>
                          </td>
                          <td class="text-left">
                            <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent">
                                <i class="bi bi-bucket text-danger" role="button"></i>
                              </button>
                            </form>
                          </td>
                          {{--<td>
                            <input type="checkbox" name="posts[]" vallue="{{ $post->id }}">
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
