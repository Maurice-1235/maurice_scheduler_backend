<?php
include "include.php";

$database->insert("subjects", [
	"name" => $_POST['subject'],
]);
?>