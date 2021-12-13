<main class="main center">
	<?PHP
		switch($_GET['page']){
			case 'register':
				include "pages/register.php";
				break;
			case 'auth':
				include "pages/auth.php";
				break;
			case 'profile':
				include "pages/profile.php";
				break;
			case 'about':
				include "pages/about.php";
				break;
			case 'form':
				include "pages/form.php";
				break;
			case 'gallery':
				include "pages/gallery.php";
				break;
			case 'add_good':
				include "pages/add_good.php";
				break;
			case 'edit_good':
				include "pages/edit_good.php";
				break;
			case 'catalog':
				include "pages/catalog.php";
				break;
			case 'details_order':
				include "pages/details_order.php";
				break;
			case 'cart':
				include "pages/cart.php";
				break;
			case 'edit_order':
				include "pages/edit_order.php";
				break;
			case 'exit':
				include "pages/exit.php";
				break;
			default:
				include "pages/main.php";
		}
	?>
</main>