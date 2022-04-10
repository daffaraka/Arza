<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">

      <div class="nav-item">
        <a class="nav-link {{Request::is ('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </div>

      <div class="nav-item dropend">
        <li class="nav-link {{Request::is ('SPD/index','SPJ/index') ? 'active' : ''}} dropdown-toggle" data-bs-toggle="dropdown">
          <span data-feather="file"></span>
            GU Triwulan
        </li>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="/SPD/index">Surat Penyediaan Dana (SPD)</a></li>
          <li><a class="dropdown-item" href="/SPJ/index">Surat Pertanggungjawaban (SPJ)</a></li>
        </ul>
      </div>

      <div class="nav-item">
        <a class="nav-link {{Request::is ('Target/index') ? 'active' : ''}}" href="/Target/index">
          <span data-feather="file-plus"></span>
          Target Triwulan
        </a>
      </div>

      <div class="nav-item">
        <a class="nav-link {{Request::is ('SPD-Triwulan/index') ? 'active' : ''}}" href="/SPD-Triwulan/index">
          <span data-feather="columns"></span>
          SPD Triwulan
        </a>
      </div>
      
      <div class="nav-item">
          <a class="nav-link {{Request::is ('Daftar/index') ? 'active' : ''}}" href="/Daftar/index">
            <span data-feather="list"></span>
            Daftar Kegiatan Belanja
          </a>
        </div>

    </ul>
  </div>
</nav>
