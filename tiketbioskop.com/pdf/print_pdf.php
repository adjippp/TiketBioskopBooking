<?php
  session_start();
$SN=$_SESSION["NO"];
$USER=$_SESSION["username"];
include "connect.php";
include ('class.ezpdf.php');
$pdf = new Cezpdf('a4','landscape');
		// Atur margin
		$pdf->ezSetCmMargins(2, 3, 3, 3);

		$pdf->addObject($all, 'all');
		$pdf->closeObject();
		
    $sql = mysql_query("SELECT * FROM pemesanan where no='$SN'; "); 	 	
		$r = mysql_fetch_array($sql);
      $tempat=$r[tempat];
      $judul=$r[judul];
      $nokursi=$r[sheet];
      $hari=$r[hari]; 
      $harga='Rp.25.000,00';   
		 	   
    $sqlx = mysql_query("SELECT * FROM user where user='$USER'; ");     	
		$i = 1;
		$d = mysql_fetch_array($sqlx); 		 
			$data[$i]=array('Nama Lengkap'=>$d[nama], 
      	 	 	  'User Name'=>$USER,
							'Email'=>$d[email],
							'HP'=>$d[hp],
							'Alamat'=>$d[alamat],              
              'NO SN'=>crc32($SN), 	 	 	
							'Tempat Teater'=>$tempat,
							'Judul Film'=>$judul,
							'Harga Tiket'=>$harga,							
							'No Kursi'=>$nokursi,
							'Hari'=>$hari

							);					
			$i++;	
		
		$pdf->ezStartText(100, 557, 12);
		$pdf->ezStartText2(500, 557, 12);
		$pdf->ezStartPageNumbers(35, 15, 10);
		$pdf->ezTable($data, '', '', '');
		$pdf->ezStream();
?>
