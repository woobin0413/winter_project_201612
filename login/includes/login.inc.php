<?php
session_start();
include '../dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


//decrypting
$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);

if ($hash == 0) {

   	header("Location: ../index.php?error=passworderror");
   	exit();

} else {

		$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
		$result = mysqli_query($conn,$sql);

		if (!$row = mysqli_fetch_assoc($result)) {
				echo "Your user name or password is incorrect!";
			} else {
				$_SESSION['id'] = $row['id'];

			}
			
		header("Location: ../index.php");

}
?>