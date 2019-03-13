<?php

include "./include/conn.php";
$replace=$_POST['jpgnya'];
$namafilm=$_POST['namafilm'];
$sinopsis=$_POST['comments'];
$file_name= $_FILES['file']['name'];
$file_ext= strtolower(end(explode('.', $file_name)));
$file_tmp= $_FILES['file']['tmp_name'];
if(file_exists("./gallery/$file_name")){ unlink("./gallery/$file_name");}
$lokasi='./gallery/'.$replace.'.'.$file_ext;; 
move_uploaded_file($file_tmp, $lokasi);
mysql_query("UPDATE tools_gallery
SET keterangan=$namafilm,link=$sinopsis
WHERE gambar='$replace'.jpg;");
?>