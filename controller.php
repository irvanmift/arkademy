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

	function viewEditProduk($nama_produk){
		$data = $this->model->viewEditProduk($nama_produk);
		include "viewEditProduk.php";
	}

	function editProduk(){
		$nama_produk = $_POST['nama_produk'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];
		$keterangan = $_POST['keterangan'];

		$editBarang = $this->model->editProduk($nama_produk, $keterangan, $harga, $jumlah);
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

		$inputProduk = $this->model->inputProduk($nama_produk, $keterangan, $harga, $jumlah);
		header("location:?beranda");
	}

	function hapusProduk($nama_produk){
		$data = $this->model->hapusProduk($nama_produk);
		header("location:?beranda");
	}

	function __destruct(){
		}
}

?>