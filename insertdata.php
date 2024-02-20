<?php 
    include "config.php";

    $nama=$_POST["nama"];
    $pelanggaran=$_POST["kesalahan"];
    $sanksi=$_POST["sanksi"];

    $query ="INSERT INTO tb_pelanggaran VALUES(null,'$nama','$pelanggaran','$sanksi')";
    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:index.php");
    }else{
        $query;
    }
?>

