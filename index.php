<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" />  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Klik Love-nya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>

konten = [
  {
    gambar: "stiker1.gif",
    ucapan: "hi sayang❤️",
  },
  {
    gambar: "stiker2.gif",
    ucapan: "selamat ulang tahun ya cantik❤️"
  },
  {
    gambar: "stiker3.gif",
    ucapan: "semoga kebaikan selalu datang kepadamu 😘",
  },
  {
    gambar: "stiker4.gif",
    ucapan: " semoga sehat selalu..",
  },
  {
    gambar: "stiker5.gif",
    ucapan: "lancar rejekinyaa",
  },
  {
    gambar: "stiker6.gif",
    ucapan: "aamiin 🥰",
  },
  {
    ucapan: "i love you cantik 🥰🥰😘😘❤️❤️❤️😘🥰🥰🥰😘😘❤️❤️😘🥰🥰😘😘❤️😘🥰🥰😘❤️❤️❤️🥰🥰",
  },
];

musik = "musik.mp3";
nomorWhatsapp = "6289626054052";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>