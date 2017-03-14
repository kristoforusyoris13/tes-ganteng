<html>
<head>
<title>Tes Ketampanan/Kecantikan</title><br>
<link href="css.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
if (isset($_POST['hitung'])){
$a = rand(50,99);
$nama = $_POST["nama"];
$gen = $_POST["gen"];
?>
<h1>Hai <?= strtoupper($nama); ?>, Tingkat 
<?php
if($gen == "l"){ ?>
ketampanan anda adalah
<?php } else{ ?>
kecantikan anda adalah
<?php } ?>
<?= $a ?>/100% </h1><a href="index.php"><button>BACK</button></a>
<?php  } else {
?>
<center>
<table>
<form action="" name="tambah" id="tambah" method="post">
	<tr>
  <td><h2><b>Nama</b></h2></td><td><input type="text/html" name="nama" id="nama" required></td>
  </tr>
  <tr><td><h2><b>Jenis Kelamin</b></h2></td>
<td ><select name="gen" id="gen">
<option selected="selected" required></option>
<option value="l">Laki-laki</option>
<option value="p">Perempuan</option>
</select></td></tr>
<tr><td><button type="submit" name="hitung" id="hitung">Hitung</button>
</td></tr><tr><td></td></tr></form>
</center>
</body>
</html> <?php } ?>