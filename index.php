<?php
$filename = 'list_pengunjung.txt';	//mendefinisikan nama file yang di gunakan untuk menyimpan data jumlah pengunjung

function lihat(){		//function lihat
	global $filename;	//set variabel $filename yang bersifat global

	if(file_exists($filename)){		//jika file list_pengunjung.txt ada
		$value = file_get_contents($filename);	//set nilai di notepad
	}else{		//jika file list_pengunjung.txt tidak ada maka akan membuat file list_pengunjung.txt
		$value = 0;		//kemudian set value menjadi 0
	}

	file_put_contents($filename, ++$value);		//menuliskan kedalam file list_pengunjung.txt value di tambah 1
}

lihat();	//menjalankan function lihat
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<script src="https://unpkg.com/scrollreveal"></script>
		<link rel="icon" href="img/logo.png">
    <title>Payung Berkat Family</title>
  </head>
  <body>
    <div class="navbar">
      <input type="checkbox" name="" value="" id="check">
      <label for="check">
        <i class="fa-solid fa-bars" id="dehaze"></i>
        <i class="fa-solid fa-xmark" id="close"></i>
      </label>

      <div class="logo">
        <h3>Payung Berkat Family</h3>
      </div>
      <div class="nav">
        <ul>
          <li> <a href="#header">Home</a> </li>
          <li> <a href="#jenis_payung">Jenis Payung</a> </li>
          <li> <a href="#alamat">Alamat</a> </li>
          <li> <a href="#kontak"class="active">Kontak</a> </li>
        </ul>
      </div>
    </div>
    <div class="header" id="header">
      <div class="gambar">
        <div class="text">
          <h2>Payung Berkat Family</h2>
          <p>Menyediakan berbagai jenis payung</p>
          <p class="lokasi"><i class="fa-solid fa-location-dot"></i> Jl. Galur
          sari III, Blok K No. 173F Kel. Utan Kayu Selatan,
          Kec. Matraman, Jakarta Timur</p>
          <p class="lokasi2"><i class="fa-solid fa-phone"></i>
          0813-8983-2063</p>
          <a href="https://wa.me/628129367662">Pesan Sekarang</a>
        </div>
				<div class="whatsapp">
					<a href="https://wa.me/628129367662"><i class="fa-brands fa-whatsapp"></i></a>
				</div>
      </div>
    </div>
    <!-- jenis payung -->
    <div class="content" id="jenis_payung">
      <div class="title">
        <h2>Jenis Payung</h2>
      </div>
      <hr>
      <div class="row">
        <div class="col-1">
          <img src="img/pygglf.jpg" alt="" class="center">
          <h3>Payung Golf</h3>
					<a href="payunggolf.php" >Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col-2">
          <img src="img/golf_lipat_2/lipatdua2.jpg" alt="">
          <h3>Payung Golf Lipat dua</h3>
					<a href="payunggolflipatdua.php" >Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col-3">
          <img src="img/lipat_tiga/lipattiga4-01.jpg" alt="">
          <h3>Payung Lipat Tiga</h3>
					<a href="payunglipattiga.php" >Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
				<div class="col-4">
          <img src="img/lipat_dua/payunglipatdua1.jpg" alt="">
          <h3>Payung Lipat Dua</h3>
					<a href="payunglipatdua.php" >Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
      </div>
      <div class="row-2">
        <div class="col-1">
          <img src="img/standar/payungstandar1.jpg" alt="" class="center">
          <h3>Payung Standar</h3>
					<a href="payungstandar.php"	>Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col-2">
          <img src="img/payungterbalik.jpg" alt="">
          <h3>Payung Terbalik</h3>
					<a href="#">Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col-3">
          <img src="img/payungbotol.jfif" alt="">
          <h3>Payung Botol Botol</h3>
					<a href="#">Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
				<div class="col-4">
          <img src="img/print_digital/payungprintgidital1.jpg" alt="">
          <h3>Payung Print Digital</h3>
					<a href="payungprintdigital.php" >Lihat Lebih Banyak <i class="fa-solid fa-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- lokasi -->
      <div class="lokasi" >
        <div class="title">
          <h2 id="alamat">Alamat</h2>
        </div>
        <hr>
        <div class="googlemap">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6205401346431!2d106.86716449213773!3d-6.19994265113997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f48a3a64579f%3A0xce8319fe0ac16ae1!2s173f%2C%20Jl.%20Galur%20Sari%20III%20Blok%20K%20No.174A%2C%20RT.11%2FRW.1%2C%20Utan%20Kayu%20Sel.%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013120!5e0!3m2!1sid!2sid!4v1663496887329!5m2!1sid!2sid" width="100%" height="450" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
    <!-- footer -->
    <div class="footer">
			<div class="kontak" id="kontak">
			<h2>Kontak Kami</h2>
			<a href="#"><i class="fa-solid fa-square-phone"></i> 0813-8983-2063</a>
			</div>
			<div class="kopirek">
      <a href="#"><i class="fa-solid fa-copyright"></i> - 2022 Raflihaikal</a>
      <a href="#"><i class="fa-solid fa-eye"></i><?php echo ' Total Pengunjung: '.file_get_contents($filename);	//menampilkan jumlah pengunjung di website
 			?></a>
			</div>
    </div>
		<script type="text/javascript">
        ScrollReveal({
          reset: false,
          distance: '60px',
          duration: 2000,
          delay: 500
        });
        ScrollReveal().reveal('.text, .title, .col-1, .col-2, .col-3, .col-4, .googlemap',{delay:50, origin:'bottom'});


    </script>
  </body>
</html>
