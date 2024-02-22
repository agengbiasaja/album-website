<?php 
session_start();
if( !isset($_SESSION['login'])) {
 header("location: ../login.php");
 exit;
}

require '../config/config.php';

$username = $_SESSION['username'];
$userid = $_SESSION['user_id'];


$hasil = mysqli_query($conn, "SELECT * FROM foto WHERE user_id = '$userid'");

include'../template/bagian_atas.php';
?>


<body>
    <div class="container">
    <h1>selamat datang <?= $username ?></h1>
    <a href="tambah-album.php">Tambah album</a>
    <a href="tambah-foto.php">Tambah Foto</a>
    <a href="logout.php">logout</a>

    <br><br><br>

    <div class="container">
        <div class="row">
            <?php foreach($hasil as $gambar) : ?>
            <div class="col-md-4">
                <div class="card" style="width: 20rem; height: 28rem;">
                    <img src="../img/<?= $gambar['lokasi_file'] ?>" class="card-img-top" alt="90900">
                    <div class="card-body">
                        <h5 class="card-title"><?= $gambar['judul_foto'] ?></h5>
                        <p class="card-text"><?= $gambar['tanggal_unggah'] ?></p> 
                        <p class="card-text"><?= $gambar['deskripsi_foto'] ?></p>
                         <a href="#" class="card-link"><i class="bi bi-heart-fill" style="font-size: 2rem; color: red;"></i></i></a>
                         <a href="#" class="card-link"><i class="bi bi-chat-square-dots-fill" style="font-size: 2rem;"></i></a>
                         </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?php include'../template/bagian_bawah.php'; ?>