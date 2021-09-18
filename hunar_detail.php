<?php 
include'header.php';
 ?>

 <div class="container" style="margin-top: 150px;">
     <div class="row  text-center d-flex justify-content-center mb-4">
            <img src="assets/img/art_photo.jpg" alt="" class="radius-10" width="220">
        </div>

        <div class="row text-center d-flex justify-content-center mb-4 mt-4">
        <h6 class="text-center text-warning">ژیاننامەی نیگارکێشی گوڵەبەڕۆژەکان، ڤینسێنت ڤان کۆخ</h6>     
        </div>

      <center><div class="row text-center d-flex justify-content-center mb-4 mt-3 col-lg-10">
        <p class="text-justify text-color " dir="rtl">
        ڤینسێنت ڤان کۆخ نیگارکێشێکی هۆڵەندییە، کە ژیانی بە چەندان ململانێی دەروونی و کۆمەڵایەتی و ئابووریدا تێپەڕ بووە، کە هەموو ئەمانە کاریگەرییان لەسەر ژیان و هونەرەکەی هەبووە. ڤان کۆخ لە 30/3/1853 لە هۆڵەندا لە دایک بووە، باوکی قەشە بووە، ئەمەش کاریگەریی لەسەر ژیانی دروست کردووە و وای کردووە پەروەردەیەکی ئایینی و نموونەیی هەبێت، کە دواتر ئەم پەروەردەیە لەسەر ژیانی واقیعیی ڤان کۆخ ڕەنگی دایەوە.

سەرەتای کارکردنی ڤان کۆخ لەگەڵ مامیدا بوو، لە دامەزراوەیەکی بازرگانیی هونەری. ماوەیەك لە لقی لاهایی ئەو دامەزراوەیە مایەوە، پاشان چووە لقی لەندەنی ئەو ڕێکخراوە. لە لەندەدن خانمێکیبە ناوی ئۆرسۆلا لۆیەر ناسیی، کە پێی سەرسام بوو و خۆشەویستیی خۆی بۆ دەربڕی، بەڵام خانمە ئینگلیزەکە ڤان کۆخی ڕەت کردەوە، ئەمەش کاریگەرییەکی خراپی لەسەر ڤان کۆخ هەبوو. ئەم ڕووداوە وای لە ڤان کۆخ کرد کە بە توندی پەنا بباتە بەر ئایین و ببێتە کەسێکی ئایینی. پاش ئەم ڕووداوە ڤان کۆخ گواسترایەوە بۆ لقی پاریسی دامەزراوەکە و دوای ماوەیەک دەستی لە ڕێکخراوەکە هەڵگرت و پەیوەندیی کرد بە خوێندنگەیەکی ئایینی و ژیانی خۆی تەرخان کرد بۆ ئایین و لێکۆڵینەوە لە ئینجیل. پاشان داوای کرد ببێتە پیاوێکی ئایینی و لێپرسراوێتیی دامەزراوەیەکی ئایینیی پێ سپێردرا. دواتر بە هۆی هەڵسوکەوتە نامۆکانیەوە، ئەندامانی کڵێسا بڕیاریان دا ڤان کۆخ دوور بخەنەوە، ئەمەش شکستێکی تری بوو.
        </p>
        </div>
    </center>
 </div>





 
 <div class="container mt-5 top-card">

<div class="section-title">
  <h2>ئەمانەش ببینە</h2>
</div>
</div> 

  
<div class="owl-wrapper">

<div class="container-fluid film-slider owl-carousel mt-3 top-card" >

<?php 
for ($i=0; $i <10 ; $i++) { ?>   
    <div class="col mb-4">
    <a href="hunar_detail.php" style="text-decoration: none;">
          <div class="card border-0">
            <div class="card-header">
              <img class="card-img" height="280"
                src="assets/img/art_photo.jpg" alt="Card image">
            </div>
            <div class="card-body">
              <center class="mb-1">
                <h6 class="card-title text-center text-color " dir="ltr"
                  style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">ڤینسێنت ڤان کۆخ</h6>
                  <a href="hunar_detail.php" class="btn btn-gradient-blue btn-sm radius-10 mb-3 mt-3" style="zoom: 85%;">زیاتر  ببینە</a>
              </center>
            </div>
          </div>
        </a>
    </div>
<?php } ?>

</div>

</div>




<br><br><br>
<?php 
include'footer.php';
 ?>