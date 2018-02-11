<?php
    $host="127.0.0.1";
    $username="root";
    $pass="Ravi@8603";
    $db="practice";

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];

    $conn=new mysqli($host,$username,$pass,$db);
    $query="insert into name values('$firstname','$lastname',$age)";
    $result =$conn->query($query);
    if(!$result){
        echo "Error in updation";
    }else{
        echo "Successfully Updated";
    }
    //$result->close();
    $conn->close();


?>