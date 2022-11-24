<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Orgin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Header: Acess-Control-Allow-Header,Content-Type,Acess-Control-Allow-Methods,Authorization,X-Requested-With');



include 'config.php';
$update = new Student();
$update->updateinto();






















// $data = json_decode(file_get_contents("php://input"),true);
// $id = $data['sid'];
// $student_name = $data['fname'];
// $student_email = $data['email'];
// $student_phone = $data['sphone'];
// $student_course = $data['scourse'];


// $sql = "UPDATE  students set fullname='{$student_name}', email='{$student_email}', phone='{$student_phone}', course='{$student_course}' WHERE id='{$id}'";


// if(mysqli_query($conn,$sql)){
//     echo json_encode(array('message' => 'student record updated', 'status'=>true));
// }else{
//     echo json_encode(array('message' => 'no record updates', 'status'=>false));

// }
?>