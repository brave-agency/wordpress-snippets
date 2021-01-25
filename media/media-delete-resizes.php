<?php 

$directory = new RecursiveDirectoryIterator(__DIR__);
$flattened = new RecursiveIteratorIterator($directory);

$files     = new RegexIterator($flattened, "/(-\d+x\d+).*/");

foreach($files as $file) {
	// Uncomment this line to cause the mayhem
	// unlink($file);
    echo $file . PHP_EOL . '<br>';
}

echo 'Done';

exit();
