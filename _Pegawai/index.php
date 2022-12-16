<?php require_once('_koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir</title>
    <?php require_once('_css.php'); ?>
</head>
<body>
    <?php require_once('_header.php'); ?>
    
    <h1>Pendaftaran Pekerjaan</h1>
    <form action="_crud.php" method="POST" enctype="multipart/from-data">
            <label for="nip">NIP :</label>
            <br>
            <input type="text"  name="nip">
            <br>
            <label for="nama">NAMA :</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label for="alamat">ALAMAT :</label>
            <br>
            <input type="text" name="alamat">
        <p>Gender : </p>
            <input type="radio" name="jenis_kelamin" value="Man">
            <label for="html">Man</label><br>
            <input type="radio" name="jenis_kelamin" value="Woman">
            <label for="css">Woman</label><br>
            <input type="radio" name="jenis_kelamin" value="Alien">
            <label for="javascript">Alien</label>
        <br><br>
        <label for="tanggal_lahir">TANGGAL LAHIR :</label>
        <br>
        <input type="date" name="tanggal_lahir">
        <br><br>
            <button type="submit" name="input_pekerja" class="btn btn-primary">kirim</button>
    </form>

    <?php 
        require_once('_footer.php');
        require_once('_js.php');
    ?>
</body>
</html>