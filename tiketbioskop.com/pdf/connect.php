<?
//parse_str("$QUERY_STRING");

//$db = mysql_connect("localhost", "root", "") or die("Could not connect.");
//if(!$db) die("no db");
//$dbname = "pbw";
//if(!mysql_select_db($dbname,$db))
// 	die("No database selected.");
//extract($_REQUEST, EXTR_OVERWRITE, ''); 

//$active = 1;
?>

<?php

@mysql_connect("localhost","root","") or die("tidak bisa koneksi ke database");
mysql_select_db('pbw');
?>
