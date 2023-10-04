<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('admin/edit/' . $user['id_user']); ?>" method="POST">
                <input type="hidden" name="id" value="<?= $user['id_user']; ?>">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Pernyataan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['id_user']; ?>">
                        <?= form_error('name', ' <small class="text-danger pl-3"> ', '</small>'); ?>
                    </div>
                </div>

        </div>
        <div class="form-group row  justify-content-end">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>

        </form>
    </div>
</div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->