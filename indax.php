<?php

require "vendor/autoload.php";

$client = "mongodb://localhost:27017";
$friends = $client->mydb->friends;
$result = $friends->find(array());

$data = iterator_to_array($result);
var_dump($data);

?>

<html>
</html>
