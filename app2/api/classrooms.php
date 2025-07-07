<?php include_once "db.php";

$sql="select classroom from students group by classroom";
$classrooms=q($sql);


header('Content-type: application/json; charset=utf-8;');
echo json_encode($classrooms);
?>