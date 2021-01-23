<?php
include "../includes/config.php";
$datas = $database->select("subjects", [
  "id",
	"name",
]);
echo json_encode($datas);
?>
