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
              <div class="col-sm-6"><h3 class="mb-0">Edit User</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">User List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                <!--begin::Create User 2-->

                  <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group mb-4">
                      <label for="nameName" class="form-label">User Name</label>
                      <input type="text" class="form-control" name="name" id="nameName" value ="{{ $user->name }}">
                      @error('name')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="roleName" class="form-label">Select User Role</label>
                      <select class="form-select" name="role" id="roleName">
                      @foreach( $roles AS $id => $role )
                        <option value="{{ $id }}" {{ $id == $user->role || ($id == 1 && $user->role == NULL) ? ' selected' : '' }}>{{ $role }}</option>
                      @endforeach
                      </select>

                      @error('role')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="emailName" class="form-label">User Email</label>
                      <input type="text" class="form-control" name="email" id="emailName" value ="{{ $user->email }}">
                      @error('email')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="user_id" value ="{{ $user->id }}">
                    </div>

                    <div class="form-group mb-4">
                      <label for="passwordName" class="form-label">User Password</label>
                      <input type="password" class="form-control" name="password" id="passwordName" value ="">
                      @error('password')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control" value="create">Update User</button>
                    </div>

                  </form>


                </div>
                <!--end::Create User-->
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
