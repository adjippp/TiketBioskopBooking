<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php 
$link = @mysql_connect("localhost", "root", "");
mysql_select_db("pbw", $link);

$result = mysql_query("SELECT * FROM pemesanan", $link);
$num_rows = mysql_num_rows($result);

$result2 = mysql_query("SELECT * FROM user", $link);
$num_rows2 = mysql_num_rows($result2);
?>
<div id="wrapper">
<div id="header"></div>

<div id="menu">
    <ul>
      <li><a href="admin.php">Admin Panel</a></li>
      <li><a href="dataUser.php">Data User</a></li>
      <li><a href="dataPemesanan.php">Pemesanan</a></li>
	  <li><a href="dataGallery.php">Data Gallery</a></li>
	  <li><a href="film.php">Update Film</a></li>	
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
		
		<br/>
		<b>Jumlah User yang terdaftar hingga saat ini:</b> <?php echo $num_rows2; ?><br/> 
		<b>Jumlah Kursi yang dipesan hingga saat ini:</b> <?php echo $num_rows; ?><br/>
		<b>Pendapatan Hingga Saat ini:</b> <?php echo $num_rows*25000; ?><br/>
		<a href="indexs.php">signout</a> 
	  <hr/>	
</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
	  <form id="searchthis" action="http://www.google.com/search" style="display:inline;" method="get">
	  <input id="b-query" maxlength="255" name="q" size="17" type="text"/>
	  <input id="b-searchbtn" value="Search" type="submit"/>
	  </form>
	  <hr/>
	  <center><br/>
	  <i><font color="#666666" face="verdana"><strong>Powered By <br/>TIKETBIOSKOP.COM</strong></font></i></center>
	  <br/><br/>
</div>
<div id="clearer"></div>
<div id="footer"></div>
</div>
</body>
</html>
