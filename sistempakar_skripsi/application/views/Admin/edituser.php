<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>

    <div class="row">
        <div class="col-lg">
            <form action="<?= base_url('admin/save'); ?>" method="POST">
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="Id_user" name="id_user" value="<?= $user['id_user']; ?>" readonly>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                        <?= form_error('alamat', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                        <?= form_error('tgl_lahir', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row  justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?= base_url('admin/daftaruser') ?>" type="submit" class="btn btn-info">Kembali</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->