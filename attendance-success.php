<?php 
    session_start();
    if (!isset($_SESSION['shelly_student'])) {
        header('location: ./');
        exit();
    }

    include 'core/attendances.class.php';

    $student = $_SESSION['shelly_student'];
    $code = $_GET['id'];

    $attendance_obj = new Attendances();
    $generated_code = $attendance_obj->fetch_generated_code($code);

    $generated_qrcode_id = $generated_code['md'];
    $student_id = $student['id'];
    $block = md5(rand(1111,9999));

    $generated_code = $attendance_obj->add_attendance($student_id,$generated_qrcode_id,$block);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shelly School </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Shelly - Website">
    <meta name="author" content="merkulove">
    <meta name="keywords" content="">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">

</head>

<body>
    <div class="wrapper">
        <?php include "includes/header.php"; ?>

        <!--pager-section end-->
        <section class="page-content" style="padding-top: 90px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 offset-md-3">
                        <div class="sidebar class-sidebar position-static" style="max-width:unset">
                            <div class="widget widget-information">
                                <h4 class="alert alert-success">
                                    Attendance Recorded Successfully.
                                </h4>
                                <div class="tech-info">
                                    <a href="./logout" id="continue-btn" class="btn-default">Logout<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--sidebar end-->
                    </div>
                </div>
            </div>
        </section>
        <?php include "includes/footer.php"; ?>

    </div>
    <script src="assets/js/bundle.min.js"></script>

</body>

</html>