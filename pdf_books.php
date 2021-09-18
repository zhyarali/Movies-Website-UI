<?php 
include'header.php';
 ?>


 <!-- ======= Hero No Slider Section ======= -->
 <section id="books-hero" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-xl-8 order-lg-2 order-sm-1 text-content order-md-1">
          <h2> pdf کتێبی</h2>
            <a href="#books" class="btn btn-gradient-blue radius-10 shadow mt-4" title="گرتە بکە">کتێبەکان ببینە</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->



  <div class="container-fluid top-card sound_book" id="books" style="margin-top: 50px;margin-bottom: 80px;" >

    <div class="section-title">
        <h2>pdf کتێبی</h2>
    </div>

    <div class="row text-center d-flex justify-content-center mt-3">
      <!-- Example single danger button -->
      <div class="btn-group mb-5">
        <button type="button" class="btn btn-gradient-blue dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          جۆری کتێب
        </button>
        <div class="dropdown-menu dropdown-zhanar">
          <a class="dropdown-item" href="#">کوردی</a>
          <a class="dropdown-item" href="#">ئینگلیزی</a>
          <a class="dropdown-item" href="#">ڕۆمان</a>
          <a class="dropdown-item" href="#">کورتە چیرۆک</a>
        </div>
      </div>
    </div>
  
  <div class="row  justify-content-center row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" >
  <?php 
for ($i=0; $i <10 ; $i++) { ?>   
    <div class="col mb-4">
    <a href="view_books.php" style="text-decoration: none;">
          <div class="card border-0">
            <div class="card-header">
              <img class="card-img" height="280"
                src="assets/img/sound_book.jpg" alt="Card image">
            </div>
            <div class="card-body">
              <center class="mb-1">
                <h6 class="card-title text-center text-color " dir="ltr"
                  style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">pdf کتێبی </h6>
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
