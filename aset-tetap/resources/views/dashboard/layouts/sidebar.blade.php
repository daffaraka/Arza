<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Aset/index') ? 'active' : '' }}" href="/Aset/index">
            <span data-feather="list"></span>
            Aset
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Mutasi/index') ? 'active' : '' }}" href="/Mutasi/index">
            <span data-feather="minimize-2"></span>
            Mutasi Aset
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Daftar/index') ? 'active' : '' }}" href="/Daftar/index">
            <span data-feather="package"></span>
            Daftar Aset Tetap
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Peminjaman/index') ? 'active' : '' }}" href="/Peminjaman/index">
            <span data-feather="edit"></span>
            Peminjaman Barang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Rekap/index') ? 'active' : '' }}" href="/Rekap/index">
            <span data-feather="file-text"></span>
            Rekapitulasi
          </a>
        </li>
      </ul>
    </div>
  </nav>
