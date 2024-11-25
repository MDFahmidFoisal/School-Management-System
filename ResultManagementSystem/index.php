<?php 
$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$city = $_POST['city'];
$blood = $_POST['blood'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$email = $_POST['email'];
$number = $_POST['number'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$con->connect_error);

}else{
	$stmt = $conn->prepare("insert into StudentRegistration(id,firstName,lastName,gender,date,city,blood,dept,year,email,number)
	values(?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("isssssssisi",$id,$firstName,$lastName,$gender,$date,$city,$blood,$dept,$year,$email,$number);
	$stmt->execute();
	echo "Registration Successfully";
	$stmt->close();
	$conn->close();
}


?>