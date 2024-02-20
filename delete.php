<?php 
include"config.php";

$id = $_GET['delete'];
// var_dump($id);
$query = "DELETE FROM tb_pelanggaran WHERE id='$id'";
$sql = mysqli_query($koneksi,$query);
if($sql){
    header('location:index.php');
}else{
    $query;
}
?>