<?php
  require_once("../system/config/koneksi.php");

 if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "UPDATE nasabah SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', email = '$username', password = '$password' WHERE nin='".$id."' ";
  $queryact = mysqli_query($conn, $query);
  echo "<meta http-equiv='refresh'
   content='0; url=http://localhost/TrashTreasure/page/nasabah.php?page=data-nasabah'>";
 }

?>

<html>
<head>
  <title>Homepage</title>
  <!--link datatables-->
    <style>

        label{
        font-family: Montserrat;    
        font-size: 18px;
        display: block;
        color: #262626;
        }

        input[type=text], input[type=password]{
          border-radius: 5px;
          width: 40%;
          height: 35px;
          background: #eee;
          padding: 0 10px;
          box-shadow: 1px 2px 2px 1px #ccc;
          color: #262626;
        }

        input[type=submit]{
          height: 35px;
          width: 200px;
          background: #276561;
          border-radius: 20px;
          color: #fff;
          margin-top: 20px;
          cursor: pointer;
        }

        input[type=submit]:hover{
          background: darkcyan;
        }

        input{
            font-family: Montserrat;
            font-size: 16px;
        }

        .form-group{
            padding: 5px 0;
        }

    </style>    
</head>

<body>
     <h2 style="font-size: 30px; color: darkcyan;">Edit Data Nasabah</h2>
     <?php if(isset($_GET['id'])){$id=$_GET['id']; ?>
     <?php 
        $cek = mysqli_query($conn, "SELECT * FROM nasabah WHERE nin='".$_GET['id']."'");
        $row = mysqli_fetch_array($cek);
      ?>
  
          <form action="" method="post">
          <label class="text-left">Nomor Induk Nasabah</label>
          <input type="text" name="nin" disabled="disabled" value="<?php echo $_GET['id']; ?>" />

          <div class="form-group">
            <label class="text-left">Nomor Induk Nasabah</label>
            <input type="text" disabled="disabled" value="<?php echo @$_SESSION['nin']; ?>" />
         </div>
         <div class="form-group">
          <label class="">Nama Nasabah</label>
          <input type="text" value="<?php echo @$_SESSION['nama_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Alamat</label>
          <input type="text" disabled="disabled" value="<?php echo @$_SESSION['alamat']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Nomor Telepon</label>
          <input type="text" value="<?php echo @$_SESSION['telepon_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">E-mail</label>
          <input type="text" value="<?php echo @$_SESSION['email_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Password</label>
          <input type="password" id="inputPassword" value="<?php echo @$_SESSION['pass_n']; ?>"/>
          <br><br>
                <input type="checkbox" onclick="myFunction()">Tampilkan Password

                <script>
              function myFunction() {
                  var x = document.getElementById("inputPassword");
                  if (x.type === "password") {
                      x.type = "text";
                  } else {
                      x.type = "password";
                  }
              }
          </script>
         </div>
         <div class="form-group">
          <label class="">Saldo Total (Rp)</label>
          <?php
                $saldonya = mysqli_query($conn, "SELECT SUM(total) AS totalsaldo FROM setor WHERE nin='".$_SESSION['nin']."'");
                $tariknya = mysqli_query($conn, "SELECT SUM(jumlah_tarik) AS totaltarik FROM tarik WHERE nin='".$_SESSION['nin']."'");
                $var_saldo = mysqli_fetch_array($saldonya);$var_tarik = mysqli_fetch_array($tariknya);
                $tot_saldo_total=($var_saldo['totalsaldo'])-($var_tarik['totaltarik']);
          ?>      
          <input type="text" disabled="disabled" value="<?php echo $tot_saldo_total; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Berat Sampah (Kg)</label>
          <input type="text" disabled="disabled" value="<?php 
            $query = mysqli_query($conn, "SELECT SUM(berat) AS totalberat FROM setor WHERE nin='".$_SESSION['nin']."'");
            while($row = mysqli_fetch_array($query)){
            echo $row['totalberat']; }?>"/>
         </div>


         <input name="id" type="hidden"  value="<?php echo $_GET['id']; ?>" />
         <input class="button" onclick="alert('Berhasil Mengubah data nasabah!')" type="submit" name="simpan" value="Simpan Data" />
         

         </form>     
     <?php } else {
        $cek = mysqli_query($conn, "SELECT * FROM nasabah WHERE nin='".$_SESSION['nin']."'");
        $row = mysqli_fetch_array($cek);
      ?>
  
          <form action="" method="post">
          <div class="form-group">
            <label class="text-left">Nomor Induk Nasabah</label>
            <input type="text" disabled="disabled" value="<?php echo @$_SESSION['nin']; ?>" />
         </div>
         <div class="form-group">
          <label class="">Nama Nasabah</label>
          <input type="text" value="<?php echo @$_SESSION['nama_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Alamat</label>
          <input type="text" disabled="disabled" value="<?php echo @$_SESSION['alamat']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Nomor Telepon</label>
          <input type="text" value="<?php echo @$_SESSION['telepon_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">E-mail</label>
          <input type="text" value="<?php echo @$_SESSION['email_n']; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Password</label>
          <input type="password" id="inputPassword" value="<?php echo @$_SESSION['pass_n']; ?>"/>
          <br><br>
                <input type="checkbox" onclick="myFunction()">Tampilkan Password

                <script>
              function myFunction() {
                  var x = document.getElementById("inputPassword");
                  if (x.type === "password") {
                      x.type = "text";
                  } else {
                      x.type = "password";
                  }
              }
          </script>
         </div>
         <div class="form-group">
          <label class="">Saldo Total (Rp)</label>
          <?php
                $saldonya = mysqli_query($conn, "SELECT SUM(total) AS totalsaldo FROM setor WHERE nin='".$_SESSION['nin']."'");
                $tariknya = mysqli_query($conn, "SELECT SUM(jumlah_tarik) AS totaltarik FROM tarik WHERE nin='".$_SESSION['nin']."'");
                $var_saldo = mysqli_fetch_array($saldonya);$var_tarik = mysqli_fetch_array($tariknya);
                $tot_saldo_total=($var_saldo['totalsaldo'])-($var_tarik['totaltarik']);
          ?>      
          <input type="text" disabled="disabled" value="<?php echo $tot_saldo_total; ?>"/>
         </div>
         <div class="form-group">
          <label class="">Berat Sampah (Kg)</label>
          <input type="text" disabled="disabled" value="<?php 
            $query = mysqli_query($conn, "SELECT SUM(berat) AS totalberat FROM setor WHERE nin='".$_SESSION['nin']."'");
            while($row = mysqli_fetch_array($query)){
            echo $row['totalberat']; }?>"/>
         </div>
         
         <input class="button" type="submit" onclick="alert('Berhasil Mengubah data nasabah!')" name="simpan" value="Simpan Data" />
         

         </form>
<?php } ?>

</body>
</html>
