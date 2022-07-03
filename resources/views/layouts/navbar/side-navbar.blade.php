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
              @can('viewAsDirektur', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('list-personalia') }}">Personalia</a>
              @endcan
              @can('viewKaryawan', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('list-karyawan.index') }}">Karyawan</a>
              @endcan
            </nav>
          </div>
          @can('viewAsKaryawan', \App\Models\User::class)
          <a class="nav-link" href="{{ route('attendance.index') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-user"></i></div>
            Absensi
          </a>
          @endcan

          @can('viewAsKaryawan', \App\Models\User::class)
          <a class="nav-link" href="{{ route('salary.index') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
            Rincian Gaji
          </a>
          @endcan

          @can('viewKaryawan', \App\Models\User::class)
          <a class="nav-link" href="{{ route('attendance-details') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-clock"></i></div>
            Rincian Absensi
          </a>
          @endcan

          @if (Auth::user()->position_id != '3')
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGaji" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
            Rincian Gaji
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          @endif
          <div class="collapse" id="collapseGaji" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              @can('viewAsDirektur', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('personalia-salary') }}">Personalia</a>
              @endcan
              @can('viewKaryawan', \App\Models\User::class)
                <a class="nav-link" href="{{ route ('karyawan-salary.index') }}">Karyawan</a>
              @endcan
            </nav>
          </div>
        </div>
      </div>
    </nav>
</div>