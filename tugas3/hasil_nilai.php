<?php


require_once 'model.php';


if( !isset($_POST["submit"])    ){
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$pelajaran = $_POST["matakuliah"];
$tugas1 = $_POST["uts"];
$tugas2 = $_POST["uas"];
$tugas3 = $_POST["tugas"];
$nilai_keseluruhan = ($tugas1 + $tugas2 + $tugas3) / 3;


echo 'Nama Siswa : '  . $nama;
echo '<br> Mata Kuliah : ' . $pelajaran;
echo '<br> Nilai tugas1 : ' . $tugas1;
echo '<br> Nilai tugas2 : ' . $tugas2;
echo '<br> Nilai tugas3 : ' . $tugas3;

echo '<br> Nilai Akhir : ' . $nilai_keseluruhan;
echo '<br> DINYATAKAN : ' . kenaikan($nilai_keseluruhan);
echo '<br> GRADE : ' . grade($nilai_keseluruhan);









?>