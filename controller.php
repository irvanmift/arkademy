<?php
include "model.php";

class controller{
	public $model;

	function __construct(){
		$this->model = new model();
	}

	function index(){
		$data = $this->model->viewProduk();
		include 'view.php';
	}

	function viewBeranda(){
		$data = $this->model->viewProduk();
		include "view.php";
	}

	function viewEditProduk($kode){
		$data = $this->model->viewEditProduk($kode);
		include "viewEditProduk.php";
	}

	function editProduk(){
		$kd_produk = $_POST['kd_produk'];
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		$keterangan = $_POST['keterangan'];

		$editBarang = $this->model->editProduk($kd_produk, $nama_produk, $keterangan, $harga, $jumlah);
		header("location:?beranda");
	}

	function viewInputProduk(){
		include "viewInputProduk.php";
	}

	function inputProduk(){
		$kd_barang = $_POST['kd_produk'];
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$inputProduk = $this->model->inputProduk($kd_produk, $nama_produk, $keterangan, $harga, $jumlah);
		header("location:?beranda");
	}

	function hapusProduk($kode){
		$data = $this->model->hapusProduk($kode);
		header("location:?beranda");
	}

	function __destruct(){
		}
}

?>