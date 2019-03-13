<?
include("../db/index.php");

$query="insert into guestbook(nama,email,isi) values('".$_POST["nama"]."','".$_POST["email"]."','".$_POST["isi"]."')";
mysql_query($query);
$query="update polling set jumlah=jumlah+1 where pilihan='".$_POST["po1"]."'";
mysql_query($query);
mysql_close($koneksi);
?>
<script language="JavaScript">
window.location="index.php";
</script>