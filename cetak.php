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
<header>
    <h1>Data mahasiswa</h1>
</header>
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
            <td colspan='2'>option</td>
        </tr>
    </thead>
    <tbody>
    <?php
    include 'konek.php';
    $searching = $_POST['search'];
    $query = "select *from mahasiswa where nim='$searching'";
    $sql = mysqli_query($konek, $query);
    
    if($sql==true){
        
    }
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
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <div class="container">
    <form class="form-inline" method="post" action="tampil.php">
        <input type="search" class="form-control mr-sm-2" placeholder="search" arial-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
</body>
</html>