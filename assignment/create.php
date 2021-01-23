<?php
include "../includes/config.php";

$database->insert("assignments", [
	"subject_id" => $_POST['subject_id'],
	"title" => $_POST['title'],
	"detail" => $_POST['detail'],
	"due_date" => $_POST['due_date'],
	"score" => $_POST['score'],
]);

?>