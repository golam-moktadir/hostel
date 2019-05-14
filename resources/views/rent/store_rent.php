<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Rent\Rent;

$gov = new Rent();

$data = $gov->single_fetch();
$due = $data['total_fee'] - $_POST['month_fee'];

if($due <= 0)
$_POST['due'] = 'No due';
else 
$_POST['due'] = $due;
$gov->set($_POST);	
$gov->insert();	

?>