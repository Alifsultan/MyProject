<header class="masthead">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('home/register'); ?>">
                                <div class="form-group">
                                    <p>Nama Lengkap
                                    <p>
                                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                                        <?= form_error('name', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Email
                                    <p>
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" value="<?= set_value('email') ?>">
                                        <?= form_error('email', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Alamat
                                    <p>
                                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                                        <?= form_error('alamat', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <p>Tanggal Lahir
                                    <p>
                                        <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="<?= set_value('tgl_lahir') ?>">
                                        <?= form_error('tgl_lahir', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-info btn-user btn-block">
                                    Daftar akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('home/login'); ?>">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>