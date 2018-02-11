<!DOCTYPE html>
<html lang="en-US">
<!---<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>-->
<script src="/node_modules/angular/angular.min.js"></script>
<body>

<div ng-app="">
  <p>Name : <input type="text" ng-model="name"></p>
  <h1>Hello {{name}}</h1>
</div>
<div>
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
</div>
</body>
</html>


