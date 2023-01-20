<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:komputer.php?");
}
   $kode=$_GET['id'];
   $sql="SELECT * FROM tb_komputer where id=$kode";
   $query= mysqli_query($db, $sql);
   $komputer= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
<body>
    <h1>From Edit</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $komputer['id']?>" />
            <p>
                <label for="no_seri">No seri :</label>
                <input type="number" name="no_seri" value="<?php echo $komputer['no_seri']?>" />
            </p>

            <p>
                <label for="merek">Merek :</label>
              <label><input type="radio" name="merek" value="asus" />asus</label>
              <label><input type="radio" name="merek" value="lenovo" />lenovo</label>
              <label><input type="radio" name="merek" value="hp" />hp</label>
              <label><input type="radio" name="merek" value="acer" />acer</label> 
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="number" name="jumlah" value="<?php echo $komputer['jumlah']?>" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
        <h3><a href="komputer.php">Back</a></h3>
</form>
</body>
</html>