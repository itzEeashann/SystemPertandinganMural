<?php
    session_start();
    
    if(isset($_SESSION['IC'])) {
        include('header-hakim.html');
    } elseif(isset($_SESSION['ID'])) {
        include('header-urusetia.html');
    }
?>