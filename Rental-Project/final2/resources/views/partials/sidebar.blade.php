<ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-text mx-3">Admin Rental</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

     <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Dropdown Example -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('cars.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Mobil</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('drivers.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Driver</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('payments.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Penyewa</span>
        </a>
    </li>

        <!-- Tambahkan kode modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda ingin mengakhiri sesi saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Perbarui kode elemen daftar -->
    <li class="nav-item active">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="#">
            <i class="fas fa-logout fa-fw"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
