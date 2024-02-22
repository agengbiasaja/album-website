<?php include '../config/config.php'; ?>

<?php 
session_start();
if( !isset($_SESSION["login"])) {
 header("location: ../login.php");
 exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data foto</h1>
    <table border="1" class="table">
    <tr>
      <th>No</th>
      <th>judul_foto</th>
      <th>deskripsi_foto</th>
      <th>tanggal_unggah</th> 
    </tr>

<?php 
$result = mysqli_query($conn,"SELECT * FROM foto"); 
 ?>
<?php 
if (isset($data['judul_foto']) && isset($data['deskripsi_foto']) && isset($data['tanggal_unggah'])) {

 ?>
<table border="1" class="border">
    <tr>
      <td><?php echo $data['judul_foto']; ?></td>
      <td><?php echo $data['deskripsi_foto']; ?></td>
      <td><?php echo $data['tanggal_unggah']; ?></td>
    </tr>
    </table>
  <?php } ?>

    <a href="tambah.php">Tambah foto</a>
    <a href="index.php">kembali</a>

</body>
</html>