<?php

$wp_load_loc    = "wp-load.php";
require_once($wp_load_loc);

$user_login     = 'login';
$pas1           = 'password';
$user_email     = 'name@example.com';

$user_id        = wp_create_user( $user_login, $pas1, $user_email );
$user           = new WP_User($user_id);

$user->set_role('administrator');

echo 'done';

exit();