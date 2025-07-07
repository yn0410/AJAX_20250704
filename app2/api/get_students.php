<?php include_once 'db.php';

$classroom=$_GET['classroom']??'101';

$students=$Stu->all(['classroom'=>$classroom]);


header('Content-type: application/json; charset=utf-8;');
echo json_encode($students);

?>