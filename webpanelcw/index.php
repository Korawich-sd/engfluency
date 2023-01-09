<?php
require_once('config/db.php');
session_start();
if (!isset($_SESSION['admin_login'])) {
    echo "<script>alert('Please Login')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login'>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENGLISH FLUENCY COMMUNICATION</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon"> -->
    <link rel="shortcut icon" href="../images/logo.svg" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <?php include('sidebar.php'); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Home</h3>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Home</h4>
                    </div>
                    <div class="card-body">

                        <div class="box-intro py-4 ">
                            <div class="box-btn-content">
                                <button type="submit" name="submit" class="btn btn-edit-content">Edit</button>
                            </div>
                            <div class="row align-items-center">

                                <div class="col-lg-6 d-flex justify-content-center align-item-center">
                                    <img class=" img-fluid mb-4" src="../images/intro.jpg">
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
                </div>

            </section>
            <?php include('footer.php'); ?>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>