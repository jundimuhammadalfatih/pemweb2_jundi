<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<br>
<p class="text-center">Web Programming 02 | STT-NF | Praktikum 01 : PHP Dasar</p>
<hr>
<h3 class="text-center">Daftar Nilai Siswa</h3>

<table class="table table-bordered" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
$nomor = 1;
foreach ($ar_nilai as $ns) {
    echo '<tr><td>' . $nomor . '</td>';
    echo '<td>' . $ns['nim'] . '</td>';
    echo '<td>' . $ns['uts'] . '</td>';
    echo '<td>' . $ns['uas'] . '</td>';
    echo '<td>' . $ns['tugas'] . '</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
    echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
    echo '<tr/>';
    $nomor++;
}
?>
    </tbody>
</table>
<p class="text-center">0110221079 | Jundi Muhammad Al Fatih | TI 17</p>