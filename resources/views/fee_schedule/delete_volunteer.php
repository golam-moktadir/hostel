<?php 
include_once '../../../vendor/autoload.php';
use App\Front\Volunteer\Volunteer;

$gov = new Volunteer();

$data = $gov->set($_GET);
$gov->delete($data);
?>