<?php




$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$middle_name = $_POST['mname'];
$gen = $_POST['gender'];
$date = $_POST['bdate'];
$ml = $_POST['mail'];
$ps = $_POST['pass'];
$mno = $_POST['mnum'];
$spor = $_POST['sport'];
$addr= $_POST['address'];
$conn = new mysqli('localhost','root','', 'record');

if ($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}


$sql="INSERT INTO table1(firstname, middlename,lastname,gender,birthdate,email,password,mobile,sport,address) VALUES ('$first_name','$middle_name','$last_name','$gen','$date','$ml','$ps','$mno','$spor','$addr')";

if (mysqli_query($conn, $sql)) {
  echo "registration successful";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


  
?>