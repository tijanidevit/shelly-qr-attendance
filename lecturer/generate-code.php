<?php 
    session_start();
    if (!isset($_SESSION['shelly_lecturer'])) {
        header('location: ./');
        exit();
    }

    include_once '../core/courses.class.php';
    include_once '../core/lecturers.class.php';
    include_once '../core/attendances.class.php';
    $course_obj = new Courses();
    $attendance_obj = new Attendances();
    $lecturer_obj = new Lecturers();

    $lecturer = $_SESSION['shelly_lecturer'];
    $lecturer_id = $lecturer['id'];

    $course_id = $_GET['id'];

    $course = $course_obj->fetch_course($course_id);
    

    $generated_code = time().rand(1111,9999);

    $attendance_obj->add_generated_qrcode($lecturer_id,$course_id,$generated_code);
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Courses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Nazox - MVC5 & ASP.Net Core Admin & Dashboard Template, Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include "includes/header.php"; ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "includes/sidebar.php"; ?>

        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"><?php echo $course['title'] ?></h4>

                                <div class="page-title-right">
                                    <button class="btn btn-primary" id="print-page" onclick="print()">Print</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <style>
                        #qrcode {
                            display: flex;
                            justify-content: center;
                        }
                    </style>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div id="print-area" class="text-center">
                                        <h3>Date Generated: <?php echo date('D d, F Y') ?></h3>
                                        <h5><?php echo $course['code'] ?></h5>
                                        <div id="qrcode" data-text="<?php echo $generated_code ?>"></div>
                                    </div>
                                    <br><br><br>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php include "includes/footer.php"; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <script src="assets/js/app.js"></script>
    <script src="assets/js/qrcode.min.js"></script>

    <script>
        $(function() {
            const text = $('#qrcode').data("text");
            var qrcode = new QRCode("qrcode", {
                text,
                width: 400,
                height: 400,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });


        })
    </script>
</body>

</html>