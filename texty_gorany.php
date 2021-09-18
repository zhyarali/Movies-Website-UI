<?php 
include'header.php';
 ?>




<div class="container-fluid top-card" style="margin-top: 150px;margin-bottom: 80px;">

<div class="section-title">
    <h2>تێکستی گۆرانی</h2>
  </div>

  <div class="row  justify-content-center row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >
  <?php for ($i=0; $i <10 ; $i++) { ?>
    <div class="col mb-4">
    <a href="texty_gorany_detail.php" style="text-decoration: none;">
              <div class="card border-0">
                <div class="card-body">
                  <center>
                    <h6 class="card-title text-center text-color" dir="rtl"
                      style="line-height:1.6;height:35px;text-overflow:clip;overflow: hidden;font-weight:unset  ">بێ تۆیی</h6>
                      <p></p>
                      <h6 class="text-warning " style="font-size: 12px;">"هەردی سەلامی"</h6>
                      <p></p>
                      <a href="texty_gorany_detail.php" class="btn btn-gradient-blue btn-sm radius-10 mt-2" style="zoom:80%">زیاتر ببینە</a>
                      <p></p>
                  </center>
                  
                </div>
              </div>
            </a>
    </div>
  <?php } ?>

  </div>



  <div class="row text-center d-flex justify-content-center mt-5">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>

  </div>



<?php 
include'footer.php';
 ?>
