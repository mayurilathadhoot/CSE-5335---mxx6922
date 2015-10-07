<?php
header('Content-Type: application/javascript;');

if (isset($_GET['isbn'])) {
	$isbn=gethostbyname($_GET['isbn']);
	$page = (file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:".$isbn));
	print_r($page);
}
else{
	$page = file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:0312581386");
	print_r ($page);

	}
?>

	