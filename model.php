<?php
class model{
	function __construct(){

		}

	function execute($query){
		$koneksi = mysqli_connect("localhost", "root", "","arkademy");
		return mysqli_query($koneksi,$query);
	}

	function viewProduk(){
		$query = "select * from produk";
		return $this->execute($query);
	}

	function viewEditProduk($kode){
		$query = "select * from produk where kd_produk='$kode'";
		return $this->execute($query);
	}

	function editProduk($kd_produk, $nama_produk, $keterangan, $harga, $jumlah){
		$query = "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE kd_produk='$kd_produk'";
		return $this->execute($query);
	}

	function inputProduk($kd_produk, $nama_produk, $keterangan, $harga, $jumlah){
		$query = "INSERT INTO produk VALUES ('$kd_produk','$nama_produk', '$keterangan','$harga','$jumlah')";
		return $this->execute($query);
	}

	function hapusProduk($kode){
		$query = "DELETE FROM produk WHERE kd_produk='$kode'";
		return $this->execute($query);
	}

	function fetch($var){
		return mysqli_fetch_array($var);
	}

	function __destruct(){
		}
}
?>