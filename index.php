<?php
include "controller.php";
$main = new controller();

if (isset($_GET['beranda'])) {
  $main->index();
}else if (isset($_GET['barang'])) {
  $main->viewProduk();
}else if (isset($_GET['viewEditProduk'])) {
  $kode = $_GET['viewEditProduk'];
  $main->viewEditProduk($kode);
}else if (isset($_GET['editProduk'])) {
  $main->editProduk();
}else if (isset($_GET['viewInputProduk'])){
  $main->viewInputProduk();
}else if (isset($_GET['inputProduk'])){
  $main->inputProduk();
}else if (isset($_GET['hapusProduk'])){
  $kode = $_GET['hapusProduk'];
  $main->hapusProduk($kode);
}else{
  $main->index();
}
?>