<?php 
include_once '../includes/control_header.php'; 
include_once '../../../vendor/autoload.php';
use App\Front\Volunteer\Volunteer;

$gov = new Volunteer();
$id = $gov->set($_GET);
$data = $gov->details($id);
?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
 <div class="container-fluid">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
     <div id="myTabContent" class="tab-content custom-product-edit">
      <div class="product-tab-list tab-pane fade active in" id="description">
       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="review-content-section">
            <form action="view/front/volunteer/update_volunteer.php" method="post" enctype="multipart/form-data">

                <h3 class="text-center" style="color: #2559ee">Edit Volunteer Information</h3>
                <hr />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $data['unique_id'] ?>">
                            <label for="">Volunteer Name : <font color="red" size="4">*</font> </label>
                            <input type="text" name="volunteer_name" class="form-control" value="<?php echo $data['volunteer_name']?>" id="" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class Name : <font color="red" size="4">*</font> </label>
                            <select name="class_name" class="form-control" required>
                              <option value="">--Select Class--</option>
                              <?php
                                for($i = 1; $i <= 12; $i++){
                              ?>
                              <option value="<?php echo $i ?>" <?php if($data['class_name'] == $i) echo "selected" ?>><?php echo $i ?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Section :<font color="red" size="4">*</font> </label>
                           <select name="section" class="form-control" required>
                              <option value="">--Section--</option>
                              <option value="A" <?php if($data['section'] == 'A') echo "selected" ?>>A</option>
                              <option value="B" <?php if($data['section'] == 'B') echo "selected" ?>>B</option>
                              <option value="C" <?php if($data['section'] == 'C') echo "selected" ?>>C</option>
                              <option value="D" <?php if($data['section'] == 'D') echo "selected" ?>>D</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Class Roll :<font color="red" size="4">*</font> </label>
                           <input type="text" name="class_roll" class="form-control" value="<?php echo $data['class_roll'] ?>" required>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""> Image :<font color="red" size="4"></font> </label>
                            <img src="view/front/uploads/volunteer/<?php echo $data['image']?>" width="100" height="100">
                            <input type='file' id="image" name="image"  onchange="readURL(this);" /><br>
                            <img id="blah" src="#" alt=" " />
                        </div>
                    </div>
                </div>
             
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" id="">
                </div>
            </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<?php  include '../includes/control_footer.php' ?>

