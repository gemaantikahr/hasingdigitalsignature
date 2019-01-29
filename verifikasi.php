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
    <table class="table table-hover">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kode Verifikasi</th>
            <th colspan='2'><center>Option</center></th>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'konek.php';
    $_POST['search'] = " "; 
    $searching = $_POST['search'];
    
    $query = "select *from mahasiswa where nama like'%$searching%'";
    $sql = mysqli_query($konek, $query);
    
    foreach ($sql as $data){
    ?>
    <tr>
    <td><?php echo $data['nim']?></td>
    <td><?php echo $data['nama']?></td>
    <td><?php echo $data['dsstored']?></td>
    <td><?php echo "<a href='formverifikasi.php?nim=$data[nim]'>Edit</a>"?></td>
    </tr>
    <?php  }?>
    </tbody>
    </table>
    <div class="container">
    <form class="form-inline" method="post" action="search.php">
        <input type="search" class="form-control mr-sm-2" placeholder="search" arial-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
    </div>
</body>
</html>