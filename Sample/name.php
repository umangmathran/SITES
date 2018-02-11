<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Database Operations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php include 'header.php';
    ?>
    <div class='jumbotron text-center'>
    <h1>Database Operation</h1>
    </div>

    <div class="container">
        <table class="table table-hover">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
            <?php
            //Fetching the Mysql Data
               //fetch_data();

               function testfun(){
                echo "Your function click is working.";
                /*
                $host="127.0.0.1";
                $username="root";
                $pass="Ravi@8603";
                $db="practice";
            
                $conn=new mysqli($host,$username,$pass,$db);
                $query="delete from name where firstname='Ram'";
                $result =$conn->query($query);
                if(!$result){
                    echo "Error in updation";
                }else{
                    echo "Successfully Updated";
                }
                //$result->close();
                $conn->close();
                */
               }

                $host="127.0.0.1";
                $username="root";
                $pass="Ravi@8603";
                $db="practice";

                $conn=new mysqli($host,$username,$pass,$db);
                $query="select * from name";
                $result =$conn->query($query);
                while($data=$result->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$data['firstname']."</td>";
                    echo "<td>".$data['lastname']."</td>";
                    echo "<td>".$data['age']."</td>";
                    echo '<td><button type="button" class="btn btn-default" onclick="<?php testfun(); ?>">Delete</button></td>';
                }
                $result->close();
                $conn->close();
            ?>
        </table>
    </div>

    <!--Adding New data-->
    <form action="name.php" method='POST'>
    <div class="container">
            <table class="table table-hover">
                <tr>
                    <td><label>First Name</label></td>
                    <td><input type='textbox' name='firstname'/></td>
                    
                </tr>
                <tr>
                    <td><label>Last Name</label></td>
                    <td><input type='textbox' name='lastname'/></td>
                </tr>
                <tr>
                    <td><label>Age</label></td>
                    <td><input type='textbox' name='age'/></td>
                </tr>
                <tr>
                    <td><input type='submit' name='Submit' class='btn'/></td>
            
                </tr>
            </table>
    </div>
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
    </form>
</body>
</html>