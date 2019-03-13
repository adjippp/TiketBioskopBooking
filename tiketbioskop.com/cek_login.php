<?php
    /* session_start untuk memastikan file ini terhubung dalam session */
    session_start();
        
    /* Cek apakah username dan password yang diinput user cocok dengan data yg tersimpan pada table users */
    
    /* Data username dan password yang diinput oleh user melalui form */
    $data_username = $_POST['user'];
    $data_password = md5($_POST['pwd']); 
    include './include/conn.php';
  if($data_username=="" || $data_password==""){
      echo"<script>alert('Maaf data yang anda masukkan tidak lengkap');
      document.location.href='indexs.php'; </script>\n";
    }else{    
      $result = mysql_query("SELECT * FROM user WHERE user='$data_username' AND psw='$data_password'");

      $total = mysql_num_rows($result);
      if ($total > 0) {
		    while ($data=mysql_fetch_array($result))
		    {
		      $usernamex= $data[user];
		      $namax= $data[nama];
		    }        
           $_SESSION['LOGIN'] = 'OK';
	         $_SESSION["username"]=$usernamex; 
	         $_SESSION["nama"]=$namax;                  
          header('Location: tiketonline.php');
      }else if($data_username=="admin" || $data_password=="admin"){
		header('Location: admin.php');
	  } else {
        echo "<script>alert('Maaf Username / Password tidak dikenal!!'); document.location.href='indexs.php';</script>";;
      }
  }  
?>