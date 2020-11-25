<?php
include "controller.php";
$main = new controller();

if (isset($_GET['beranda'])) {
  $main->index();
}else if (isset($_GET['barang'])) {
  $main->viewProduk();
}else if (isset($_GET['viewEditProduk'])) {
  $nama_produk = $_GET['viewEditProduk'];
  $main->viewEditProduk($nama_produk);
}else if (isset($_GET['editProduk'])) {
  $main->editProduk();
}else if (isset($_GET['viewInputProduk'])){
  $main->viewInputProduk();
}else if (isset($_GET['inputProduk'])){
  $main->inputProduk();
}else if (isset($_GET['hapusProduk'])){
  $nama_produk = $_GET['hapusProduk'];
  $main->hapusProduk($nama_produk);
}else{
  $main->index();
}
?>