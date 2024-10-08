<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Tabel</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('ruangan.index') }}">Ruangan</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('barang.index') }}">Barang</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('merk.index') }}">Merk</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('kondisi.index') }}">Kondisi</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Peminjaman</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ route('pm_barang.index') }}">Peminjaman Barang</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('pm_ruangan.index') }}">Peminjaman Ruangan</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Maintenance</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('m_barang.index') }}">Maintenance Barang</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('m_barang.index') }}">Maintenance Barang</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('l_barang.index') }}">Peminjaman Barang</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('l_ruangan.index') }}">Peminjaman Ruangan</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('lm_barang.index') }}">Maintenance Barang</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('lm_ruangan.index') }}">Maintenance Ruangan</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
