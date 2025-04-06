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
                <h3 class="mb-0 me-3">User List</h3>

                <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-sm me-3">Add User</a>

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User List</li>
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

                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th colspan="3" class="text-center">Action</th>
                        </tr>
                      </thead>

                      <tbody>

                        @foreach($users AS $user)
                        <tr class="align-middle">
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $roles[ $user->role ?? 1 ] }}</td>
                          <td class="text-end">
                            <a href="{{ route('admin.user.show', $user->id) }}" class="text-alert"><i class="bi bi-eye"></i></a>
                          </td>
                          <td class="text-center">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="text-success"><i class="bi bi-pencil-square"></i></a>
                          </td>
                          <td class="text-left">
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="border-0 bg-transparent">
                                <i class="bi bi-bucket text-danger" role="button"></i>
                              </button>
                            </form>
                          </td>
                          {{--<td>
                            <input type="checkbox" name="users[]" vallue="{{ $user->id }}">
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
