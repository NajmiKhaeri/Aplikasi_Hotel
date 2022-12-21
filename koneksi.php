<?php 
$servername = "localhost";
$username	= "root";
$password	= "";
$database	= "najujikom";

$koneksi = mysqli_connect("localhost","root","","najujikom");

//cek koneksi
if (mysqli_connect_errno()){
	echo "koneksi database gagal: ". mysqli_connect_error();
}

	?>