<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Rent\Rent;

$gov = new Rent();
$due = $_POST['total_fee'] - $_POST['month_fee'];

if($due <= 0)
$_POST['due'] = 'No due';
else 
$_POST['due'] = $due;
$gov->set($_POST);
$gov->update();

?>