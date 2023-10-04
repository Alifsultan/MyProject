<header class="masthead bg-info">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h2 class="text-black font-weight-bold">LOGIN</h2>
                                    </div>
                                    <?= $this->session->flashdata(''); ?>
                                    <form class="user" method="post" action="<?= base_url('home/login'); ?>">
                                        <div class="form-group">
                                            <p>Email
                                            <p>
                                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email" alue="<?= set_value('email') ?>">
                                                <?= form_error('email', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <p>Password
                                            <p>
                                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password">
                                                <?= form_error('password', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="<?= base_url('home/register'); ?>">Belum punya akun? Daftar akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>