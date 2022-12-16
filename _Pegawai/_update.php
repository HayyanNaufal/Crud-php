<?php
require_once('_koneksi.php');

    // *********** edit data **********//
if(isset($_POST['update_pekerja'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $query = "UPDATE pegawai SET
                    nama = '$nama',
                    nip = '$nip',
                    jenis_kelamin = '$jenis_kelamin',
                    alamat = '$alamat',
                    tanggal_lahir = '$tgl_lahir'
                    where id=$id";
    mysqli_query($conn, $query);
    header('location: table.php');
}

?>

