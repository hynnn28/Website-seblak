<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
	}


}
?>

<html>
    <head>
    <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
<div id="contact" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <div class="section-title">CONTACT</div>
                    <h2>Untuk Informasi lebih lanjut</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"><i class="fas fa-map-marker-alt"></i>Jl. BKKBN No.8D, Mustika Jaya, Kec. Mustika Jaya, Kota Bekasi, Jawa Barat 17158</li>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6993561793774!2d107.02884947499099!3d-6.3031757936860044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991215d79a9dd%3A0xfca31b9121c08619!2sSeblak%20Tasik%203%20Putra%20Pusat!5e0!3m2!1sid!2sid!4v1729749750767!5m2!1sid!2sid" frameborder="0"></iframe> <br>
                        <li><i class="fas fa-phone"></i><a href="tel:">081380542727</a></li>
                        <li><i class="fas fa-envelope"></i><a href="hibatt28@gmail.com">hibatt28@gmail.com</a></li>
                    </ul>
                
                
               
                <form action ="" method="post" enctype="multipart/form-data">
                    <ul>
                        <li>
                    <div>
                    <label for="name">Name</label>
                        <input type="text"  name="nama" id="nama" required>
                        </li>
                         </div>
                         <li>
                    <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                        </li>
                    </div>
                    <li>
                    <label for="pesan">Your message</label>
                        <textarea  name = "pesan" id="pesan"></textarea>
                        </li>
                      </div>
                      <li>
                        <button type="submit" name = "submit" id="submit">SUBMIT MESSAGE</button>
                        </li>
                    </div>
                    </ul>
                </form>
</body>
</html>