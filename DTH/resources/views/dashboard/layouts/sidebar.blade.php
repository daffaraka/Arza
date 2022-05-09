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
          <a class="nav-link {{ Request::is('DTH/index', 'DTH/Create-DTH') ? 'active' : '' }}" href="/DTH/index">
            <span data-feather="archive"></span>
            DTH
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('NPWP/index') ? 'active' : '' }}" href="{{route('NPWP.index')}}">
            <span data-feather="file-text"></span>
            NPWP
          </a>
        </li>
      </ul>
    </div>
  </nav>
