<?php include'header.php';?>


<div class="container detail-container" style="margin-top: 125px;margin-bottom:60px">
    <div class="col-12 col-lg-9 col-md-12 mb-4 m-auto  text-gorany">
        <div class="card border-0 bg-comp radius-10 m-3" dir="rtl">
            <div class="card-body d-flex">

                <div class="col-lg-12 text-gorany-content" style="align-self: center;margin-right:12px;text-align: center;">
                    <p class="text-right text-color" style="font-size: 10px;">
                    <h6 style="color:#f8ad0c" >کورد و مێژوو</h6>


                    <iframe class="mt-5" style="width: 60%;height:230px"
              src="https://www.youtube.com/embed/690ULtKXABw" autoplay
              fullscreen></iframe>

                    </p>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="container mt-5 top-card " style="margin-bottom: 100px;">

<div class="section-title">
  <h2>ئەمانەش ببینە</h2>
</div>


<div class="row  justify-content-center row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 arshef-video" style="margin-top:20px">
        <?php for ($i=0; $i <3 ; $i++) { ?>
            <a href="video_report.php" class="col" style="text-decoration: none;">
                <div class="image-arshef" style="background-image: url(https://images.unsplash.com/photo-1485846234645-a62644f84728?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dmlkZW98ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60);">
                <div class="play "><img src="assets/img/play.svg" width="40"  alt=""></div>
                </div>
            </a>
      <?php } ?>
</div>



</div> 



<?php include'footer.php';?>