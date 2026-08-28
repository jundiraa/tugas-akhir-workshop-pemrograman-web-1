<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="shopping_cart";
    
    $kon = mysqli_connect($host,$user,$password,$db);
    if (!$kon){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>


$server="localhost";
$user="merch";
$password="";
$db="merch";
//connect to mysql
mysqli_connect($server, $user, $password) or die("Sorry, can't connect to the mysql.");
//connect to db
mysql_select_db($db) or die("Sorry, can't select the database.");

/* 

INSERT INTO `collection` (`id_collection`, `name`, `description`, `price`) VALUES (NULL, 'Product 1', '11243', '15');
INSERT INTO `collection` (`id_collection`, `name`, `description`, `price`) VALUES (NULL, 'Product 1', 'Something about product', '15');
INSERT INTO `collection` (`id_collection`, `name`, `description`, `price`) VALUES (NULL, 'Product 1', 'Something about product', '15');

*/