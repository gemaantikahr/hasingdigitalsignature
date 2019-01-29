<?php
include 'konek.php';
if(isset($_POST['submit'])){
    $id = $_POST['nim'];
    $dsstored = $_POST['dsstored'];
    $query = "update mahasiswa set dsstored='$dsstored' where nim='$id'";
    $sql = mysqli_query($konek, $query);
    header("location:tampil.php");

    
}

?>