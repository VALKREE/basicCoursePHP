<script>
	function save(id){
		let count = document.getElementById("good_"+id).value;
		location.href = "/?page=cart&id_good="+id+"&count="+count;
	}
</script>
<?PHP
	include "./config.php";
	include "./engine/functions.php";

	if(isset($_GET['order'])){
		createIrder($connect);
	}
	if(isset($_GET['finish'])){ ?>
		<h1>Заказ находится в обработке! Общая стоимость заказа: <?PHP $_GET['finish'] ?></h1>
	<?PHP }
	if(isset($_GET['count'])){
		updateCountInCart($connect,$_GET['id_good'], $_GET['count']);
	}
	if(!isset($_SESSION['order'])){ ?>
		<h1>Корзина покупок</h1>
	<?PHP }else{ ?>
		<h1>Ваши заказанные товары</h1>
	<?PHP }
	$sql = "SELECT id_good, title, price*count AS sum, count FROM goods
	INNER JOIN cart ON cart.id_good = goods.id AND id_user = {$_SESSION['id_user']}";
	$res = mysqli_query($connect,$sql);
?>
<div class="main-cart">
	<div class="main-cartHeading">
		<h4 class="main-cartHeading_h4">Название</h4>
		<h4 class="main-cartHeading_h4">Цена</h4>
		<h4 class="main-cartHeading_h4">Количество</h4>
		<?PHP
		if(!isset($_SESSION['order'])){ ?>
			<h4 class="main-cartHeading_h4">Действие</h4>
		<?PHP }
		?>
	</div>
	<div class="main-cartContent">
		<?PHP while($data = mysqli_fetch_assoc($res)){ ?>
			<div class="main-cartRow">
				<p class="main-cartCol"><?PHP echo $data['title'] ?></p>
				<p class="main-cartCol"><?PHP echo $data['sum'] ?></p>
				<input class="main-cartCol" type="text" id="good_<?PHP echo $data['id_good'] ?>" type="number" value="<?PHP echo $data['count'] ?>">
			<?PHP 
				if(!isset($_SESSION['order'])){ ?>
					<a 
						class="main-cartCol" 
						href="#" 
						onclick="save(<?PHP echo $data['id_good'] ?>)"
					 >Сохранить</a>
				<?PHP } ?>
			</div>
		<?PHP } ?> 
	</div>
</div>