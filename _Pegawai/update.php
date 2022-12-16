<?php
    require_once('_koneksi.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from pegawai where id='$id'";
        $dataPekerja = mysqli_query($conn, $query);
    }
    else{
        header('location: table.php');
    }

    $pekerjaku  =  mysqli_query($conn, $query );
    
    $r      = mysqli_fetch_array($pekerjaku);

    // membuat function untuk set aktif radio button
    function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
        $result =  $value==$input?'checked':'';
        return $result;
    }

    // membuat data agama menjadi dinamis
    $agama = array('Islam', 'Kristen', 'Hindu', 'Budha');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit table</title>
    <?php require_once('_css.php'); ?>
</head>
<?php 
    require_once('_header.php'); 
?>
<body>
    <h1>Edit data</h1>
    <form action="_update.php" method="POST" enctype="multipart/from-data">
        <input type="hidden" value="<?php echo $r['id'];?>" name="id">
        <label for="nama">NIP :</label><br>
        <input type="text" value="<?php echo $r['nip'];?>" name="nip"><br>
        <label for="nis" >NAMA :</label>
        <br>
        <input type="text" value="<?php echo $r['nama'];?>" name="nama">
        <br>
        <label for="alamat">ALAMAT :</label>
        <br>
        <input type="text" value="<?php echo $r['alamat'];?>" name="alamat">
        <p>Gender : </p>
        <input type="radio" name="jenis_kelamin" value="Man" <?php echo active_radio_button("Man", $r['jenis_kelamin'])?>>
        <label for="html">Man</label><br>
        <input type="radio" name="jenis_kelamin" value="Woman" <?php echo active_radio_button("Woman", $r['jenis_kelamin'])?>>
        <label for="css">Woman</label><br>
        <input type="radio" name="jenis_kelamin" value="Alien" <?php echo active_radio_button("Alien", $r['jenis_kelamin'])?>>
        <label for="javascript">Alien</label>
        <br><br>
        <label for="alamat">TANGGAL LAHIR :</label>
        <br>
        <input type="date" value="<?php echo $r['tanggal_lahir'];?>" name="tanggal_lahir">
        <br><br>
        <button type="submit" class="btn btn-primary" name="update_pekerja" >Edit</button>
    </form>
    <?php 
        require_once('_footer.php');
        require_once('_js.php');
    ?>
</body>
</html>