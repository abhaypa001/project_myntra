<?php


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['number'];
$password = $_POST['password'];
//database

$conn = new mysqli('localhost','root','','signup');
if($conn->connect_error)
{die('Connection Failed : ' .$conn->connect_error);

}
else{
    $sql = "Select * From signup where mobile = $mobile";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count>0){
        header("location: profile.html");
    }
    else{
    $stmt = $conn->prepare("insert into signup(mobile,password,name,email)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$mobile,$password,$name,$email);
    $stmt->execute();
    header("location: index.html");
    }
    $stmt->close();
    $conn->close();
}

?>
