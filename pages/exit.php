<?PHP
	session_destroy();
	$_SESSION = null;
	header("Location: index.php");
?>