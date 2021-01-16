<?php
include "include.php";
$datas = $database->select("subjects", [
  "id",
	"name",
]);
echo json_encode($datas);
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "maurice_scheduler";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT subject_id, title, detail, due_date, score, done FROM assignments";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $rows = array();
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//   }
// } else {
//   echo "0 results";
// }

// print json_encode($rows);
// $conn->close();
?>
