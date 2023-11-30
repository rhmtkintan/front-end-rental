<?php
/*
  | Source Code Aplikasi Rental gadget PHP & MySQL
  | 
  | @package   : rental_gadget
  | @file	   : proses.php 
  | @author    : fauzan1892 / Fauzan Falah
  | @copyright : Copyright (c) 2017-2021 Codekop.com (https://www.codekop.com)
  | @blog      : https://www.codekop.com/products/source-code-aplikasi-rental-gadget-php-mysql-7.html 
  | 
  | 
  | 
  | 
 */
 require '../../koneksi/koneksi.php';

if($_GET['id'] == 'konfirmasi')
{
    $data2[] = $_POST['status'];
    $data2[] = $_POST['id_gadget'];
    $sql2 = "UPDATE `gadget` SET `status`= ? WHERE id_gadget= ?";
    $row2 = $koneksi->prepare($sql2);
    $row2->execute($data2);

    echo '<script>alert("Status gadget di pinjam");history.go(-1);</script>'; 
}