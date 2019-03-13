<?php
session_start();
include"./include/conn.php";
$user=$_SESSION['username'];
$q1="select * from user where user='$user';";
$q2=mysql_query($q1);
$data=mysql_fetch_array($q2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js_validate/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js_validate/jquery.js"></script>		
    <script src="js_validate/jquery.validate.min.js" type="text/javascript"></script>  
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						user: "required",
						nama: "required",
						psw0: "required",						
						psw: "required",
						psw2: "required",
						email: "required",
						hp: "required",
						alamat: "required",						
					},
					messages: {
						user: "* Kosong",
						nama: "* Kosong",
						psw0: "required",						
						psw: "* Kosong",
						psw2: "* Kosong",
						email: "* Kosong",
						hp: "* Kosong",
						alamat: "* Kosong",						
					}
				});
			});
		</script>



</head>
<body>
<div id="wrapper">
<div id="header"></div>

<div id="menu">
<?php
 $menu=2;
 include "topmenu.php";
?> 
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks">

<h3 align="left"><u>Form Update Profil </u></h3>
<form method="post" action="update_daftar.php" name="formdaftar" id="frm">
<table align="center">
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" value="<?php echo $data['nama']?>"size="10">

<tr><td>User Name</td><td>:</td><td><input type="text" name="user" size="25" value="<?php echo $user;?>"></td></tr>
<tr><td>Masukkan Password lama</td><td>:</td><td><input type="password" name="psw0" value=""size="15"></td></tr>
<tr><td>Masukkan Password Baru</td><td>:</td><td><input type="password" name="psw" value=""size="15"></td></tr>
<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="psw2" size="15"></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="email" value="<?php echo $data['email'];?>" size="20">
<br/><font color="#333333">contoh: modol.jangan@gmail.com</font></td></tr>
<tr><td>No HP</td><td>:</td><td><input type="text" name="hp" size="18" value="<?php echo $data['hp'];?>">
<br/><font color="#333333">contoh: 081214141618</font></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" size="35" value="<?php echo $data['alamat'];?>"></td></tr> 
<tr><td colspan="2"><input type="submit" name="submit" value="Update Profil"><input type="reset" value="Batal">
</td></tr>
</table>
</form>


</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
	  <form id="searchthis" action="http://ibc.gunadarma.ac.id/search" style="display:inline;" method="get">
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