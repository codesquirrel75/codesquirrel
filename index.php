<?php
$content = '';
$url = $_SERVER['REQUEST_URI'];

if($url == '/codesquirrel/' or $url == '/codesquirrel/home')
{
	$content = 'content.php';
}
else
{
	$s = explode("/", $url);
	$content = $s[2] . ".php";
	 
}

	include "header.php";
	include $content;  
	include "footer.php";
?>