<?php
$filename = 'list_pengunjung.txt';	//mendefinisikan nama file yang di gunakan untuk menyimpan data jumlah pengunjung

function lihat(){		//function lihat
	global $filename;	//set variabel $filename yang bersifat global

	if(file_exists($filename)){		//jika file list_pengunjung.txt ada
		$value = file_get_contents($filename);	//set nilai di notepad
	}else{		//jika file list_pengunjung.txt tidak ada maka akan membuat file list_pengunjung.txt
		$value = 0;		//kemudian set value menjadi 0
	}

	file_put_contents($filename, $value);		//menuliskan kedalam file list_pengunjung.txt value di tambah 1
}

lihat();	//menjalankan function lihat
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_payunglipatdua.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Payung Berkat Family</title>
  </head>
  <body>
    <div class="navbar">

      <div class="logo">
        <h3>Payung Berkat Family</h3>
      </div>
    </div>
    <!-- jenis payung -->
    <div class="content" id="jenis_payung" style="padding-top:100px;">
      <div class="title">
        <h2>Payung Lipat Dua</h2>
      </div>
      <hr>
      <div class="row">
        <div class="col-1">
          <img src="img/lipat_dua/payunglipatdua1.jpg" alt="" class="center">
        </div>
        <div class="col-2">
          <img src="img/lipat_dua/payunglipatdua2.jpg" alt="">
        </div>
        <div class="col-3">
          <img src="img/lipat_dua/payunglipatdua3.jpg" alt="">
        </div>
				<div class="col-4">
          <img src="img/lipat_dua/payunglipatdua4.jpg" alt="">
        </div>
      </div>
      <!-- <div class="row-2">
        <div class="col-1">
          <img src="img/golf/golf5.jpg" alt="" class="center">
        </div>
        <div class="col-2">
          <img src="img/golf/golf6.jpg" alt="">
        </div>
        <div class="col-3">
          <img src="img/golf/golf7.jpg" alt="">
        </div>
				<div class="col-4">
          <img src="img/golf/golf8.jpg" alt="">
        </div>
      </div> -->

      <div class="keluar">
        <a href="index.php"><i class="fa-solid fa-circle-left"></i> Kembali</a>
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
		<script src="https://unpkg.com/scrollreveal"></script>

		<script type="text/javascript">
				ScrollReveal({
					reset: true,
					distance: '60px',
					duration: 2000,
					delay: 500
				});
				ScrollReveal().reveal('.col-1, .col-2, .col-3, .col-4, .googlemap',{delay:50, origin:'bottom'});


		</script>
  </body>
</html>
