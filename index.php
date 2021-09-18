<!DOCTYPE html>
<html lang="en">

<?php 
include'header.php';
 ?>

  <!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-xl-8 order-lg-2 order-sm-1 text-content order-md-1">
          <h2 class="text-color">بەخێربێی بۆ جیهانی فیلم</h2>
            <p class="mt-5 mb-5 text-color">فیلم - زنجیرە - ئەدەب</p>

           <div class="div search-box">
             
              <input type="text" dir="rtl" class="m-auto p-3 form-control radius-10 col-10 col-lg-5 input-new" style="font-size: 15px;" placeholder="بگەڕێ بۆ فیلم ، زنجیرە ... ">
              <button type="submit" class="btn btn-gradient-blue text-white mt-3 radius-10 shadow">Search</button>
           </div>

        </div>

        <div class="col-lg-4 order-lg-1 align-self-center order-sm-2 hero-image order-md-2">
          <img src="assets/img/movie.svg" width="250" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->


<!-- reklam -->

  <div class="container mt-5">
   
     <div class="col-lg-8 m-auto col-12">
 <a href="#">
        <div class="img radius-10" style="background: linear-gradient(to right, rgba(30, 67, 86, 0.8), rgba(8, 22, 29, 0.712)), url('https://wallpapercave.com/wp/AtZtbfl.jpg') center top no-repeat; background-size: cover !important;width:100%;height:200px">
            <h4 class="text-center text-white" style="transform: translate(0px,70px);">لێرە ڕێکلام بکە</h4>
        </div>
        </a>
       </div>
        
     </div>
 

<!-- end reklam -->






<!-- card post -->

<!-- nwetrrn film -->
  <div class="container mt-5">
  <div class="section-title">
        <h2>نوێترین فیلمەکان</h2>
      </div>
  </div>
<div class="owl-wrapper">
    <div class="container-fluid film-slider owl-carousel  top-card">

    <?php for ($i=0; $i <8 ; $i++) { ?>
        <div class="col mb-4 item">
        <a href="view_film_online.php" style="text-decoration: none;">
              <div class="card border-0">
                <div class="card-header">
                <span class="show-movie bg-gradient-blue"><i class="bx bx-show"></i><span>101,100</span></span>
                  <img class="card-img" height="280"
                    src="https://kurdsubtitle.net/uploads/images/1618954988975662231284.jpg" alt="Card image">
                  <a href="view_film_online.php" class="venobox play-btn mb-4"></a>
                </div>
                <div class="card-body">
                  <center>
                    <h6 class="card-title text-center text-color" dir="rtl"
                      style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">سکوبی دوو نەفرەتی دڕندەی دەریاچەکە</h6>
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

      <div class="row text-center d-flex justify-content-center mt-3" style="transform: translate(10px, 136px);"><a href="#" class="btn btn-gradient-blue text-white btn-sm radius-10"> هەموو فیلمەکان ببینە</a></div>

    </div>
</div>
<!-- end nwetren film -->


<!-- nwetren znjerakan -->

<div class="container" style="margin-top: 80px;">
  <div class="section-title">
    <h2>نوێترین زنجیرەکان</h2>
  </div>

</div>

<div class="owl-wrapper">

  <div class="container-fluid znjera-slider owl-carousel mt-5 " >

  <?php for ($i=0; $i <8 ; $i++) { ?>
      <div class="col mb-4 item znjera">
        <div class="card border-0 bg-comp radius-10 m-3" dir="rtl">
          <div class="card-body d-flex">
                <div class="col-lg-4">
                  <img class="radius-10" src="https://kurdsubtitle.net/uploads/images/1616356937285931813986.jpg" alt="" width="170">
                </div>

                <div class="col-lg-8" style="align-self: center;margin-right:12px;text-align: center;">
                  <p  class="text-right text-color" style="font-size: 10px;">
                    <h6>زنجیرە فیلمی  :  بێ باوەڕ</h6>
                    <h6>ژانەر : تراژیدی</h6>
                    <h6>ژمارەی  فیلمەکان : 4</h6>
                    <h6>هەڵسەنگاندن : 9/10  <i class="bx bxs-star text-warning" aria-hidden="true"></i> 
                    </h6>

                   <div class="d-flex" style="margin-top: 40px;">
                    <a href="view_znjera.php" class="btn btn-gradient-blue radius-10 btn-sm mt-4 m-auto">سەیرکردن</a>
                    <a href="#" data-toggle="modal" data-target="#znjera_trailer" class="btn btn-warning radius-10 btn-sm mt-4 m-auto"> تڕایلەر</a>
                  </div> 
                  </p>
                </div>
          </div>
    </div>

      </div>
    <?php } ?>
  </div>
</div>

<!-- end nwetryn znjerakan -->















<!-- zortren benrawakan -->

<div class="container mt-5 top-card">

  <div class="section-title">
    <h2>زۆرترین بینراوەکان</h2>
  </div>
</div> 

    
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel mt-5 top-card" >

    <?php for ($i=0; $i <8 ; $i++) { ?>

      <div class="col mb-4 item">
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
                      style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">سکوبی دوو نەفرەتی دڕندەی دەریاچەکە</h6>
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
        
     <?php }?>
  
</div>

</div>

<!-- end zortren benrawakan -->

  <main id="main mb-3">
    <!-- ======= Features Section ======= -->
    <section class="features" id="about-us">
      <div class="container">

        <div class="section-title">
          <h2>دەربارەی ئێمە</h2>
          <p class="text-color">
            ئەم ماڵپەڕە تایبەتە بە فیلم و زنجیرە و بابەتی ئەدەبی و  نوێترین فیلم و زنجیرە جیهانیەکان لێرە ببینە
          </p>
        </div>

        <div class="row  ">
          <div class="col-md-5 m-auto">
           <center><img src="assets/img/features-1.svg" class="img-fluid " alt="" width="300"></center> 
          </div>
        </div>

    </section><!-- End Features Section -->

  
  </main><!-- End #main -->










  <div class="modal fade modal-trailer" id="znjera_trailer" tabindex="-1" aria-labelledby="trailer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered radius-15 shadow" dir="rtl">
      <div class="modal-content col-12">
        <div class="modal-body">
          <iframe width="100%" class="radius-10" height="315" src="https://www.youtube.com/embed/CX6919p4SOI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>


<?php 
include'footer.php';
 ?>


 