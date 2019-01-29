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
    <div class='jumbotron'>
      <h1>Universitas Ahmad Dahlan</h1>      
      <p>Jalan Prof. Dr. Soepomo, S.H. Janturan Yogyakarta 55164</p>
      <h5>The Future Rektor</h5>
      <p>1. ANNISA NOVITASARI (1600018083)<br>
2. SYAHDILLAH MUTIARA R TOMAGOLA (1600018089)<br>
3. GEMA ANTIKA HARIADI  (1600018095</p>

    </div>
  </div>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>nim</th>
            <th>nama </th>
            <th>jurusan</th>
            <th>tlg lahir</th>
            <th>alamat</th>
            <th>tahun masuk</th>
            <th>tahun lulus</th>
            <td colspan='2'><center>option</center></td>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'konek.php';
    $searching = $_POST['search'];
    
    $query = "select *from mahasiswa where nama like'%$searching%'";
    $sql = mysqli_query($konek, $query);
    
    foreach ($sql as $data){
    ?>
    <tr>
    <td><?php echo $data['nim']?></td>
    <td><?php echo $data['nama']?></td>
    <td><?php echo $data['jursan']?></td>
    <td><?php echo $data['tanggallahir']?></td>
    <td><?php echo $data['alamat']?></td>
    <td><?php echo $data['tahunmasuk']?></td>
    <td><?php echo $data['tahunlulus']?></td>
    <td><?php echo "<a href='lihatnilai.php?nim=$data[nim]'>Lihat nilai</a>"?></td>
    <td><?php echo "<a href='lihatprofile.php?nim=$data[nim]'>Lihat profile</a>"?></td>
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
</body>
</html>