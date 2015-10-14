<?php

date_default_timezone_set('Europe/Tallinn');

$page_load_start = microtime(1);

require 'include/database.php';

$page=!empty($_GET['page']) ? $_GET['page'] : 'home' ;

if(file_exists("controllers/$page.php")){
    require "controllers/$page.php";
}



require "templates/master_template.php";

echo "Lehte laaditi ". round(microtime(1)- $page_load_start, 4). " sekundit";