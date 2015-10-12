<?php
require "config.php";
$db = mysqli_connect('DATABASE_HOSTNAME','','DATABASE_DATABASE') or die(mysqli_error($db));

mysqli_query($db, "SET NAMES 'utf8");