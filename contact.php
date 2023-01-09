<!DOCTYPE html>
<html lang="en" class="desktop">
<head>

  <link rel="shortcut icon" href="images/favicon.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.85">
  <meta name="description" content="บริการจัดหาครู ชาวต่างชาติเจ้าของภาษา Native English Speaker(NES)">
  <meta name="keyword" content="บริการจัดหาครู ชาวต่างชาติเจ้าของภาษา Native English Speaker(NES)">
  <meta name="author" content="บริการจัดหาครู ชาวต่างชาติเจ้าของภาษา Native English Speaker(NES)">

  <title>บริการจัดหาครู ชาวต่างชาติเจ้าของภาษา Native English Speaker(NES)</title>


  <link href="css/spinner.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <script src="js/core.min.js"></script>
  <script src="js/script.min.js"></script>
  <script src="js/jquery.min.js"></script>

  <script type="text/javascript">

    'use strict'; 
    var $window = $(window); 
    $window.on({
      'load': function () {

        /* Preloader */ 
        $('.spinner').fadeOut(2500);
      },

    });



  </script>


  <script  src="js/lazyload.js"></script>

</head>



<body>
 <!-- Pre loader -->
 <div class="spinner" id="loading-body">
  <div> 
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>

<?php include("header.php");?>

<main>








  <section id="contact-section"  class="bg-parallax" style="background:url(images/service-section.jpg) no-repeat top center; background-size:cover;">
  


    <div class="container">

<img class="img-fluid" src="images/contact.jpg">

      <div class="box-contact pb-5 px-md-4">


      <div class="bg-navigator">
        <a href="index.php">หน้าแรก</a>
        <a href="contact.php">ติดต่อเรา</a>
      </div>


<div class="text-center">
        <div class="mb-5">
          <h2><span>ติดต่อ</span>เรา</h2>
        </div>
        <h4 class="text-danger mb-5">ฝากข้อความไว้ให้เราติดต่อท่าน</h4>
      </div>











        <form id="form_message" method="post" action="https://www.fireman-fb.com/contact" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="CuWWbZneZurP9giDfyM1iIKn0uHmfoXbkD1dQnhM">   
           <div class="row">

            <div class="col-lg-4">
              <div class="form-group mb-4">
                <input type="text" class="form-control" id="text" name="name" placeholder="กรอกชื่อ-นามสกุล">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mb-4">
                <input type="email" class="form-control" id="text" name="email" placeholder="กรอกอีเมล">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group mb-4">
                <input type="text" class="form-control" id="text" name="phone" placeholder="กรอกเบอร์โทร" onkeypress="validate(event)" maxlength="10">
              </div>
            </div>


            <div class="col-lg-12">
              <div class="form-group mb-4">
                <textarea class="form-control" rows="5" id="comment" name="message" placeholder="กรอกข้อความเพิ่มเติม"></textarea>
              </div>
            </div>

          </div>


          <div class="text-center">
            <div class="col-12" style="text-align: -webkit-center;">
              <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdnZCAbAAAAAN5rxRl9h09tA2OMjzo_NZxkCh3M"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdnZCAbAAAAAN5rxRl9h09tA2OMjzo_NZxkCh3M&amp;co=aHR0cHM6Ly93d3cuZmlyZW1hbi1mYi5jb206NDQz&amp;hl=en&amp;v=ovmhLiigaw4D9ujHYlHcKKhP&amp;size=normal&amp;cb=9kj3f8sw2pix" width="304" height="78" role="presentation" name="a-4rb8zrm8qpsv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
            </div>
            <div class="clearfix"></div>
            <a href="" class="btn btn-danger btn-lg mt-4 px-5" >
              <span class="material-icons-sharp">
                send
              </span>

            ส่งข้อความ</a>
          </div>
        </form>



      </div>






      <div class="row">



        <div class="col-lg-12 p-0 f-h">
          <img class="lazy img-fluid" data-src="images/footer-h.svg">
        </div>




      </div>





    </div>
  </section>



</main>



<?php include("footer.php");?>



</body>
</html>