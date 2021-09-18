<?php 
include'header.php';
 ?>



  <div class="container detail-container" style="margin-top: 120px;">
    <div class="col-12 col-lg-12 col-md-12 mb-4 view-oline top-card">
      <div class="card border-0 bg-comp radius-10 m-3 p-4" dir="rtl">

 <center>
      <div class="btn-group ">
        <button type="button" class="btn btn-gradient-blue dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          سێرڤەرەکان
        </button>
          <div class="dropdown-menu dropdown-zhanar">
            <a class="dropdown-item" href="#">گۆگڵ درایڤ</a>
            <a class="dropdown-item" href="#">مای ستریم</a>
            <a class="dropdown-item" href="#">یۆ ئەپلۆد</a>
          </div>
      </div>

<div class="video mt-5">
<iframe style="width: 60%;height:380px"
    src="https://drive.google.com/file/d/14HsAmZDrc4nyTpjVMP6MumHhrsd9mBOi/preview"
    autoplay fullscreen
  ></iframe>
</div>
      

  </center>
    
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



  <br><br><br>
  <!-- Footer -->
 <?php 
include'footer.php';
 ?>
