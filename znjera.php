<?php 
include'header.php';
 ?>




    <div class="container-fluid  znjera_page mb-5" style="margin-top: 120px;">

        <div class="row text-center d-flex justify-content-center mt-3">
            <!-- Example single danger button -->
            <div class="btn-group mb-5">
                <button type="button" class="btn btn-gradient-blue dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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


    <div class="row   row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >

            <?php 
for ($i=0; $i <10 ; $i++) { ?>
            <div class="col " style="padding: 10px;">

                <a href="view_znjera.php" style="text-decoration: none;">
                    <div class="card border-0">
                        <div class="card-header">

                            <img class="card-img " style="border-radius:25px;padding:15px 15px 0px 15px" height="260"
                                src="https://kurdsubtitle.net/uploads/images/1616356937285931813986.jpg"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <center>
                                <h6 class="card-title text-center text-color" dir="rtl"
                                    style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">بێ باوەڕ</h6>
                            </center>

                            <div class="container ">
                                <div class="row">
                                    <div class="col-12 metadata ">
                                        <i class="bx bxs-star" aria-hidden="true"></i>
                                        <p>9.5/10</p>
                                        <p class="float-right">2017</p>
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









    <!-- Footer -->
    <?php 
include'footer.php';
 ?>
