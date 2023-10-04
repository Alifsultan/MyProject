<?php

?>
<label for="<?= base_url("kuesioner/backward/" . $id) ?>"><?= $penyakit ?></label>
<form action="" method="post">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pertanyaan</th>
                <th>Jawaban</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < sizeof($pertanyaan); $i++) { ?>
                <tr>
                    <td><?= $i + 1 ?>.</td>
                    <td><?= $pertanyaan[$i] ?></td>
                    <td>
                        <select name="jawaban[]" id="" required>
                            <option value="" selected disabled>Pilih Jawaban</option>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-primary" style="float:right">Submit Jawaban</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<!-- Keika data hasil itu ada maka ditampilakn -->
<?php if (isset($hasil)) { ?>
    <div id="body">
        <div class="form-group">

            <table class="table table-hover">
                
            <thead>
                <tr>
                  <th>HASIL:</th>
                  <th></th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
                <td>
                <span class="label">Probabilitas Backward Chaining Pada Gangguan <?= $penyakit ?> Bernilai : <?= round($hasil, 3) ?> %</span>
                </td>
                <br>
            </tbody>
            </table>
            <div id="body">
        <div class="form-group">

            <table class="table table-hover">
                
            <thead>
                <tr>
                  <th>SARAN:</th>
                  <th></th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- saran -->
            </tbody>
            </table>
    <?php if ($id == 'P1') {
        echo '
        <br>
            a.	Konsultasi dengan ahli kesehatan seperti Psikolog
            <br>
            b.	Olahraga yang cukup agar pasien selalu dalam kondisi sehat
            <br>
            c.	Kurangi berfikir berlebihan
            <br>
            d.	Belajar untuk lebih peka terhadap stress dan bagaimana tubuh merespon
            <br>
            e.	Cek secara langsung penyakit atau gangguan agar mendapatkan komitmen dari para ahli';
    } else if ($id == 'P2') {
        echo '
        <br>
            a.	Merespon stres dengan aktivitas yang positif dengan olahraga atau meditasi
            <br>
            b.	 Kurangi pola pikir yang tidak diperlukan
            <br>
            c.	Mengevaluasi dan memahami cara menjalin hubungan dengan orang lain
            <br>
            d.	Mengendalikan perilaku dan emosi';
    } else if ($id == 'P3') {
        echo '
        <br>
            a.	Terapi perilaku kognitif (cognitive behavioral therapy)untuk  mengendalikan kondisi dengan mengubah cara pikir dan perilaku yang negatif menjadi positif
            <br>
            b.	Terapi berbasis mentalitas (mentalization-based therapy), untuk memahami bagaimana kondisi mental memengaruhi perilaku
            <br>
            c.	Terapi psikodinamika, untuk meningkatkan kesadaranterhadap pikiran dan perilaku negatif dan impulsif
            ';
    } else if ($id == 'P4') {
        echo '
        <br>
            a.	Saat halusinasi muncul, cobalah untuk mengabaikan halusinasi itu dengan memfokuskan diri Anda pada hal lain, seperti membaca buku, mendengarkan musik, berdoa, atau berbicara dengan teman
            <br>
            b.	Ikut berpartisipasi dalam program atau aktivitas yang dianjurkan seperti, bakti sosial dan sebagainya
            <br>
            c.	Pertimbangkan untuk ikut dalam support group pekerja sosial
            <br>
            d.	Kurangi Stres berlebihan , pola tidur dan makan yang seimbang
            ';
    } else if ($id == 'P5') {
        echo '
        <br>
            a.	Memiliki gaya hidup sehat bisa membantu mengontrol gejala dari gangguan bipolar
            <br>
            b.	Rutinitas seperti diet sehat, tidur teratur dan cukup, serta berolahraga bisa menjaga stabilitas suasana hati seseorang
            <br>
            c.	Belajar mengenali perubahan suasana hati
            <br>
            d.	Waspadai gejala-gejala yang bisa berakibat buruk, seperti hasrat ingin bunuh diri
            ';
    }
} ?>