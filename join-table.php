<!DOCTYPE html>
<html>
    <head>
        <title>JOIN TABLE</title>
    </head>
    <body>
    <table border="1">
        <tr>
            <td>NO.</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td>Tahun</td>
            <td>Nominal</td>
        </tr> 
        
        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN
     tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp1 = tb_spp.id_spp1");
        
        $no = 1;
  foreach ($query as $row) :
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['kelas']; ?></td> 
    <td><?= $row['nama_jurusan']; ?></td>
    <td><?= $row['tahun']; ?></td>
    <td><?= $row['nominal']; ?></td>
   </tr>

  <?php endforeach; ?>
  <a href="tambah.php"><input type="button"  name="Tambah"   value="tambah">
  </table>
</body>
</html>