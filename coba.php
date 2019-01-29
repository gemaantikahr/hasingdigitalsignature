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
    <div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Nomer</th>
            <th>Kode </th>
            <th>Mata Kuliah</th>
            <th>Sks</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'konek.php';
    $nim1 = $_GET['nim'];
    $query = "select *from nilai,mahasiswa,matkul where mahasiswa.nim = nilai.nim and nilai.idmatkul = matkul.id_mk and mahasiswa.nim='$nim1'";
    $sql = mysqli_query($konek, $query);
    $row = mysqli_fetch_array($sql);
    
    $hasing = sha1($row['nim'].$row['nama'].$row['alamat'].$row['tanggallahir'].$row['jursan'].$row['nama'].$row['tahunmasuk']); // proses hasing data atas kita kasi nama $hasing

    echo "<div class='container'>
    <nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
    <!-- Brand/logo -->
    <a class='navbar-brand' href='tampil.php'>
      <img src='uad.jpg' alt='UAD' style='width:40px;'>
    </a>
    
    <!-- Links -->
    <ul class='navbar-nav'>
      <li class='nav-item'>
        <a class='nav-link' href='verifikasi.php'>Verifikasi Mahasiswa</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='#'>Data Kelompok</a>
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
  </div>";
  echo '<div class="container">
  <div class="row">
      <div class="col-sm-4">Nim</div>
      <div class="col-sm-8">'.$row["nim"].'</div>
      <div class="col-sm-4">Nama</div>
      <div class="col-sm-8">'.$row["nama"].'</div>
      <div class="col-sm-4">Alamat</div>
      <div class="col-sm-8">'.$row["alamat"].'</div>
      <div class="col-sm-4">Tanggal Lahir</div>
      <div class="col-sm-8">'.$row["tanggallahir"].'</div>
      <div class="col-sm-4">Jurusan</div>
      <div class="col-sm-8">'.$row["jursan"].'</div>
      <div class="col-sm-4">Tahun Masuk</div>
      <div class="col-sm-8">'.$row["tahunmasuk"].'</div>
  </div>
</div>';
  
  $sql1 = mysqli_query($konek, $query);
  $queryipk = "select sum(nilai) as ipk from nilai where nim='$nim1'"; //query untuk menghitung jumlah nilai
  $sqlsum = mysqli_query($konek, $queryipk);
  $sqlipk = mysqli_fetch_array($sqlsum);
  $hasingipk = sha1($sqlipk['ipk']); // proses hasing ipk
  $ceking = mysqli_fetch_array($sql1);
  foreach($sql1 as $data){
    $hasing1 = sha1($data['idnilai'].$data['id_mk'].$data['nama_mk'].$data['sks'].$data['nilai']) // proses hasing data nilai yang di tengah
    //$hasing1 = sha1($ceking['idnilai'].$ceking['id_mk'].$ce)
    //tambahin variable hasingnya
 ?>
 <?php }$hasingsemua = sha1($hasing1.$hasing.$hasingipk)?>
<?php

    foreach($sql1 as $data){
    ?>
    <tr>
    <td><?php echo $data['idnilai']?></td>
    <td><?php echo $data['id_mk']?></td>
    <td><?php echo $data['nama_mk']?></td>
    <td><?php echo $data['sks']?></td>
    <td><?php echo $data['nilai'];?></td>
    </tr>
    <?php }?>

    </tbody>
    </table>
    <?php if($ceking['dsstored']==$hasingsemua){
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">Ipk</div>
            <div class="col-sm-8"><?php echo $sqlipk['ipk']?></div>
            <div class="col-sm-4">DS Processed</div>
            <div class="col-sm-8"><?php echo $hasingsemua?></div>
            <div class="col-sm-4">DS Stored</div>
            <div class="col-sm-8"><?php echo $data['dsstored']?></div>
            <div class="col-sm-12"><div class="alert alert-info" role="alert">
  Sudah Terverifikasi di ITB dan IPB dan UAD.!
</div>
    <?php }else{?>
        <div class="container">
        <div class="row">
            <div class="col-sm-4">Ipk</div>
            <div class="col-sm-8"><?php echo $sqlipk['ipk']?></div>
            <div class="col-sm-4">DS Processed</div>
            <div class="col-sm-8"><?php echo $hasingsemua?></div>
            <div class="col-sm-4">DS Stored</div>
            <div class="col-sm-8"><?php echo $data['dsstored'] ?></div>
            <div class="col-sm-12"><div class="alert alert-danger" role="alert">
  Belum terferivikasi.! silahkan menghubungi Administrator
</div>
</div>
    <?php } ?>

</body>
</html>