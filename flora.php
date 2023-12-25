<?php 
$name = $_post['name'];
$email = $_post['email'];
$password = $_post['password'];
$message = $_post['message'];

$conn = mysqli('localhost','root','','flora');
if($conn->connect_error)
{
    echo"$conn->connect_error";
    die("Connection Failed : ".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into contacts(name, email, password, message)values(?, ?, ?, ?)");
    $stmt->blind_param("ssss", $name, $email, $password, $message);
    $exceval= $stmt->execute();
    echo $exceval;
    echo "successfully";
    $stmt->close;
    $conn->close;

}

 ?>
 