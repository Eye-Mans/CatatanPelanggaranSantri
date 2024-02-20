<?php 
    include "config.php";
    $id=$_GET["edit"];
    $query = "SELECT *FROM tb_pelanggaran WHERE id='$id'";
$sql = mysqli_query($koneksi,$query);
$result = mysqli_fetch_assoc($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Pelanggaran (Edit data)</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
    <!-- navbar -->
  <nav class="mb-10">
  <div class="navbar bg-primary text-primary-content">
   <button class="btn btn-ghost text-xl text-white">Edit data Pelanggaran Santri</button>
  </div>
  </nav>
    <!-- navbar -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="editdata.php" method="post">
            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Tambah Nama Santri</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="nama" value="<?php echo $result['nama']?>" required />
            </label>

            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Kesalahan</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="kesalahan" value="<?php echo $result['kesalahan']?>" required/>
            </label>

            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Sanksi</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="sanksi" value="<?php echo $result['sanksi']?>" required/>
                <input type="hidden" name="id" value="<?php echo $result['id']?>" class="input input-ghost w-full max-w-xs">
            </label>

            <button type="submit" class="btn btn-active btn-primary text-white mt-5">Edit</button>
            <a href="index.php" class="btn btn-active btn-error text-white mt-5">Cancel</a>
        </form>
    </div>
</div>


    

</body>
</html>