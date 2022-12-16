<?php 
  require_once('_koneksi.php'); 
  $query = "SELECT * FROM pegawai";
  $data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once('_css.php'); ?>
  <title>Table</title>
</head>
<body>
  <?php require_once('_header.php'); ?>
  <div class="container py-4">
    <h1 align="center">TABLE</h1>
    <center>
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach ($data as $pekerja) { ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $pekerja['nip']; ?></td>
            <td><?php echo $pekerja['nama']; ?></td>
            <td><?php echo $pekerja['alamat']; ?></td>
            <td><?php echo $pekerja['jenis_kelamin']; ?></td>
            <td><?php echo $pekerja['tanggal_lahir']; ?></td>
            <td>
              <a href="update.php?id=<?php echo $pekerja['id']; ?>" 
                class="btn btn-warning badge">Edit</a>
              <a href="_crud.php?id=<?php echo $pekerja['id']; ?>"
                onClick="return confirm('hapus data ?')" 
                class="btn btn-danger badge">Hapus
              </a>
            </td>
          </tr>
        <?php $no++; } ?>
        </tbody>
        <tfoot>
          <TR>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </TR>
        </tfoot>
      </table>
    </center>
  </div>
  <?php require_once('_footer.php');
        require_once('_js.php');
  ?>
</body>
</html>