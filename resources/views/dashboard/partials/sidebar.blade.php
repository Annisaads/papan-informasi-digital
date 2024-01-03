<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div
        class="brand-logo d-flex align-items-center justify-content-between"
      >
        <a href="./index.html" class="text-nowrap logo-img">
          <img
            src="{{asset('dashboard/assets/images/logos/logo-ptsb.png')}}"
            width="200"
            alt=""
          />
        </a>
        <div
          class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
          id="sidebarCollapse"
        >
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Halaman Utama</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('dashboard.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Beranda</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Form</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('profile.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Profil</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('video.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Video</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('foto.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Foto</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('pengumuman.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Pengumuman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{route('pesan-tokoh.index')}}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Pesan Tokoh</span>
            </a>
          </li>

           <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu"></span>
          </li>
          <li class="sidebar-item">
            <a
              href="{{route('logout')}}"
              class="btn btn-outline-primary mx-3 mt-2 d-block"
              >Keluar</a
            >
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
