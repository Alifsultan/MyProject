<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <br>
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="card-img mx-5">
            <br>
            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img">
        </div>
    </a>
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
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>
    <!-- Nav Item  edit profil -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Edit Profil</span></a>
    </li>
    <!-- Nav Item change password -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/changePassword') ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kuesioner
    </div>
    <!-- Nav Item - jawab kuesioner -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kuesioner/index') ?>">
            <i class="fas fa-fw fa-edit"></i>
            <span>Konsultasi</span></a>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Nav Item logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home/index'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->