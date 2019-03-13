<?php
	$id_user = $_POST['delId'];
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "pbw";
	$conn = mysqli_connect($server,$user,$pass,$db);
	$sql = "DELETE FROM user WHERE '$id_user'";
	if(mysqli_query($conn,$sql)){
		mysqli_query($conn,$sql);
		echo"<script>alert('Data telah berhasil dihapus');
		document.location.href='dataUser.php'; </script>\n";
	}else{
		echo"<script>alert('Tidak dapat menemukan data');
		document.location.href='dataUser.php'; </script>\n";
	}
?>