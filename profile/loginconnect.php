<?php

$mobile = $_POST['number'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','signup');
if($conn->connect_error)
{die('Connection Failed : ' .$conn->connect_error);

}
else{
    $sql = "Select * From signup where mobile = $mobile ";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    if($count>0){
        $sql = "Select * From signup where mobile = '$mobile' AND password = '$password'"  ;
        $result2 = mysqli_query($conn,$sql);
        $count2 = mysqli_num_rows($result2);
        if($count2>0)
                        { echo "login successful";}
        else{echo "wrong password ";};                
       
    }
    else{
        header("location: signup.html");
    
   }
   //$stmt->close();
   $conn->close();
}


?>

