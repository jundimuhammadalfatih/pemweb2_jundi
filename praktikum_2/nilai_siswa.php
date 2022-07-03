<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

if (!empty($proses)) {
    echo 'Proses ' . $proses;
    echo '<br/><br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
}

if ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 55) {
    echo "<br/><br/>Anda dinyatakan : Lulus";
} else {
    echo "<br/><br/>Anda dinyatakan : Tidak Lulus";
}

if ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 85) {
    echo "<br/><br/>Grade Nilai : A";
} elseif ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 70) {
    echo "<br/><br/>Grade Nilai : B";
} elseif ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 56) {
    echo "<br/><br/>Grade Nilai : C";
} elseif ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 36) {
    echo "<br/><br/>Grade Nilai : D";
} elseif ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 0) {
    echo "<br/><br/>Grade Nilai : E";
} else {
    echo "<br/><br/>Grade Nilai : I";
}

switch (!empty($proses)) {
    case ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 85):
        echo "<br/><br/>Predikat Nilai : Sangat Memuaskan";
        break;
    case ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 70):
        echo "<br/><br/>Predikat Nilai : Memuaskan";
        break;
    case ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 56):
        echo "<br/><br/>Predikat Nilai : Cukup";
        break;
    case ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 36):
        echo "<br/><br/>Predikat Nilai : Kurang";
        break;
    case ($nilai_uts * 0.30 + $nilai_uas * 0.35 + $nilai_tugas * 0.35 >= 0):
        echo "<br/><br/>Predikat Nilai : Sangat Kurang";
        break;
    default:
        echo "Tidak Ada";

}
