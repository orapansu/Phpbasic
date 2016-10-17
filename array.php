<?php

//$car=array("toyota","honda","izuzu");
$car = ["toyota","honda","izuzu"];
print_r($car);
echo'<hr>';

$count_car= count($car);


for($x=0;$x<$count_car;$x++){
 echo$car[$x],'<hr>';   
}
