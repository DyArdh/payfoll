<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link" href="/listKaryawan">
            <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
            Dashboard
          </a>
          <div class="sb-sidenav-menu-heading">Interface</div>

          <a class="nav-link" href="#">
            <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
            Perusahaan
          </a>

          @if (Auth::user()->role != 'Karyawan')
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
            Accounts
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          @endif
          <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              @can('viewAdmin', \App\Models\User::class)
                <a class="nav-link" href="/account/admin">Admin</a>
              @endcan
              @can('viewKaryawan', \App\Models\User::class)
                <a class="nav-link" href="/account/karyawan">Karyawan</a>
              @endcan
            </nav>
          </div>

          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStock" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-wheat-awn"></i></div>
              Processing I
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseStock" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#">Gudang</a>
              <a class="nav-link" href="#">Pengeringan</a>
              <a class="nav-link" href="#">Penggilingan</a>
            </nav>
          </div>

          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProcess2" aria-expanded="false" aria-controls="collapseProcess2">
            <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
              Processing II
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseProcess2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionProcess2">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#process2CollapseSortir" aria-expanded="false" aria-controls="process2CollapseSortir">
                    Sortir
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="process2CollapseSortir" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionProcess2">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Sortir I</a>
                        <a class="nav-link" href="#">Sortir II</a>
                    </nav>
                </div>
                <a class="nav-link" href="#">
                    Produk
                </a>
            </nav>
          </div>

          @can('viewPagePenjualan', \App\Models\User::class)
          <div class="sb-sidenav-menu-heading">Sale</div>
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePenjualan" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-cart-shopping"></i></div>
            Penjualan
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapsePenjualan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#">Penjualan</a>
              <a class="nav-link" href="#">Rekap Penjualan</a>
            </nav>
          </div>
          @endcan

          @can('viewPagePenjualan', \App\Models\User::class)
          <div class="sb-sidenav-menu-heading">Finance</div>
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseKeuangan" aria-expanded="false" aria-controls="collapseLayouts">
            <div class="sb-nav-link-icon"><i class="fas fa-sack-dollar"></i></div>
            Keuangan
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapseKeuangan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
              <a class="nav-link" href="#">Pengeluaran</a>
              <a class="nav-link" href="#">Laporan Keuangan</a>
              <a class="nav-link" href="#">Peramalan Penjualan</a>
            </nav>
          </div>
          @endcan
        </div>
      </div>
    </nav>
</div>