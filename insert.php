<?php 
    include "config.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Pelanggaran (Tambah Data)</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
    <!-- navbar -->
  <nav class="mb-10">
  <div class="navbar bg-primary text-primary-content">
   <button class="btn btn-ghost text-xl text-white">Tambah Data Pelanggaran Santri</button>
  </div>
  </nav>
    <!-- navbar -->
<div class="flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="insertdata.php" method="post">
            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Tambah Nama Santri</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="nama" required/>
            </label>

            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Kesalahan</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="kesalahan" required/>
            </label>

            <label class="block form-control ">
                <div class="label">
                    <span class="label-text text-lg text-white">Sanksi</span>
                </div>
                <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="sanksi" required/>
            </label>

            <button type="submit" class="btn btn-active btn-outline mt-5">Tambah</button>
        </form>
    </div>
</div>


    

</body>
</html>