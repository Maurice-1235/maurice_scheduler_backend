<?php
include "../includes/config.php";

$datas = $database->select("assignments", 
[
    "[>]subjects" => ["subject_id" => "id"],
],
[
    "assignments.id",
    "subjects.name",
	"assignments.subject_id",
	"assignments.title",
	"assignments.detail",
	"assignments.due_date",
	"assignments.score",
	"assignments.done",
]);
echo json_encode($datas);
?>
