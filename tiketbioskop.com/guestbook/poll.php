<link rel="stylesheet" href="../style/css.css">
<h3 align="center">HASIL POLING SEMENTARA</h3>
<?
include("../db/index.php");
$query="select * from polling";
$data=mysql_query($query);
while($record=mysql_fetch_array($data))
{
echo "<blockquote><blockquote>$record[0]: $record[1]</blockquote></blockquote><br>";
}
mysql_close($koneksi);
?>