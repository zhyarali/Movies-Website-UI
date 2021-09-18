<?php 
include'header.php';
 ?>




<div class="container-fluid top-card wtar" style="margin-top: 150px;margin-bottom: 80px;">


  <div class="row  justify-content-center row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >
  <?php for ($i=0; $i <10 ; $i++) { ?>
    <div class="col mb-4">
    <a href="view_wtar.php" style="text-decoration: none;">
              <div class="card border-0">
                <div class="card-header">
                  <img class="card-img" height="260"
                    src="https://images.unsplash.com/photo-1517596107285-5ce3dd0f61df?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Card image">
                </div>
                <div class="card-body">
                  <center>
                    <h6 class="card-title text-center text-color" dir="rtl"
                      style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;font-weight:500">فەلسەفەی ئەخلاق</h6>
                    <p class="mt-3" style="font-size:13px">سیروان ئەمین</p>
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
