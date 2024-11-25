<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$level = $_POST['level'];
$term = $_POST['term'];
$gpa = $_POST['gpa'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$con->connect_error);

}else{
	$stmt = $conn->prepare("insert into StudentResult(id,name,dept,level,term,gpa)
	values(?,?,?,?,?,?)");
	$stmt->bind_param("issiii",$id,$name,$dept,$level,$term,$gpa);
	$stmt->execute();
	echo "Result Input Successfully";
	$stmt->close();
	$conn->close();
}


?>