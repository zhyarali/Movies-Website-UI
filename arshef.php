<?php 
include'header.php';
 ?>

<div class="container" style="margin-top:150px;margin-bottom:70px">
    <div class="row text-center d-flex justify-content-center">
        <h6 class="text-center text-color" style="line-height: 1.7;">بەشی ئەرشیف  کار لەسەر ئەو ڕاپۆرتە بیانیانە دەکات کە لەسەر کورد نوسراون</h6>
    </div>

    <div class="row  justify-content-center row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 arshef" style="margin-top:40px">
        <?php for ($i=0; $i <8 ; $i++) { ?>
            <a href="post_report.php" class="col" style="text-decoration: none;">
                <div class="image-arshef" style="background-image: url(assets/img/arshef.jpg);">
                    <div class="title text-center">تایتڵ</div>
                </div>
            </a>
      <?php } ?>
</div>


    <hr class="hr">

    <div class="row text-center d-flex justify-content-center">
        <h5 class="text-center text-warning" style="line-height: 1.7;">ڕاپۆرتە ڤیدیۆییەکان</h5>
    </div>

    <div class="row  justify-content-center row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 arshef-video" style="margin-top:40px">
        <?php for ($i=0; $i <3 ; $i++) { ?>
            <a href="video_report.php" class="col" style="text-decoration: none;">
                <div class="image-arshef" style="background-image: url(https://images.unsplash.com/photo-1485846234645-a62644f84728?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmlkZW98ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                <div class="play "><img src="assets/img/play.svg" width="40"  alt=""></div>
                </div>
            </a>
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