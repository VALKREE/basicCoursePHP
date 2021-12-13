<?PHP
	include "../config.php";
	$sql_cart = "SELECT * FROM cart";
	$sql_order = "SELECT * FROM order";
	$res_cart = mysqli_query($connect,$sql_cart);
	$res_order = mysqli_query($connect,$sql_order);
	
?>