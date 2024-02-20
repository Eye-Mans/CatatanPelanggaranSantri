<?php 
    include "config.php";
    $query = "SELECT * FROM tb_pelanggaran ";
$sql = mysqli_query($koneksi,$query);
$no = 0

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Pelanggaran</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
  <!-- navbar -->
  <nav class="mb-10">
  <div class="navbar bg-primary text-primary-content">
   <button class="btn btn-ghost text-xl text-white">Buku Catatan Pelanggaran Santri</button>
  </div>
  </nav>
    <!-- navbar -->

     <!-- btn add -->
  <div class="p-5">
    <a href="insert.php" class="btn btn-active btn-primary text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path></svg></a>
</div>
  <!-- btn add -->

    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr class="text-white text-xl">
        <th></th>
        <th>Nama Santri</th>
        <th>Kesalahan</th>
        <th>Sanksi</th>
        <th>Tombol Aksi</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <?php while($result=mysqli_fetch_assoc($sql)){?>
      <tr class="bg-base-200 text-lg">
        <th class="text-white"><?php echo ++ $no;?></th>
        <th><?php echo $result['nama']?></th>
        <td><?php echo $result['kesalahan']?></td>
        <td><?php echo $result['sanksi']?></td>
        <td>
        <a href="edit.php?edit=<?php echo $result['id']; ?>" class="btn btn-primary text-white">Edit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path></svg></a>
          <a href="delete.php?delete=<?php echo $result['id'] ?>" class="btn btn-error text-white" onclick="return confirm('Apakah anda ingin menghapus data santri tersebut?')">Hapus <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</div>
</body>
</html>