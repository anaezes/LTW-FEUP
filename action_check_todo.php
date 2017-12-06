<?php
include_once('includes/init.php');
include_once('database/to_dos.php');


$td_id = $_POST['dateofactivity'];
$check_value= $_POST['check'];

echo $check_value;

if(!changeCheckTodo($td_id, $check_value)) {
}

header('location:index.php');
exit();

?>