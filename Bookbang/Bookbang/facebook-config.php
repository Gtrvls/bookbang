<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '',           // Replace with your App ID
    'app_secret' => '',   // Replace with your App Secret
    'default_graph_version' => 'v16.0',
]);

$fb_redirect = "http://localhost/Bookbang/facebook-callback.php";

?>
