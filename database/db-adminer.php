<?php

$filename = 'CHANGEME';

/* Create */
$file       = fopen($_SERVER['DOCUMENT_ROOT'] . "/" . $filename . ".php", "w");
$content    = file_get_contents('https://www.adminer.org/latest-mysql-en.php');
fwrite($file, $content);
fclose($file);
	
/* Remove */
// unlink($_SERVER['DOCUMENT_ROOT'] . "/" . $filename . ".php");

?>
