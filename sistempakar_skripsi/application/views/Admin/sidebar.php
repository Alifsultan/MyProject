<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="card-img mx-5">
            <br>
            <br>
            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img">
        </div>
    </a>
    <br>
    <br>
    <center>
        <div class="sidebar-brand-text mx-4 text-white">Hai, <?= $user['name']; ?></div>
    </center>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>
    <!-- Nav Item - my profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Nav Item  edit profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profil</span></a>
    </li>
    <!-- Nav Item change password -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/changePassword') ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span></a>
    </li>
    <!-- Nav Item Daftar User -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/daftaruser') ?>">
            <i class="fas fa-fw fa-address-book "></i>
            <span>Daftar User</span></a>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Riwayat
        </div>

        <!-- Nav Item Data Uji-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Riwayat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Riwayat Pasien</h6>
                <a class="collapse-item" href="<?= base_url('admin/daftar_riwayatForward'); ?>">Riwayat Pasien Forward</a>
                <a class="collapse-item" href="<?= base_url('admin/daftarriwayat'); ?>">Riwayat Pasien Backward</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/index'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->