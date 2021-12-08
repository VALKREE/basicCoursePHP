<?PHP
	session_start();
	if(isset($_GET['exit']))
	{
	    session_destroy();
	    header("Location: {$_SERVER['HTTP_REFERER']}");
	    exit;
	}
?>