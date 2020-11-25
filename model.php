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

	function viewEditProduk($nama_produk){
		$query = "select * from produk where nama_produk='$nama_produk'";
		return $this->execute($query);
	}

	function editProduk($nama_produk, $keterangan, $harga, $jumlah){
		$query = "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE nama_produk='$nama_produk'";
		return $this->execute($query);
	}

	function inputProduk($nama_produk, $keterangan, $harga, $jumlah){
		$query = "INSERT INTO produk VALUES ('$nama_produk', '$keterangan','$harga','$jumlah')";
		return $this->execute($query);
	}

	function hapusProduk($nama_produk){
		$query = "DELETE FROM produk WHERE nama_produk='$nama_produk'";
		return $this->execute($query);
	}

	function fetch($var){
		return mysqli_fetch_array($var);
	}

	function __destruct(){
		}
}
?>