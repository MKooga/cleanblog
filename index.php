<?php

$page_load_start = microtime(1);

require 'include/database.php';

$page=empty($_GET{'page'}) && file_exists("pages/page.php") ? $_GET['page'] : 'home' ;




require "templates/master_template.php";

echo "Lehte laaditi ". round(microtime(1)- $page_load_start, 4). " sekundit";