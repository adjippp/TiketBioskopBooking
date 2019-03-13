<?php
include "./include/conn.php";
$user=$_POST["user"];
$psw=$_POST["psw"];
$psw2=$_POST["psw2"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$hp=$_POST["hp"];
$alamat=$_POST["alamat"];

if($psw2!=$psw){
echo"<script>alert('Konfirmasi password salah');
document.location.href='update_profil.php'; </script>\n";
}

if($user=="" || $psw=="" || $psw2=="" || $nama=="" || $email=="" || $hp=="" || $alamat=="" ){
echo"<script>alert('Data yang anda masukkan tidak lengkap, silahkan lengkapi data anda');
document.location.href='update_profil.php'; </script>\n";
}
else
$psw=md5($_POST["psw"]);
{$input="UPDATE user SET user='$user',psw='$psw',nama='$nama',email='$email',hp='$hp',alamat='$alamat' where user='$user';";
$hasil=mysql_query($input);
if ($hasil)
{
echo"<script>alert('Pendaftaran Berhasil,Cek Data Anda');
document.location.href='berhasil-update2.php?id=$user&pas=$psw2'; </script>\n";}
else
{echo"<script>alert('Pendaftaran Gagal');
document.location.href='update_profil.php'; </script>\n";}
}
?>
