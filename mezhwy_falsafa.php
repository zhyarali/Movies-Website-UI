<?php include'header.php';?>


<div class="container bg-comp radius-10 col-lg-8 col-11 p-2" style="margin-top: 140px;margin-bottom:100px">

    <div class="row text-center d-flex justify-content-center">
        <h5 class="text-center text-warning" style="line-height: 1.7;">مێژووی فەلسەفە</h5>
    </div>

    <div class="row text-right text-justify justify-content-center p-4">


        <div class="first_text">

            <div class="row">
                <div class="col-lg-3">
                    <span class="text-warning text-left d-block" dir="ltr" style="font-size: 15px;">First
                        :</span>
                </div>

                <div class="text-justify text-color col-lg-9" dir="rtl" style="line-height: 1.7;font-size:small;">
                    <span>    تێست تێست تێست  تێست </span>
                </div>
            </div>


            <hr class="hr">

            <div class="row">
                <div class="col-lg-3">
                    <span class="text-warning text-left d-block" dir="ltr" style="font-size: 15px;">Second 
                        :</span>
                </div>

                <div class="text-justify text-color col-lg-9" dir="rtl" style="line-height: 1.7;font-size:small;">
                    <span> تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست تێست تێست تێست
                        تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست </span>
                </div>
            </div>


            <hr class="hr">

            <div class="row">
                <div class="col-lg-3">
                    <span class="text-warning text-left d-block" dir="ltr" style="font-size: 15px;">Third 
                        :</span>
                </div>

                <div class="text-justify text-color col-lg-9" dir="rtl" style="line-height: 1.7;font-size:small;">
                    <span> تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست تێست تێست تێست
                        تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست </span>
                </div>
            </div>


            <hr class="hr">
        </div>



        <!-- read more -->
        <div id="text" style="display: none;">
        <div class="row">
                <div class="col-lg-3">
                    <span class="text-warning text-left d-block" dir="ltr" style="font-size: 15px;">Fourth 
                        :</span>
                </div>

                <div class="text-justify text-color col-lg-9" dir="rtl" style="line-height: 1.7;font-size:small;">
                    <span> تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست تێست تێست تێست
                        تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست </span>
                </div>
            </div>

            <hr class="hr">

            <div class="row">
                <div class="col-lg-3">
                    <span class="text-warning text-left d-block" dir="ltr" style="font-size: 15px;">Fifth 
                        :</span>
                </div>

                <div class="text-justify text-color col-lg-9" dir="rtl" style="line-height: 1.7;font-size:small;">
                    <span> تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست تێست تێست تێست
                        تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست تێست
                        تێست </span>
                </div>
            </div>

            <hr class="hr">
        </div>

    </div>

    <div class="row justify-content-center mb-3">
        <center class="text-center">
            <button id="toggle" class="btn btn-gradient-blue radius-10 btn-sm read text-center">زیاتر ببینە</button>
        </center>
    </div>

</div>



<?php include'footer.php';?>

<script>
    $(document).ready(function () {
        $("#toggle").click(function () {
            var elem = $("#toggle").text();
            var text = "زیاتر ببینە";
            if ($("#toggle").hasClass("read")) {
                //Stuff to do when btn is in the read more state
                $("#toggle").text("بیبە سەرەوە");
                $("#text").slideDown();
                $("#toggle").removeClass("read");
            } else {
                //Stuff to do when btn is in the read less state
                $("#toggle").text("زیاتر ببینە");
                $("#text").slideUp();
                $("#toggle").addClass("read");
            }
        });
    });
</script>