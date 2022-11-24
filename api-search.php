<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Orgin: *');

include 'config.php';
$search = new Student();
$search->searchfor();

























// $data = json_decode(file_get_contents("php://input"),true);
// $search_value = $data['value'];
// $search_value = isset($_GET['value'])  ? $_GET['value'] : die();

// $sql = "SELECT * FROM students  WHERE fullname like '%{$search_value}%'";
// $result = mysqli_query($conn,$sql) or die("query failed");


// if(mysqli_num_rows($result) > 0){
//     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
//     echo json_encode($output);
// }else{
//     echo json_encode(array('message' => 'no search result found ', 'status'=>false));

// }
?>
