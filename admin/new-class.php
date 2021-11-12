<?php 
session_start();
if (! isset($_SESSION['shelly_admin'])) {
    header('location: ./');
    exit();
}

include_once '../core/departments.class.php';
$department_obj = new Departments();
$departments = $department_obj->fetch_departments();
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>New Class</title>
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
                                    <h4 class="mb-sm-0">New Class</h4>

                                    <div class="page-title-right">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="classes" id="classForm" method="post">
                                            <div id="result"></div>
                                            <div class="form-group mt-2">
                                                <label for="class">Class</label>
                                                <textarea type="text" name="class" class="form-control" required></textarea>
                                            </div>


                                            <div class="form-group mt-2">
                                                <label for="class">Department</label>
                                                <select name="department_id" id="department_id" class="form-control" required>
                                                    <?php foreach ($departments as $department): ?>
                                                        <option value="<?php echo $department['id'] ?>"><?php echo $department['department'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>

                                            <div class="form-group mt-3 text-center">
                                                <button class="btn btn-primary">
                                                    <span class="spinner" id="spinner" style="display: none;">
                                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                    </span>
                                                    <span class="btnText">
                                                        Submit
                                                    </span>
                                                </button>
                                            </div>
                                        </form>

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

    </body>

    </html>

    <script>
        $('#classForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url:'ajax/add_class.php',
                type: 'POST',
                data : $(this).serialize(),
                cache: false,
                beforeSend: function() {
                    $('#spinner').show();
                    $('#result').hide();
                    $('#btnText').hide();
                },
                success: function(data){
                    $('#result').html(data);
                    $('#result').fadeIn();
                    $('#spinner').hide();
                    $('#btnText').show();
                    
                    if (data.includes('success')) {
                        setTimeout(function() {
                            location.href = 'classes';
                        }, 1400);
                    }
                }
            })
        })
    </script>