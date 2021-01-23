<?php
include "../includes/config.php";

$database->insert("subjects", [
	"name" => $_POST['name'],
]);
?>
