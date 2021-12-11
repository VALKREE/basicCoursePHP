<?PHP
	include "./config.php";
	function updateCountInCart($connect,$id_good,$count){
		$sql = "UPDATE cart SET count = $count 
			WHERE id_good = $id_good 
			AND id_user = {$_SESSION['id_user']}
		";
		$res = mysqli_query($connect, $sql);
		if(mysqli_affected_rows($connect) > 0){ ?>
			<script>alert("Сохранено!");</script>
		<?PHP }
	}

	function createOrder($connect){
		$sql = "
			UPDATE cart SET status = 1 
			WHERE status = 0 
			AND id_user = {$_SESSION['id_user']}
		";
		$res = mysqli_query($connect, $sql);
		$check = true;
		if($res){
			$getTotal = "
				SELECT SUM(goods.price * cart.count) as 'total' 
				FROM goods INNER JOIN cart ON cart.id_good
			";
			$res = mysqli_query($connect,$sql);
			$total = mysqli_fetch_assoc($res)['total'];
			$createOrder = "
				INSERT INTO orders(id_user,status_order, TotalSum)
				VALUES({$_SESSION['id_user']},2,$total)
			";
			$res = mysqli_query($connect,$createOrder);
			if(mysqli_affected_rows($connect)>0){
				$_SESSION['order'] = "finish"; ?>
				<script>
					location.href = "/?page=cart&finish=$total";
				</script>
			<?PHP }else{
				$check = false;
			}
		}else{
			$check = false;
		}
	}

	function getInfoUser($connect,$id_user){
		$sql = "SELECT * FROM users WHERE id_user=$id_user";
		$res = mysqli_query($connect,$sql);
		$data = mysqli_fetch_assoc($res);
		return $data;
	}

	function getTextStatusOrder($connect, $id_status){
		$sql = "SELECT * FROM orderstatus";
		$res = mysqli_query($connect,$sql);
		$option = "";
		while($statuses = mysqli_fetch_assoc($res)){
			if($statuses['id'] == $id_status){
				$option .= "
					<option value='{$statuses['id']}' selected>
						{$statuses['status']}
					</option>";
				}else{
					$option .= "
						<option value='{$statuses['id']}'>
							{$statuses['status']}
						</option>
					";
				}
		}
		return $option;
	}
?>