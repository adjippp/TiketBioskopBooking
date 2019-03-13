<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<div id="header"></div>
	  
<div id="menu">
    <ul>
      <li><a href="indexs.php" id="aktif">Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li> 
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent"><br>
	<?php
	include "./include/conn.php"; 
	include "./gallery.php";
	?>
	<br>
	<div id="teks"><h2><u>Sinopsis Film</u></h2>
	<table><tbody valign="top"><tr><td>
  <img src="./images/einh.jpg"/ width="130" height="150"> </td><td>Seorang anak pastinya ingin membahagiakan orang tuanya. Tapi seiring berjalannya waktu, ketika sang anak memiliki hidup dan mimpinya yang ingin diraihnya, 
membuat kebahagiaan orang tua sedikit tergeser.Hal inilah yang ingin diangkat oleh sutradara muda Aditya Gumay lewat film EMAK INGIN NAIK HAJI.<br>
Kisah diawali dengan kehidupan Zein (Reza Rahadian) dan Emak (Aty Kanser) di pesisir pantai. </td></tr><tr><td colspan="2">Zein yang sibuk dengan hidup rumah tangganya,
akhirnya harus menerima kenyataan pernikahannya gagal dan harus menjadi duda. Hidup berdua, setelah sang ayah dan kakaknya meninggal, membuat Zein 
sangat menyayangi emaknya. Untuk hidup sehari-harinya, Zein bekerja sebagai penjaja lukisan keliling. Emak sendiri bekerja sebagai pembantu di keluarga 
Bang Haji (Didi Petet)..<br/><br/><h2></h2></td></tr></tbody></table>
</table>
</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
<form method="get" action="http://www.google.com/search" target="_blank">
<table align="left" cellpadding="0">
<tbody>
<tr>
<td nowrap="nowrap">
<input name="q" size="25" maxlength="255" value="" type="text">
</tr>
<tr>
<td align="left">
<input name="submit" value="Search" type="submit">
</td>
</tr>
<tr><td><hr></td></tr>
</tbody>
</table>
</form>

		<?php
		include "./login.html";
		?>
	  <hr/>	
	  <center><br/>
	  <i><font color="#666666" face="verdana"><strong>Powered By <br/>TIKETBIOSKOP.COM</strong></font></i></center>
	  <br/><br/>
</div>
<div id="clearer"></div>
<div id="footer"> </div>
</div>
</body>
</html>
