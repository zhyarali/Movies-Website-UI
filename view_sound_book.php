<?php 
include'header.php';
 ?>


  <div class="container detail-container" style="margin-top: 114px;">
    <div class="col-12 col-lg-12 col-md-12 mb-4  film_detail">
      <div class="card border-0 bg-comp radius-10 m-3" dir="rtl">
        <div class="card-body d-flex">
          <div class="col-lg-4">
            <center><img class="radius-10" src="https://www.kurdipedia.org/files/photos/2018/145415.JPG?v=51599"
                alt="" width="200" height="280"></center>
          </div>

          <div class="col-lg-8 film-content" style="align-self: center;margin-right:12px;text-align: right;">
            <p class="text-right text-color" style="font-size: 10px;">
              <h6><span style="color:#f8ad0c"> کتێبی دەنگی  :</span>   ١٠ خاڵ خۆزگە پێش چوونە زانکۆ بمزانیایە</h6>

              <h6 class="film-short-detail" style="line-height: 1.8;">
                کاتێک پێدەنێیتە حەرەمی زانکۆوە  ئەوە دەبیتە کەسایەتیەکی نوێ  بە هەموو مانای وشە  ، لەو ڕۆژەدا تۆ خواحافیزیت کردووە
                لە قۆناغێکی درێژی ژیانت کە پڕبوە لە خەونی پەرتەوازە ، ئێستاش پێشوازی لە تەمەنێکی نوێ و  ژیانێکی نوێ دەکەی ،، ئەمڕۆ تۆ کەسێکی تازەیت 
                و بەچەندین بەرپرسیاریەتی  نوێ و تموحی نوێوە ... وە هەمووانیش چاوەڕوانی شتی تازە و نوێ لەتۆ دەکەن. 
             </h6>

              <h6><span style="color:#f8ad0c">نوسینی  :</span> د. یاسر عبدالکریم  بکار (پزیشکی دەروونی)</h6>

              <h6><span style="color:#f8ad0c">ژمارەی پەڕە :</span>197</h6>

<!-- 
              <div class="d-flex" style="margin-top: 40px;">
                <a href="play_books_music.php"
                  class="btn btn-gradient-blue radius-10  mt-4 m-auto">گوێگرتن</a>

              </div> -->
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>








 <!-- kteby tr  -->

 <div class="container mt-5 top-card">

<div class="section-title">
  <h2>بەشەکان</h2>
</div>
</div> 

  
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel mt-3 top-card" >

  <?php for ($i=1; $i <9 ; $i++) { ?> 

    <div class="col mb-4 item">
    <h6 class="text-light" style="text-align:center;">دووەم <h5>
<a href="play_books_music.php" style="text-decoration: none;">
      <div class="card border-0">
      
        <div class="card-header">
        <span class="show-movie bg-gradient-blue"><i class="bx bx-show"></i><span>101,100</span></span>
          <img class="card-img" height="300"
            src="https://www.kurdipedia.org/files/photos/2018/154127.JPG?v=31428" alt="Card image">
          <a href="play_books_music.php" class="venobox play-btn mb-4"></a>
        </div>
   
      </div>
    </a>
</div>
      
   <?php }?> 

</div>

</div>

  <!--  end  -->




  
<br><br><br>


  <!-- Footer -->
<?php 
include'footer.php';
 ?>

