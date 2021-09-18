<?php 
include'header.php';
 ?>




<div class="container-fluid top-card" style="margin-top: 150px;margin-bottom: 80px;">
<div class="row text-center d-flex justify-content-center mt-3">
      <!-- Example single danger button -->
      <div class="btn-group mb-5">
        <button type="button" class="btn btn-gradient-blue dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          ژانەرەکان
        </button>
        <div class="dropdown-menu dropdown-zhanar">
          <a class="dropdown-item" href="#">کۆمیدی</a>
          <a class="dropdown-item" href="#">ئەکشن</a>
          <a class="dropdown-item" href="#">ترسناک</a>
          <a class="dropdown-item" href="#">درامی</a>
          <a class="dropdown-item" href="#">ڕۆمانسی</a>
        </div>
      </div>
    </div>

  <div class="row  justify-content-center row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >
  <?php for ($i=0; $i <10 ; $i++) { ?>
    <div class="col mb-4">
    <a href="view_film_online.php" style="text-decoration: none;">
              <div class="card border-0">
                <div class="card-header">
                <span class="show-movie bg-gradient-blue"><i class="bx bx-show"></i><span>101,100</span></span>
                  <img class="card-img" height="260"
                    src="https://kurdsubtitle.net/uploads/images/1618954988975662231284.jpg" alt="Card image">
                  <a href="view_film_online.php" class="venobox play-btn mb-4"></a>
                </div>
                <div class="card-body">
                  <center>
                    <h6 class="card-title text-center text-color" dir="rtl"
                      style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"> Scooby-Doo! Curse Of The Lake Monster</h6>
                  </center>
                  <div class="container mt-4">
                    <div class="row">
                      <div class="col-12 metadata ">
                        <i class="bx bxs-star" aria-hidden="true"></i>
                        <p>9.5/10</p>
                        <p class="float-right">2020</p>
                      </div>

                    </div>
                  </div>
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
