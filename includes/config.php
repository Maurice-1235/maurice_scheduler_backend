<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: Content-Type, origin");

// respond to preflights
// if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
//     // return only the headers and not the content
//     // only allow CORS if we're doing a GET - i.e. no saving for now.
//     if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']) &&
//         $_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'] == 'GET') {
//       header('Access-Control-Allow-Origin: *');
//       header('Access-Control-Allow-Headers: X-Requested-With');
//     }
//     exit;
//   }
require  '../lib/Medoo.php';
// Using Medoo namespace
use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'maurice_scheduler',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
 
	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => false,
]);
?>