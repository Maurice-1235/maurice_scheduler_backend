<?php
include "include.php";

$database->insert("assignments", [
	"name" => $_POST['subject_id'],
	"title" => $_POST['title'],
	"detail" => $_POST['detail'],
	"due_date" => $_POST['due_date'],
	"score" => $_POST['score'],
]);

?>