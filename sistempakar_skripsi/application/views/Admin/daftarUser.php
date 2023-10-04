<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Member <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMemberModal"> Tambah Member Baru</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col-">Akses</th>
                        <th scope="col-">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($user as $u) : ?>
                        <tr>
                            <td><?= $u['id_user'] ?></td>
                            <td><?= $u['name'] ?> </td>
                            <td><?= $u['email'] ?> </td>
                            <td><?= $u['alamat'] ?> </td>
                            <td><?= $u['user_access'] ?> </td>
                            <td style="text-align: center;">
                                <a href="<?= base_url(); ?>admin/ubah/<?= $u['id_user']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="<?= base_url(); ?>admin/hapus/<?= $u['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus');">Hapus</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
</div>

<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="newMemberModal" tabindex="-1" role="dialog" aria-labelledby="newMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMemberModalLabel">Tambah Member Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/daftarUser'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="user_access" name="user_access">
                            <option value=""> Pilih user akses</option>
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                        </div>

                        <!-- <div class="form-group">
                        <input type="text" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                </div> -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
            </form>
        </div>
    </div>