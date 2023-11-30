<?php
/*
  | Source Code Aplikasi Rental gadget PHP & MySQL
  | 
  | @package   : rental_gadget
  | @file	   : logout.php 
  | @author    : fauzan1892 / Fauzan Falah
  | @copyright : Copyright (c) 2017-2021 Codekop.com (https://www.codekop.com)
  | @blog      : https://www.codekop.com/products/source-code-aplikasi-rental-gadget-php-mysql-7.html 
  | 
  | 
  | 
  | 
 */
    session_start();
    session_destroy();

    echo '<script>alert("Anda Telah Logout");window.location="../index.php";</script>';
?>