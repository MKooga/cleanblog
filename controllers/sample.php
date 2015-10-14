<?php




//require 'include/database.php';

//Retrive data from database

$q = mysqli_query($db,"SELECT *, DATE_FORMAT(post_created, '%d.%m.%Y %H:%i') post_created FROM posts NATURAL JOIN authors
 ORDER BY RAND()
 LIMIT 1");


$post = mysqli_fetch_assoc($q);
$page= 'post';
?>