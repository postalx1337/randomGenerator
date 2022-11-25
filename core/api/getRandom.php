<?
header("Content-type: application/json; charset=utf-8");

$range = array('from'=>(int)$_GET['from'], 'to'=>(int)$_GET['to']);
$count = (int)$_GET['count'];

$resultArray = array();
$errors = array();

if(!is_int($range['from']) || !is_int($range['to']) || !is_int($count)){
    $resultArray["Error"] = "Invalid values (Values must be Interger!)";
    die(); 
}

for($i=0; $i <= $count-1; $i++){
    array_push($resultArray, rand($range['from'], $range['to']));
}

echo json_encode($resultArray);
?>