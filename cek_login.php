<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = /*md5*/$_POST['password'];

$admin = mysqli_query ($koneksi,"SELECT * FROM petugas WHERE username='$username' and password='$password'");
$log = mysqli_num_rows($admin);
if ($log > 0){
    $r = mysqli_fetch_array($admin);

	if ($r['level']=="admin"){
        $_SESSION['username']= $username;
	$_SESSION['level']= "admin";
		header("location:petugas/admin.php");
	}
	elseif ($r['level']=="resepsionis"){
        $_SESSION['username']= $username;
	$_SESSION['level']= "resepsionis";
		echo " <script> location.href='petugas/resepsionis.php'</script>";
} else {
	header("location:login.php?login gagal") ;
}
}else{
	header("location:login.php?login gagal") ;
}
 ?>