<?php
  session_start();
  if($_SESSION['LOGIN'] != 'OK'){
  header('location: indexs.php');
  }
  $namanya=$_SESSION["nama"];
?>
<?php 
include"./include/conn.php";
$id=$_GET['id'];
$q1="select * from pemesanan where no=$id+1;";            
$q2=mysql_query($q1);
$data=mysql_fetch_array($q2);
?>
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
<?php
 $menu=1;
 include "topmenu.php";
?>    
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks">

<?php 
$user=$_SESSION["username"];
$q1="select * from user where user='$user';";
$q2=mysql_query($q1);
$dataa=mysql_fetch_array($q2);
$_SESSION["NO"]=$data['no'];
$namanya=$_SESSION["nama"];
$a=crc32($data['no']);
?>
<form action="./pdf/print_pdf.php" method="post">
<fieldset>
<legend><h3>Silahkan Cetak Tiket Pemesanan</h3></legend>
  	  <table width="100%">
    <tr><td colspan="3"><strong><u>DATA <?php echo strtoupper($namanya); ?></u></strong></td></tr>  	  
	  <tr><td>Nama</td><td>:</td><td><?php echo $dataa['nama']; ?></td></tr>
    <tr><td>User Name</td><td>:</td><td><?php echo $dataa['user']; ?></td></tr>	  
	  <tr><td>email</td><td>:</td><td><?php echo $dataa['email'];?></td></tr>
	  <tr><td>No HP</td><td>:</td><td><?php echo $dataa['hp'];?></td></tr>    
	  <tr><td>Alamat</td><td>:</td><td><?php echo $dataa['alamat'];?></td></tr>  
	  <tr><td colspan="3"><strong><br><u>JUDUL FILM</u></strong></td></tr>
	  <tr><td>Hari</td><td>:</td><td> <?php echo $data['hari']; ?></td></tr>
	  <tr><td>Waktu</td><td>:</td><td><?php echo $data['jam'];?></td></tr>
	  <tr><td>Kursi</td><td>:</td><td><?php echo $data['sheet'];?></td></tr>    
	  <tr><td>Harga</td><td>:</td><td>25.000</td>  
	  <tr><td>SN</td><td>:</td><td><?php echo $a;?></td></tr>  
	  <tr><td colspan="2"></td><td><b>**No SN akan divalidasi oleh TIKETBIOSKOP.COM</b></td></tr>
	  </table>
	  <input type="submit" value="Cetak Tiket">
</fieldset>	  
    </form>	  
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
<div id="footer"> </div>
</div>
</body>
</html>
