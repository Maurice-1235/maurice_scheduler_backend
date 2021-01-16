<?php
include "include.php";

print_r($_POST);

$database->insert("subjects", [
	"name" => $_POST['name'],
]);
?>
