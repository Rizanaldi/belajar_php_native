<?php 

session_start();

$c = mysqli_connect('localhost', 'root', '', 'kasir');

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$check = mysqli_query($c, "SELECT * FROM user WHERE username = '$username' and password = '$password' ");
	$hitung = mysqli_num_rows($check);

	if($hitung > 0){
		$_SESSION['login'] = 'true';
		header('location:index.php');
	}else{
		echo '
			<script>
				alert("Username atau Password salah !");
				window.location.href="login.php"
			</script>
		';
	}
}
if (isset($_POST['tambah_barang'])){
	$namaproduk = $_POST['namaproduk'];
	$deskripsi = $_POST['deskripsi'];
	$stock = $_POST['stock'];
	$harga = $_POST['harga'];
	$insert	= mysqli_query($c, "INSERT INTO produk (namaproduk,deskripsi,harga,stock) VALUES ('$namaproduk','$deskripsi','$harga','$stock')");

	if($insert){
		header('location:stock.php');
	}else{
		echo '
			<script>
				alert("Barang baru gagal ditambah !");
				window.location.href="stock.php"
			</script>
		';
	}
}
if (isset($_POST['tambah_pelanggan'])){
	$namapelanggan = $_POST['namapelanggan'];
	$notelp = $_POST['notelp'];
	$alamat = $_POST['alamat'];
	$insert	= mysqli_query($c, "INSERT INTO pelanggan (namapelanggan,notelp,alamat) VALUES ('$namapelanggan','$notelp','$alamat')");

	if($insert){
		header('location:pelanggan.php');
	}else{
		echo '
			<script>
				alert("Barang baru gagal ditambah !");
				window.location.href="pelanggan.php"
			</script>
		';
	}
}
if (isset($_POST['update_pelanggan'])){
	$idpelanggan = $_POST['idpelanggan'];
	$namapelanggan = $_POST['namapelanggan'];
	$notelp = $_POST['notelp'];
	$alamat = $_POST['alamat'];
	$update = mysqli_query($c, "UPDATE pelanggan set namapelanggan = '$namapelanggan', notelp = '$notelp', alamat = '$alamat' where idpelanggan = '$idpelanggan' ");

	if($update){
		header('location:pelanggan.php');
	}else{
		echo '
			<script>
				alert("Data pelanggan gagal diubah !");
				window.location.href="pelanggan.php"
			</script>
		';
	}
}
if (isset($_POST['delete_pelanggan'])){
	$idpelanggan = $_POST['idpelanggan'];
	$delete = mysqli_query($c, "DELETE  FROM pelanggan where idpelanggan = '$idpelanggan' ");

	if($delete){
		header('location:pelanggan.php');
	}else{
		echo '
			<script>
				alert("Data pelanggan gagal diubah !");
				window.location.href="pelanggan.php"
			</script>
		';
	}
}
if (isset($_POST['tambah_pesanan'])){
	$idpelanggan = $_POST['idpelanggan'];
	$insert	= mysqli_query($c, "INSERT INTO pesanan (idpelanggan) VALUES ('$idpelanggan')");

	if($insert){
		header('location:index.php');
	}else{
		echo '
			<script>
				alert("Barang baru gagal ditambah !");
				window.location.href="index.php"
			</script>
		';
	}
}
if (isset($_POST['add_product'])){
	$idproduk = $_POST['idproduk'];
	$idp = $_POST['idp'];
	$qty = $_POST['qty'];
	
	$hitung1 = mysqli_query($c, "select * from produk where idproduk = '$idproduk' ");
	$hitung2 = mysqli_fetch_array($hitung1);
	$stock_sekarang = $hitung2['stock'];

	if($stock_sekarang >= $qty){
		$selisih = $stock_sekarang - $qty;
		$insert	= mysqli_query($c, "INSERT INTO detailpesanan (idpesanan, idproduk, qty) VALUES ('$idp','$idproduk','$qty')");
		$update = mysqli_query($c, "UPDATE produk set stock = '$selisih' where idproduk = '$idproduk' ");

		if($insert&&$update){
			header('location:view.php?idp='.$idp);
		}else{
			echo '
				<script>
					alert("Barang baru gagal ditambah !");
					window.location.href="view.php?idp='.$idp.'"
				</script>
			';
		}
	}else{
		echo '
			<script>
				alert("Stock barang tidak Cukup");
				window.location.href="view.php?idp='.$idp.'"
			</script>
		';
	}
}
if (isset($_POST['new_produk'])){

	$qty = $_POST['qty'];
	$idproduk = $_POST['idproduk'];
	$insert	= mysqli_query($c, "INSERT INTO masuk (idproduk, qty) VALUES ('$idproduk','$qty')");
	$get_produk = mysqli_query($c, "SELECT * FROM produk where idproduk = '$idproduk'");
	$productz = mysqli_fetch_array($get_produk);
    $stock = $productz['stock'] + $qty;
	$increase = mysqli_query($c, "UPDATE produk set stock = '$stock' where idproduk = '$idproduk' ");

	if($insert&&$increase){
		header('location:masuk.php');
	}else{
		echo '
			<script>
				alert("Barang baru gagal ditambah !");
				window.location.href="masuk.php"
			</script>
		';
	}
}
if (isset($_POST['update_product'])){
	$idproduk = $_POST['idproduk'];
	$namaproduk = $_POST['namaproduk'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$update = mysqli_query($c, "UPDATE produk set namaproduk = '$namaproduk', deskripsi = '$deskripsi', harga = '$harga' where idproduk = '$idproduk' ");

	if($update){
		header('location:stock.php');
	}else{
		echo '
			<script>
				alert("Data produk gagal diubah !");
				window.location.href="stock.php"
			</script>
		';
	}
}


	/*
	$idproduk = $_POST['idproduk'];
	$idp = $_POST['idp'];
	$qty = $_POST['qty'];
	
	$hitung1 = mysqli_query($c, "select * from produk where idproduk = '$idproduk' ");
	$hitung2 = mysqli_fetch_array($hitung1);
	$stock_sekarang = $hitung2['stock'];

	if($stock_sekarang >= $qty){
		$selisih = $stock_sekarang - $qty;
		$insert	= mysqli_query($c, "INSERT INTO detailpesanan (idpesanan, idproduk, qty) VALUES ('$idp','$idproduk','$qty')");
		$update = mysqli_query($c, "UPDATE produk set stock = '$selisih' where idproduk = '$idproduk' ");

		if($insert&&$update){
			header('location:view.php?idp='.$idp);
		}else{
			echo '
				<script>
					alert("Barang baru gagal ditambah !");
					window.location.href="view.php?idp='.$idp.'"
				</script>
			';
		}
	}else{
		echo '
			<script>
				alert("Stock Barang Tidak Cukup");
				window.location.href="view.php?idp='.$idp.'"
			</script>
		';
	}
	*/

?>