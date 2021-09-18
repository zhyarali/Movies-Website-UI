<?php 
include'header.php';
 ?>


  <div class="container detail-container" style="margin-top: 114px;">
    <div class="col-12 col-lg-12 col-md-12 mb-4  film_detail">
      <div class="card border-0 bg-comp radius-10 m-3" dir="rtl">
        <div class="card-body d-flex">
          <div class="col-lg-4">
            <center><img class="radius-10" src="https://www.kurdipedia.org/files/photos/2018/145415.JPG?v=51599"
                alt="" width="200"></center>
          </div>

          <div class="col-lg-8 film-content" style="align-self: center;margin-right:12px;text-align: right;">
            <p class="text-right text-color" style="font-size: 10px;">
              <h6><span style="color:#f8ad0c"> کتێبی  :</span>   ١٠ خاڵ خۆزگە پێش چوونە زانکۆ بمزانیایە</h6>

              <h6 class="film-short-detail" style="line-height: 1.8;">
                کاتێک پێدەنێیتە حەرەمی زانکۆوە  ئەوە دەبیتە کەسایەتیەکی نوێ  بە هەموو مانای وشە  ، لەو ڕۆژەدا تۆ خواحافیزیت کردووە
                لە قۆناغێکی درێژی ژیانت کە پڕبوە لە خەونی پەرتەوازە ، ئێستاش پێشوازی لە تەمەنێکی نوێ و  ژیانێکی نوێ دەکەی ،، ئەمڕۆ تۆ کەسێکی تازەیت 
                و بەچەندین بەرپرسیاریەتی  نوێ و تموحی نوێوە ... وە هەمووانیش چاوەڕوانی شتی تازە و نوێ لەتۆ دەکەن. 
             </h6>

              <h6><span style="color:#f8ad0c">نوسینی  :</span> د. یاسر عبدالکریم  بکار (پزیشکی دەروونی)</h6>

              <h6><span style="color:#f8ad0c">ژمارەی پەڕە :</span>197</h6>


              <div class="d-flex" style="margin-top: 40px;">
                <a data-toggle="modal" data-target="#books"
                  class="btn btn-gradient-blue radius-10  mt-4 m-auto">خوێندنەوە</a>

                  <a href="https://drive.google.com/file/d/1HzUDThjM5QI9S37yfFEWIIx8fv_UEGCJ/view" class="btn btn-warning radius-10  mt-4 m-auto">دابەزاندن</a>
              </div>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>








 <!-- kteby tr  -->

 <div class="container mt-5 top-card">

<div class="section-title">
  <h2>ئەمانەش ببینە</h2>
</div>
</div> 

  
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel mt-3 top-card" >

  <?php for ($i=0; $i <8 ; $i++) { ?>

    <div class="col mb-4 item">
<a href="view_books.php" style="text-decoration: none;">
      <div class="card border-0">
        <div class="card-header">
        <span class="show-movie bg-gradient-blue"><i class="bx bx-show"></i><span>101,100</span></span>
          <img class="card-img" height="260"
            src="https://www.kurdipedia.org/files/photos/2018/154127.JPG?v=31428" alt="Card image">
        </div>
        <div class="card-body">
          <center>
            <h6 class="card-title text-center text-color" dir="rtl"
              style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">بۆ ئەو گەنجانەی دەچنە زانکۆ</h6>
          </center>
         
        </div>
      </div>
    </a>
</div>
      
   <?php }?>

</div>

</div>

  <!--  end  -->










  <div class="modal fade modal-books" id="books" tabindex="-1" aria-labelledby="trailer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered radius-15 shadow" dir="rtl">
      <div class="modal-content col-12">
        <div class="modal-body">
        <iframe src="https://drive.google.com/file/d/1HzUDThjM5QI9S37yfFEWIIx8fv_UEGCJ/preview" width="100%" height="480"></iframe>        </div>
      </div>
    </div>
  </div>







  
<br><br><br>


  <!-- Footer -->
  <?php 
include'footer.php';
 ?>
