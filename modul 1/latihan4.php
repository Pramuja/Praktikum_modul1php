<?php
$nama = "Angga";
$kelas = "XI RPL 2";
$alamat = "Malang";
function tampil_nama(){
    global $nama, $kelas, $alamat;
    echo "Nama saya : ".$nama. "<br> kelas : ".$kelas. "<br> alamat : ".$alamat;
}
tampil_nama();

echo "<br>";
function tampil_nama2(){
    global $nama;
    echo "Nama saya : ".$nama;
}
tampil_nama2();
function tampil_kelas(){
    global$kelas;
    echo "<br> Kelas : ".$kelas;
}
tampil_kelas();
function tampil_alamat(){
    global$alamat;
    echo "<br> Alamat : ".$alamat;
}
tampil_alamat();
?>