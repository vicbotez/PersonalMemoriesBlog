      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{ route('dashboard') }}" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('storage/' . $confBlogFavicon) }}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">{{ $confBlogName }}</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ set_active('dashboard') }}">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link {{ set_active('admin.post.index') }}">
                  <i class="nav-icon bi bi-stickies"></i>
                  <p>Posts</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link {{ set_active('admin.tag.index') }}">
                  <i class="nav-icon bi bi-tags"></i>
                  <p>Tags</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link {{ set_active('admin.user.index') }}">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.config.index') }}" class="nav-link {{ set_active('admin.config.index') }}">
                  <i class="nav-icon bi bi-gear"></i>
                  <p>Config</p>
                </a>
              </li>

            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->