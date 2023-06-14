<?php
// Koneksi ke database
$servername = "localhost";
$username = "n1566458_adam_mobil";
$password = "ptJjehhqZKc4";
$dbname = "n1566458_adam_mobil";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menerima data dari form
$namaProduk = $_POST['nama_produk'];
$hargaProduk = $_POST['harga_produk'];
$deskripsiProduk = $_POST['deskripsi_produk'];

// Membuat query untuk menambahkan produk
$sql = "INSERT INTO produk (nama_produk, harga_produk, deskripsi_produk) VALUES ('$namaProduk', '$hargaProduk', '$deskripsiProduk')";

if (mysqli_query($conn, $sql)) {
    echo "Produk berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
