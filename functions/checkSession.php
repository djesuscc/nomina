<?php 
    include('uses.php');
    session_start();
    
    if(!$_SESSION["id"]) {
        redirect('');
    }

?>