<?php
$result = array();
for($i=1;$i<=rand(11,20);$i++){
    $result[$i]=rand(11,21);
}

$res = array_unique($result);
foreach($res as $r){
    echo $r." ";
}
?>