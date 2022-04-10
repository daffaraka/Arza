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
          <a class="nav-link {{ Request::is('DaftarBarang/index', 'DaftarBarang/Create-Barang') ? 'active' : '' }}" href="/DaftarBarang/index">
            <span data-feather="archive"></span>
            Daftar Barang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Penerimaan/index', 'Penerimaan/Create-Penerimaan') ? 'active' : '' }}" href="/Penerimaan/index">
            <span data-feather="dollar-sign"></span>
            Penerimaan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Pengeluaran/index', 'Pengeluaran/Create-Pengeluaran') ? 'active' : '' }}" href="/Pengeluaran/index">
            <span data-feather="shopping-cart"></span>
            Pengeluaran
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('KartuStok/index', 'KartuStok/Create-KartuStok') ? 'active' : '' }}" href="/KartuStok/index">
            <span data-feather="folder"></span>
            Kartu Stok
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Jurnal/index', 'Jurnal/Create-Jurnal') ? 'active' : '' }}" href="/Jurnal/index">
            <span data-feather="file-text"></span>
            Jurnal
          </a>
        </li>
      </ul>
    </div>
  </nav>
