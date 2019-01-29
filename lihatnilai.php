<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <?php include 'bootstrap.php';?>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  
</head>
<body>
<div class='container'>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="tampil.php">
    <img src="uad.jpg" alt="UAD" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="verifikasi.php">Verifikasi Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Data Kelompok</a>
    </li>
  </ul>
</nav>
    <div class='jumbotron'>
      <h1>Universitas Ahmad Dahlan</h1>      
      <p>Jalan Prof. Dr. Soepomo, S.H. Janturan Yogyakarta 55164</p>
      <h5>The Future Rektor</h5>
      <p>1. ANNISA NOVITASARI (1600018083)<br>
2. SYAHDILLAH MUTIARA R TOMAGOLA (1600018089)<br>
3. GEMA ANTIKA HARIADI  (1600018095</p>

  </div>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Nomer</th>
            <th>Id Matkul</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'konek.php';
    $nim1 = $_GET['nim'];
    $query = "select *from nilai where nim='$nim1'";
    $sql = mysqli_query($konek, $query);
    
    foreach ($sql as $data){
    ?>
    <tr>
    <td><?php echo $data['idnilai']?></td>
    <td><?php echo $data['idmatkul']?></td>
    <td><?php echo $data['nilai']?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <br>
    <div class="alert alert-info">
   <?php echo "<a href='coba.php?nim=$data[nim]' class='alert-link'>Lihat Transkip Nilai</a>"?>
  </div>
    </div>
</body>
</html>