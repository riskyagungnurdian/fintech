<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html 
<body>
	<center>
		Aplikasi berbasis web Fintech Kelompok 4 Newpay hanya semata mata memenuhi Tugas Mata Kuliah Enterprise Architecture
		Contact :
		anugrahaan0@gmail.com
</center>
</body>
</html>