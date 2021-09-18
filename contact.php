<?php include "header.php"; ?>



<div class="container contact-form bg-comp radius-10 col-lg-4  col-11" style="margin-top: 150px;margin-bottom:100px">
            <form method="post">
                <h5>پەیوەندیمان پێوە بکە</h5>
               <div class="row" dir="rtl">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="ناوت بنووسە" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="ئیمیڵەکەت بنووسە" value="" />
                        </div>

                        <div class="form-group">
                            <textarea  class="form-control" placeholder="پەیامەکەت بنووسە" style="width: 100%; height: 150px;"></textarea>
                        </div>

                         
                       <center> 
                        <div class="form-group ">
                            <button type="submit" class="btn btn-gradient-blue radius-10 btn-sm" style="padding: 5px 20px;">ناردن</button>
                        </div>
                        </center>

                    </div>
                  
                </div>
            </form>
</div>




<?php include "footer.php"; ?>