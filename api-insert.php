<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Orgin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Header: Access-Control-Allow-Header,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');


include 'config.php';
$insert = new Student();
$insert->InsertInto();






























// $data = json_decode(file_get_contents("php://input"),true);
// $student_name = $data['fname'];
// $student_email = $data['email'];
// $student_phone = $data['sphone'];
// $student_course = $data['scourse'];
// $sql = "INSERT INTO students(fullname, email, phone, course) VALUES ('{$student_name}','{$student_email}','{$student_phone}','{$student_course}')";


// if(mysqli_query($conn,$sql)){
//     echo json_encode(array('message' => 'student record insert', 'status'=>true));
// }else{
//     echo json_encode(array('message' => 'no record inserted', 'status'=>false));

// }
?>