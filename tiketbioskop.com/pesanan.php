<?php 
include"include/conn.php";
$hari=$_POST['hari'];
$tempat=$_POST['tempat'];
$judul=$_POST['film'];
$jam=$_POST['jam'];
$baris=$_POST['baris'];
$kolom=$_POST['kolom'];
$sheet="$baris-$kolom";
$cek=0;
$no=1;
$a1="select * from pemesanan;";
$q2=mysql_query($a1);
while($data=mysql_fetch_array($q2)){
$no=$data['no'];
if($data['tempat']==$tempat&&$data['judul']==$judul&&$data['jam']==$jam&&$data['sheet']==$sheet&&$data['hari']==$hari){
$cek=1;
}
}
if($cek==1){ echo "<script>alert('maap kursi sudah ada yang memesan,silahkan pesan kembali'); document.location.href='tiketonline.php';</script>";}else
{

$q1="insert into pemesanan(tempat,judul,jam,sheet,hari) values('$tempat','$judul','$jam','$sheet','$hari');";
$q2=mysql_query($q1);
if($q2){ echo "<script>alert('terima kasih sudah memesan data anda '); document.location.href='cetak-tiket.php?id=$no';</script>";
};
};
?>
