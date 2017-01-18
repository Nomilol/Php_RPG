<?php

require 'client.php';

$user1 = new Client("1", "machin@gmail.com", "18/01/2017");
$user2 = new Client("2", "deuxiemeMachin@gmail.com", "18/01/2017");

$myArray = [
	$user1,
	$user2
];

return $myArray;
