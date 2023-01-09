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

  <?php include("slide.php");?>





  <section id="intro-section">

    <div class="container">


      <div class="box-intro py-4 px-md-4">


        <div class="row align-items-center"> 
          <div class="col-lg-6"> 
            <img class="lazy img-fluid mb-4" data-src="images/intro.jpg">
          </div>
          <div class="col-lg-6"> 
            <h2>บริการจัดหาครู ชาวต่างชาติเจ้าของภาษา</h2> 
            <h1>Native English Speaker(NES)</h1>
            <h3>โทรเลย 099-888-7777</h3>

            <p>
              ครูชาวต่างชาติของ English fluency communication สามารถสอนได้หลายระดับชั้น 
              ตั้งแต่อนุบาล ประถม และมัธยม รวมทั้ง วัยทำงาน ซึ่งการสอนจะมุ่งเน้นทักษะ 
              ฟัง – พูด สนทนาเพื่อสามารถสื่อสารภาษาอังกฤษในชีวิตประจำวันได้
            </p>
            <p>
              English fluency communication ยินดีบริการครูชาวต่างชาติให้ โรงเรียน 
              และหน่วยงานต่างๆ ทั้งภาครัฐ และเอกชน ทั่วประเทศ เพราะเราเล็งเห็นความสำคัญ
              ของการพัฒนาศักยภาพด้านภาษาอังกฤษของคนไทย
            </p>
          </div>
        </div>


      </div>











    </div>

  </section>

  <section id="detail-section">
    <div class="container">



      <div class="text-center">
        <div class="mb-5">
          <h2><span>รายละเอียด</span>เบื้องต้น</h2>
        </div>
      </div>







      <?php $Text_detail = array ( 
        '1'=>"ดูแลงาน Visa และ Work Permit", 
        '2'=>"ช่วยจัดหาที่พักอาศัยของครูชาวต่างชาติ", 
        '3'=>"มีครูสอนทดแทน (Substitute) ทำให้การ สอนต่อเนื่อง ไม่ขาดครู", 
        '4'=>"มีการติดตาม ประเมินผล",
        '5'=>"ให้คำปรึกษา รับฟังคำติ – ชม เกี่ยวกับครูชาวต่างชาติ"
      ); ?>







      <div class="row detail_slick">

        <?php for($i=1;$i<=5;$i++){ ?>
          <div class="col-lg-4">

            <div class="item-detail">
              <div class="img-detail">

                <img class="img-fluid img-detail-img" data-lazy="upload/detail<?=$i?>.jpg">



                <div class="icon-detail">
                 <img class="img-fluid" data-lazy="upload/icon-detail0<?=$i?>.png">
               </div>


             </div>

             <div class="text-detail">
              <h4><?= $Text_detail[$i] ?></h4>
            </div>
          </div>

        </div>
      <?php } ?>


    </div>







    <div class="text-center mt-5">
      <a href="tel:021024083" class="box-tel">
        <span class="material-icons-sharp text-danger">
          phone_in_talk
        </span> : 099-888-7777
      </a>
    </div>



  </div>

</section>








<section id="service-section"  class="bg-parallax" style="background:url(images/service-section.jpg) no-repeat top center; background-size:cover;">
  <div class="container">
    <img class="lazy img-fluid" data-src="images/service.png">


    <div class="row">

      <div class="col-lg-6 p-lg-0">



        <div class="item-service">
          <div class="images-service">
            <img class="lazy img-fluid" data-src="upload/service01.jpg">
          </div>







          <div class="text-service">
            <h4>บริการ ครูฝรั่ง ครูชาวต่างชาติเจ้าของภาษา 
            Native English Speaker(NES)</h4>
            <p>บริการจัดหาครูชาวต่างชาติเจ้าของภาษา เพื่อให้บริการโรงเรียน องค์กร 
            และหน่วยงานต่างๆทั้งภาครัฐ และเอกชน</p>

            <p>บริษัท อิงลิช ฟลูเอนซี่ คอมมูนิเคชั่น จำกัด ได้จัดส่งครูชาวต่างชาติ 
            ไปตามโรงเรียนและสถานศึกษาทั่วประเทศเป็นจำนวนมาก มากกว่า 6 ปีแล้ว</p>

            <p>เรามีทีมงานมืออาชีพ ที่พร้อมคุยและตกลงข้อเสนอต่างๆกับทางโรงเรียน 
            เพียงติดต่อมา</p>


            <a href="" class="btn-service">
              <span class="material-icons-sharp">
                task_alt
              </span>
            กดเพื่อรับข้อเสนอที่ถูกใจ</a>
          </div>
        </div>
      </div>



      <div class="col-lg-6 p-lg-0">



        <div class="item-service">
          <div class="images-service">
            <img class="lazy img-fluid" data-src="upload/service02.jpg">
          </div>







          <div class="text-service">
            <h4>ด่วน!! มีจำนวนจำกัด โทรมาจองก่อน 
            ได้เลือกคุณสมบัติของครูก่อน</h4>
            <p>เนื่องจาก อิงลิช ฟลูเอนซี่ คอมมูนิเคชั่น มีครูเจ้าของภาษาเข้ามาอบรม
              ที่ศูนย์อบรมของเรา เพื่อทำการอบรม วัฒนธรรมไทย 
            และการสอนภาษาอังกฤษในฐานะ ภาษาต่างประเทศ (TEFL) จำนวนจำกัด</p>
            <p>
              ซึ่งทำให้โรงเรียนที่โทรเข้ามาจองก่อนจะมีสิทธิในการเลือกคุณสมบัติ
              ตามต้องการได้ นอกจากนี้ยังมีครูชาวต่างชาติที่มีความสามารถ
              ในการสอนวิชาเฉพาะ ทั้ง วิทยาศาสตร์ คณิตศาสตร์ พละ สังคม ดนตรี 
            และศิลปะ</p>


            <a href="tel:0998887777" class="btn-service">
              <span class="material-icons-sharp">
                call
              </span>

            โทรเลย 099-888-7777</a>
          </div>
        </div>
      </div>



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