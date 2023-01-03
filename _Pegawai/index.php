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
    <div class="container">

        <h1 class="text-center mb-3">Pendaftaran Pekerjaan</h1>
        <form action="_crud.php" method="POST" enctype="multipart/from-data">

            <div class="mb-3">
                <label for="nip" class="form-label">NIP :</label>
                <input type="text"  name="nip" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA :</label> 
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">ALAMAT :</label>
                <input type="text" name="alamat" class="form-control">
            </div>
             
            <div class="mb-3">
                <label for="" class="form-label">Gender</label>
                <div class="row">
                    <div class="col-md-1">
                        <input type="radio" name="jenis_kelamin" value="Man">
                        <label for="html">Man</label><br>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jenis_kelamin" value="Woman">
                        <label for="css">Woman</label><br>
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="jenis_kelamin" value="Alien">
                        <label for="javascript">Alien</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">TANGGAL LAHIR :</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
            <div class="justify-content-center text-center mt-5">
                <button type="submit" name="input_pekerja" class="btn btn-primary ">kirim</button>
            </div>
        </form>
    </div>


    <?php 
        require_once('_footer.php');
        require_once('_js.php');
    ?>
</body>
</html>