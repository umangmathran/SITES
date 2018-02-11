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
<?php
    echo "Ravibhushan Kumar<br/>";
    $arr=array();
    array_push($arr,1);
    array_push($arr,1);

    for ($i=2; $i<50 ; $i++) {
        $arr[$i]=$arr[$i-1]+$arr[$i-2];
        echo $arr[$i]."<br/>";
    }
    function func($a)
    {
        if($a==1){
            return 1;
        }

        if($a==2){
            return 1;
        }
        return func($a-1)+func($a-2);
    }

    echo func(15)
?>
</div>
</body>
</html>


