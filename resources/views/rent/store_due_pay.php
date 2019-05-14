<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Rent\Rent;

$gov = new Rent();

if($_POST['total_fee'] == $_POST['month_fee'] + $_POST['pay']){
	$_POST['month_fee'] = $_POST['month_fee'] + $_POST['pay'];
	$_POST['due'] = 'No due';
}
else{ 
	$_POST['month_fee'] = $_POST['month_fee'] + $_POST['pay'];
	$_POST['due'] = $_POST['total_fee'] - $_POST['month_fee'];
}
$gov->set($_POST);
$gov->due_update();

?>