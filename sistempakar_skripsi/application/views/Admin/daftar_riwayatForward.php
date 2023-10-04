<!-- Begin Page Content -->
<?php

// $riwayat_forward =  $this->db->join("user", "user.id_user = riwayat_forward.user_id")->get('riwayat_forward')->result_array();
$riwayat_forward = $this->db->query("SELECT * FROM `riwayat_forward` INNER JOIN user ON user.id_user = riwayat_forward.user_id")->result_array();
// PHP -> var_dump - die
// JS -> console.log
// java And -> Log.d / System.out.print
// Python -> PRint
// C# console.log, printf
// C++ Arduino -> Serial.println
// C++ cin cout
// handle error

// kamu harus bersyukur, banyak org dibawah kamu, dan ketika kamu bisa, manfaatlah untuk mereka
// ubah mindset mereka 0.0000000001% karena ketika mindeset itu dikalikan dengan indeks ke n -> +++++
// udah merubah dia, dia mikir ortu, diri sendiri
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
                        <th scope="col">Nama User</th>
                        <th scope="col">Gangguan</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Prosentase</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($riwayat_forward as $key => $rb) : ?>
                        <tr>
                            <td><?= $key + 1 ?>. </td>
                            <td><?= $rb['name'] ?> </td>
                            <td><?= $rb['gangguan'] ?> </td>
                            <td><?= $rb['gejala'] ?> </td>
                            <td><?= $rb['prosentase'] ?> </td>

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