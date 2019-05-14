<?php 
include_once '../../../vendor/autoload.php';
use App\Admin\Fee_schedule\Fee_schedule;

$gov = new Fee_schedule();

$_POST['total_fee'] = $_POST['seat_range'] + $_POST['wifi'] + $_POST['current'];
/*echo "<pre>";
print_r($_POST);
die;*/
$gov->set($_POST);	
$gov->insert();	

?>