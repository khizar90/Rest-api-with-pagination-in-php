<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Orgin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Header: Acess-Control-Allow-Header,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');

include 'config.php';
$insert = new Student ();
$insert->deleteid();
























// $data = json_decode(file_get_contents("php://input"),true);
// $student_id = $data['sid'];
// $sql = "DELETE FROM students  WHERE id={$student_id}";


// if(mysqli_query($conn,$sql)){
//     echo json_encode(array('message' => 'record delete', 'status'=>true));
// }else{
//     echo json_encode(array('message' => 'reound not delete', 'status'=>false));

// }
?>
