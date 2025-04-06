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
              <div class="col-sm-6"><h3 class="mb-0">Create User</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">User List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create User</li>
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
                <!--begin::Create User-->

                  <form action="{{ route('admin.user.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                      <label for="nameName" class="form-label">User Name</label>
                      <input type="text" class="form-control" name="name" id="nameName" aria-describedby="nameHelp">
                      @error('name')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="roleName" class="form-label">Select User Role</label>
                      <select class="form-select" name="role" id="roleName">
                      @foreach( $roles AS $id => $role )
                        <option value="{{ $id }}" {{ $id == old('role') ? ' selected' : '' }}>{{ $role }}</option>
                      @endforeach
                      </select>

                      @error('role')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>


                    <div class="form-group mb-4">
                      <label for="emailName" class="form-label">User Email</label>
                      <input type="text" class="form-control" name="email" id="emailName" aria-describedby="emailHelp">
                      @error('email')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="passwordName" class="form-label">User Password</label>
                      <input type="password" class="form-control" name="password" id="passwordName" aria-describedby="passwordHelp">
                      @error('password')
                        <div  class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary form-control" value="create">Create User</button>
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
