<?php
session_start();
$id_produk = $_GET["id"];
unset($_SESSION["cart"][$id_produk]);

echo "<script> alert('Produk Terhapus');</script>";
echo "<script> location ='halaman_keranjang.php';</script>";
