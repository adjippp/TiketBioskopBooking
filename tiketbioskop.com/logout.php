<?php
    /* session_start untuk memastikan file ini terhubung dalam session */
    session_start();
//STOP    
    /* Hapus session untuk logout */
    session_destroy();
    
    /* Redirect untuk login kembali */
    header('Location: indexs.php');
?>
