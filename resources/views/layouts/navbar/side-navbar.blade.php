<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Interface</div>
          @if (Auth::user()->position_id != '3')
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Accounts
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          @endif
          <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              @can('viewPersonalia', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('list-personalia') }}">Personalia</a>
              @endcan
              @can('viewKaryawan', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('list-karyawan.index') }}">Karyawan</a>
              @endcan
            </nav>
          </div>
          <a class="nav-link" href="{{ route('attendance.index') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-user"></i></div>
            Absensi
          </a>

          <a class="nav-link" href="{{ route('salary.index') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
            Rincian Gaji
          </a>

          <a class="nav-link" href="{{ route('details.index') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-clock"></i></div>
            Rincian Absensi
          </a>

          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGaji" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
            Rincian Gaji
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseGaji" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="{{ route ('list-personalia') }}">Personalia</a>
                <a class="nav-link" href="{{ route ('recaps.index') }}">Karyawan</a>
            </nav>
          </div>
        </div>
      </div>
    </nav>
</div>