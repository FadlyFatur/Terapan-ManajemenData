<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"> Sistem Informasi</a>
          </div>

          <ul class="sidebar-menu">
              <li class="active"><a class="nav-link" href="{{ route('beranda') }}"><i class="fas fa-home"></i> <span>Beranda</span></a></li>  
              <hr>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-search"></i> <span>Pencarian Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('cariWarga') }}">Cek Warga</a></li>
                  <li><a class="nav-link" href="{{ route('Acara') }}">Acara/Kegiatan</a></li>
                </ul>
              </li>
              <hr>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pengelolaan Data</span></a>
                <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('crudWarga') }}">Data Warga</a></li>
                  <li><a class="nav-link" href="{{ route('staff') }}">Data Staff</a></li>
                </ul>
              </li>
              <hr>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Pengelolaan Website</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('editBeranda') }}">Pengelolaan Beranda</a></li>
                  <li><a class="nav-link" href="{{ route('editAcara') }}">Pengelolaan Acara</a></li>
                </ul>
              </li>
              <hr>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Profil</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('profil') }}">Sunting Profil</a></li>
                  <li><a class="nav-link" href="{{ route('reset') }}">Reset Password</a></li>
                </ul>
              </li>
              

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i>Logout/Keluar
              </a>
            </div>
        </aside>
      </div>