<?php 

$u = $_POST['user'];



if ($u == '6' ) {
	setcookie("i4");
	header('location:http://pwnable.cf/intermediate/5/');
}
else {
	header('location:http://pwnable.cf/intermediate/4/');
	# code...
}
 ?>