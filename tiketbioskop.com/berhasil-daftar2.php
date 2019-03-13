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
      <li><a href="indexs.php">Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li>

    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
<?php 
$user=$_GET['id'];
$psw=$_GET['pas'];
?>
  <strong>Terima kasih anda telah bergabung dengan TIKETBIOSKOP.COM,<br> Mohon Diingat UserName dan Password Anda.<br/></strong><br/>
	  <form action="" method="post">
  	  <table width="10">
	  <tr><td>Username:<?php echo $user;?></td>
	  <tr><td>Password:<?php echo $psw;?></td>
	  </table> 
	  </form>
	  <a href="./indexs.php">Klik disini untuk Login</a> 
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
