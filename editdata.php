<?php 
    include"config.php";
    $id = $_POST['id'];
    $nama=$_POST["nama"];
    $pelanggaran=$_POST["kesalahan"];
    $sanksi=$_POST["sanksi"];

    $query="UPDATE tb_pelanggaran SET nama='$nama', kesalahan='$pelanggaran', sanksi='$sanksi'WHERE id='$id'";

    $sql = mysqli_query($koneksi,$query);
    if($sql){
        header("location:index.php");
    }else{
        $query;
    }

?>