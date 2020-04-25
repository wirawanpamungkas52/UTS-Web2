<!DOCTYPE html>
<html>
<head>
 <title>Aditya Wirawan Pamungkas</title>
<?php 
 mysql_connect("localhost","root","");
 mysql_select_db("corona19");
$sql=mysql_query("SELECT * FROM covid19 ORDER BY provinsi ASC");
?>
</head>
<body>
 <h2>Aditya Wirawan Pamungkas/171011400828</h2>
 <table border="1" width="600px" align="center">
       <thead>
       <tr>
           <th>Positif</th>
           <th>Dirawat</th>
           <th>Sembuh</th>
		   <th>Meninggal</th>
       </tr>
       </thead>
	   
<form method="POST">
 <select name="provinsi" id="provinsi">
  <option disabled selected> Pilih </option>
 <?php 
	while ($data=mysql_fetch_array($sql)) {
	?>
		<option value="<?=$data['provinsi']?>"><?=$data['provinsi']?></option> 
		<tr>
           <td><?php echo $data['Positif'];?></td>
           <td><?php echo $data['Dirawat'];?></td>
           <td><?php echo $data['Sembuh'];?></td>
		   <td><?php echo $data['Meninggal'];?></td>
       </tr>
 <?php
	}
 ?>
  </select>
  <input type="submit" name="Tampilkan" value="Tampilkan">
</form>
<h2 align="center">
<?php
 if (isset($_POST['Tampilkan'])) {
  echo "<br><br>Data Pemantaun Covid19 wilayah ";
  echo $_POST['provinsi'];
  echo "<br> Per " . date("d M Y h:i:s") . "<br>";
  echo "Aditya Wirawan Pamungkas/171011400828";

 }
?>
</h2>
</table>
</body>
</html>