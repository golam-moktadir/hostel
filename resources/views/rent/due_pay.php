<?php include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Admin\Rent\Rent;

$gov = new Rent();

$gov->set($_GET);
$rent_data = $gov->details();
$total_fee = $gov->single_fetch();
?>
<div id="page-wrapper">  
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color: #2559ee">Due Payment Process</h3>
                <hr />
            </div>
        </div>
         <form action="view/admin/rent/store_due_pay.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label for="">Total Month Fee:<font color="red" size="4"></font> </label>
                        <p><?php echo $total_fee['total_fee']?></p> 
                        <input type="hidden" name="id" value="<?php echo $rent_data['unique_id'] ?>">
                        <input type="hidden" name="total_fee" value="<?php echo $total_fee['total_fee'] ?>">
                        <input type="hidden" name="month_fee" value="<?php echo $rent_data['month_fee'] ?>"> 
                    </div>                                                        
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="form-group">
                        <label for="">Due Taka:<font color="red" size="4"></font> </label>
                        <p><?php echo $rent_data['due']?></p>     
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="form-group">
                        <label for="">Pay Due Taka:<font color="red" size="4"></font> </label> 
                        <input type="text" class="form-control" name="pay" placeholder="Pay Due Taka" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </div>
          </form>                       
         </div>
<?php  include '../includes/control_footer.php' ?>

