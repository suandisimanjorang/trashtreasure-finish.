<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pastikan form disubmit menggunakan metode POST

    // Ambil nilai dari form
    $jenis_sampah = $_POST['jenis_sampah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../asset/internal/img/uploads/';
    $deskripsi = $_POST['deskripsi'];

    // Pindahkan file gambar ke folder yang ditentukan
    move_uploaded_file($source, $folder.$nama_file);

    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO sampah (jenis_sampah, satuan, harga, gambar, deskripsi) VALUES ('$jenis_sampah', '$satuan', $harga, '$nama_file', '$deskripsi')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika query berhasil dieksekusi
        echo "<script>alert('Berhasil Menambah Data!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost/TrashTreasure/page/admin.php?page=data-sampah'>";
    } else {
        // Jika query gagal dieksekusi
        echo "<script>alert('Gagal Menambah Data!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost/TrashTreasure/page/admin.php?page=data-sampah'>";
    }

    // Tutup koneksi database
    mysqli_close($conn);
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
        
        select{
          border-radius: 5px;
          width: 42%;
          height: 39px;
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

        input, select{
            font-family: Montserrat;
            font-size: 16px;
        }

        .form-group{
            padding: 5px 0;
        }

    </style>  

    <script type="text/javascript">

function cek_data() {
   var x=daftar_user.jenis_sampah.value;
   var x1=parseInt(x);
   
   if(x==""){
      alert("Maaf harap input jenis sampah!");
      daftar_user.jenis_sampah.focus(); 
      return false;
   } 
   if(isNaN(x1)==false){
      alert ("Maaf jenis sampah harus di input huruf!");
      daftar_user.jenis_sampah.focus();
      return false;
   }
    var p=daftar_user.satuan.value;
    if (p =="p"){
      alert("Maaf harap input satuan sampah!");
      return (false);
   }
   var x=daftar_user.harga.value;
   var angka = /^[0-9]+$/;
   var panjang=x.length;

   if(x==""){
      alert("Maaf harap input harga!");
      daftar_user.harga.focus();  
      return false;
   }
   if (!x.match(angka)) {
      alert ("Maaf harga harus di input angka!");
      daftar_user.harga.focus();
      return false;
   }
   if(panjang<3 || panjang>5){
      alert("harga di input minimum 3 karakter dan maksimum 5 karakter!");
      daftar_user.harga.focus();
      return false;
   }
   if(daftar_user.gambar.value==""){
      alert("Maaf harap input gambar!");
      daftar_user.gambar.focus();  
      return false;
  }
   var x=daftar_user.deskripsi.value;
   var panjang=x.length;
   
   if(x==""){
      alert("Maaf harap input deskripsi!");
      daftar_user.deskripsi.focus(); 
      return false;
   } 
   if(panjang>50){
      alert ("deskripsi di input maksimum 50 karakter!");
      daftar_user.deskripsi.focus();
      return false;
  }else{
  confirm("Apakah Anda yakin sudah input data dengan benar?");
  }
   return true;
}
</script>

</head>

<body>
	   <h2 style="font-size: 30px; color: darkcyan;">Tambah Data Sampah</h2>

	   <form id="daftar_user" action="" method="post" enctype="multipart/form-data" onsubmit="return cek_data()">
         <div class="form-group">
           <label class="text-left">Jenis Sampah</label>
           <input type="text" placeholder="Masukan jenis sampah" name="jenis_sampah" />
         </div>

         <div class="form-group">
          <label class="">Satuan</label>
           <select name="satuan">
               <option value="p">---Pilih Satuan---</option>
               <option value="KG">Kilogram</option>
               <option value="PC">Pieces</option>
               <option value="LT">Liter</option>
           </select>
         </div>

         <div class="form-group">
           <label class="">Harga (Rp)</label>
           <input type="text" placeholder="Masukan harga (Rp)" name="harga" />
         </div>

         <div class="form-group">
           <label class="">Gambar</label>
           <input type="file" name="gambar"/>
         </div>

         <div class="form-group">
          <label class="">Deskripsi</label>
          <input type="text" placeholder="Masukan deskripsi sampah" name="deskripsi"/>
         </div>

        <input type="submit" name="simpan" value="Simpan"></input>
    </form>
      


</body>
</html>
