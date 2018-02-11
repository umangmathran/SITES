<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>My First Bootstrap Page</h1>
         <p>Resize this responsive page to see the effect!</p> 
    </div>

    <table class="table" width="50%">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Depertment Name</td>
            <td>Total Credit</td>
        </tr>
        <?php
            $host="127.0.0.1";
            $userName="root";
            $pass="Ravi@8603";
            $dbName="practice";

            $conn=new mysqli($host,$userName,$pass,$dbName);

            $query="Select * from student";
            $result=$conn->query($query);
            $rows=$result->num_rows;
            /*for($i=0;$i<$rows;$i++){
                $data=$result->fetch_assoc();
                echo "<tr><td>".$data['ID']."</td>";
                echo "<td>".$data['name']."</td>";
                echo "<td>".$data['dept_name']."</td>";
                echo "<td>".$data['tot_cred']."</td></tr>";
            }*/
            while($data=$result->fetch_assoc()){
                echo "<tr><td>".$data['ID']."</td>";
                echo "<td>".$data['name']."</td>";
                echo "<td>".$data['dept_name']."</td>";
                echo "<td>".$data['tot_cred']."</td></tr>";
            }
            $result->close;
            $conn->close;
        ?>
    </table>
</body>
</html>