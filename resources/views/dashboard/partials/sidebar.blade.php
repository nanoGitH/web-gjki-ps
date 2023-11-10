<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="columns"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">
            <span data-feather="home"></span>
            Halaman Depan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/activities*') ? 'active' : '' }}" href="/dashboard/activities">
            <span data-feather="clipboard"></span>
            Daftar Aktivitas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/petugas*') ? 'active' : '' }}" href="/dashboard/petugas">
            <span data-feather="users"></span>
            Daftar Petugas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="calendar"></span>
            Jadwal
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Pengaturan</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Pengaturan admin
          </a>
        </li>
      </ul>
    </div>
  </nav>