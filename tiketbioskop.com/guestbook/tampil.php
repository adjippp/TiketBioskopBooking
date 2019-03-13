<link rel="stylesheet" href="../style/css.css">
<h3 align="center">ISI GUESTBOOK</h3>
<table align="center" width="50%">
<?

include("../db/index.php");

$query="select * from guestbook";
$data=mysql_query($query);
while($record=mysql_fetch_array($data))
{
?>
	<tr><td width="100">Nama:</td><td><? echo $record[1]?></td></tr>
	<tr><td>E-mail:</td><td><? echo $record[2]?></td></tr>
	<tr><td colspan="2">Isi</td></tr>
	<tr><td colspan="2"><pre><? echo $record[3]?></pre></td></tr>
<?
}
mysql_close($koneksi);
?>
</table>
<a href="index.php">back</a>