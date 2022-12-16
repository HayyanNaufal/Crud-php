<?php

// ********** Input Data **********//
require_once('_koneksi.php');
    //input data
if(isset($_POST['input_pekerja'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $query = "INSERT INTO pegawai (nip, nama, alamat, jenis_kelamin, tanggal_lahir) VALUES('$nip', '$nama', '$alamat', '$jenis_kelamin', '$tanggal_lahir')";
    mysqli_query($conn, $query);
    //$conn untuk menyambungkan ke database
    //$query untuk menjalankan perintah query
    
    header("location: table.php");
    //setelah menyimpan dialihkan ke halaman tabel siswa
}

// ********** delete data **********//
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pegawai where id='$id'";
    mysqli_query($conn, $query);
    header('location: table.php');
} 

?>