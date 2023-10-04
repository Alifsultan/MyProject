<!-- Begin Page Content -->
<?php
$riwayat_backward = $this->db->query("SELECT * FROM `riwayat_backward` INNER JOIN user ON user.id_user = riwayat_backward.user_id")->result_array();
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gangguan</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($riwayat_backward as $rb) : ?>
                        <tr>

                            <td><?= $no++ ?>.</td>
                            <td><?= $rb['name'] ?> </td>
                            <td><?= $rb['penyakit'] ?> </td>
                            <td><?= $rb['hasil'] ?> </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    <!-- /.container-fluid -->

</div>
</div>
</form>