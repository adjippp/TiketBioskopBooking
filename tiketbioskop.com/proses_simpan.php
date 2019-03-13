<?php
    session_start();
    $data1 = $_POST['npm'];
    $data2 = $_POST['nama'];
    $data3 = $_POST['kelas'];
    $data4 = $_POST['password'];
    $data5 = $_POST['passwordulang'];    
    $workdir = $data1."/";
    include 'conn.php'; 
    
    
if($data1=="" || $data2=="" || $data3=="" || $data4==""){
    echo"<script>alert('Maaf data yang anda masukkan tidak lengkap');
    document.location.href='daftar.php'; </script>\n";
}else{
    if($data4!=$data5){
      echo"<script>alert('Password yang Anda input tidak sama');
      document.location.href='daftar.php'; </script>\n";    
    }else{
      $sql = "select * from user where npm=".$data1;
      $proses_sql = mysql_query($sql);
      $jumlah_user=mysql_fetch_array($proses_sql);      
      if($jumlah_user>0){
        echo"<script>alert('Maaf Username telah ada!');
        document.location.href='daftar.php'; </script>\n";
      }else{
//TAMBAHAN BUAT FASILITAS ADMIN
        $result = mysql_query("INSERT INTO user(npm,nama,kelas,password,workdir,status,izin) VALUES('$data1','$data2','$data3',md5('$data4'),'$workdir','OFFLINE','AKTIF') ", $conn);
//STOP    
        if (!$result) {
          die('Gagal query: ' . mysql_error());
        }else{
          echo"<script>alert('Daftar Sukses, Silahkan Login');
          document.location.href='index.php'; </script>\n";    
        }
      }        
    }
  }
header('Location: index.php');
?>
