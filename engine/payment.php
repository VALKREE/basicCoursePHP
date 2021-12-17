<?PHP
	include "../config.php";
	$sql_cart = "SELECT * FROM cart WHERE";
	$sql_order = "SELECT * FROM order";
	$res_cart = mysqli_query($connect,$sql_cart);
	$res_order = mysqli_query($connect,$sql_order);

	while($data = mysqli_fetch_assoc($res_cart)){
		
	}
	
?>