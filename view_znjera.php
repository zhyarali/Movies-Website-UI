<?php 
include'header.php';
 ?>



  <div class="container detail-container" style="margin-top: 114px;">
    <div class="col-12 col-lg-12 col-md-12 mb-4  film_detail">
      <div class="card border-0 bg-comp radius-10 m-3" dir="rtl">
        <div class="card-body d-flex">
          <div class="col-lg-4">
            <center><img class="radius-10" src="https://kurdsubtitle.net/uploads/images/1616356937285931813986.jpg"
                alt="" width="200"></center>
          </div>

          <div class="col-lg-8 film-content" style="align-self: center;margin-right:12px;text-align: right;">
            <p class="text-right text-color" style="font-size: 10px;">
              <h6><span style="color:#f8ad0c"> زنجیرە فیلمی :</span> بێ باوەڕ</h6>
              <h6 class="film-short-detail" style="line-height: 1.8;">زنجیرەی وێب دوای گەشتی ڕۆژنامەوانێك دەکەوێت، کە
                بەدوای دادپەروەری دەگەڕێت بۆ چەکدارێکی بانگەشەکراو زنجیرەی وێب دوای گەشتی ڕۆژنامەوانێك دەکەوێت، کە
                بەدوای دادپەروەری دەگەڕێت بۆ چەکدارێکی بانگەشەکراوزنجیرەی وێب دوای گەشتی ڕۆژنامەوانێك دەکەوێت، کە بەدوای
                دادپەروەری دەگەڕێت بۆ چەکدارێکی بانگەشەکراو</h6>
              <h6><span style="color:#f8ad0c">ژانەر :</span> تراژیدی , کۆمیدی</h6>
              <h6><span style="color:#f8ad0c">ژمارەی ئەڵقەکان :</span> 4</h6>
              <h6><span style="color:#f8ad0c">هەڵسەنگاندن :</span> 9/10 <i class="bx bxs-star text-warning"
                  aria-hidden="true"></i>
              </h6>
              <h6><span style="color:#f8ad0c">کات :</span> 120 خولەک</h6>

              <h6><span style="color:#f8ad0c">وەرگێران :</span>ژیار علی</h6>
              <h6><span style="color:#f8ad0c">پێداچونەوە :</span>سیروان محمد</h6>





              <div class="d-flex" style="margin-top: 40px;">
                <a href="#" data-toggle="modal" data-target="#znjera_trailer"
                  class="btn btn-gradient-blue radius-10  mt-4 m-auto"> تڕایلەر</a>
              </div>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

 
   <!-- allqakan -->

   <div class="container mt-5 top-card">

<div class="section-title">
  <h2>ئەڵقەکان</h2>
</div>
</div> 

  
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel  top-card" >

  <?php for ($i=1; $i <5 ; $i++) { ?>

    <div class="col mb-4 item">
<a href="view_znjera_online.php" style="text-decoration: none;">
      <div class="card border-0">
        <div class="card-header">
        <span class="number bg-gradient-blue"><span><?php echo $i; ?></span></span>
          <img class="card-img" height="300"
            src="https://kurdsubtitle.net/uploads/images/1616356937285931813986.jpg" alt="Card image">
          <a href="view_znjera_online.php" class="venobox play-btn mb-4"></a>
        </div>
      </div>
    </a>
</div>
      
   <?php }?>

</div>

</div>

  <!-- end allqakan -->



   <!-- ranan -->

   <div class="container detail-container">
    <div class="col-12 col-lg-12 col-md-12 mb-4 view-oline top-card">
      <div class="card border-0  radius-10 m-3 p-4 text-light" style="background: transparent !important;" dir="rtl">

        <center>
          <div class="section-title">
            <h2>ڕانان لە زنجیرە</h2>
          </div>
          <form action="#" class="col-lg-5 col-md-8 col-11" method="post">
            <div class="form-group">
              <label for="" class="float-right">ناو</label>
              <input type="text" class="form-control input-new" placeholder="ناوت بنوسە" name="" id=""
                aria-describedby="helpId" placeholder="">
            </div>

            <div class="form-group">
              <label for="" class="float-right">کۆمێنت</label>
              <textarea class="form-control input-textarea" placeholder="ئەم زنجیرە هەڵبسەنگێنە ؟" name="" id=""
                rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-gradient-blue radius-10">دانان</button>


          </form>

        </center>

      </div>

    </div>
  </div>


  <!-- end ranan -->



  <!-- felma hawshewakan -->

  <div class="container mt-5 top-card">

<div class="section-title">
  <h2>زنجیرە هاوشێوەکان</h2>
</div>
</div> 

  
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel mt-3s top-card" >

  <?php for ($i=0; $i <8 ; $i++) { ?>

    <div class="col mb-4 item">
<a href="#" style="text-decoration: none;">
      <div class="card border-0">
        <div class="card-header">
        <span class="show-movie bg-gradient-blue"><i class="bx bx-show"></i><span>101,100</span></span>
          <img class="card-img" height="260"
            src="https://kurdsubtitle.net/uploads/images/1618158610580555821189.jpg" alt="Card image">
          <a href="#" class="venobox play-btn mb-4"></a>
        </div>
        <div class="card-body">
          <center>
            <h6 class="card-title text-center text-color" dir="rtl"
              style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">شێتی</h6>
          </center>
          <div class="container mt-4">
            <div class="row">
              <div class="col-12 metadata ">
                <i class="bx bxs-star" aria-hidden="true"></i>
                <p>10/10</p>
                <p class="float-right">2017</p>
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

  <!--  end  -->

  <div class="modal fade modal-trailer" id="znjera_trailer" tabindex="-1" aria-labelledby="trailer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered radius-15 shadow" dir="rtl">
      <div class="modal-content col-12">
        <div class="modal-body">
          <iframe width="100%" class="radius-10" height="315" src="https://www.youtube.com/embed/CX6919p4SOI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>
  <!-- Footer -->
 <?php 
include'footer.php';
 ?>
