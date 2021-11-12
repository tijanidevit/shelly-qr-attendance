<?php 
    session_start();
    if (!isset($_SESSION['shelly_student'])) {
        header('location: ./');
        exit();
    }

    $student = $_SESSION['shelly_student'];
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
    <style>
        #qr-video {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include "includes/header.php"; ?>
        <section class="pager-section">
            <div class="container">
                <div class="pager-content text-center">
                    <h2>Account</h2>
                </div>
                <!--pager-content end-->
                <h2 class="page-titlee">Shelly</h2>
            </div>
        </section>
        <!--pager-section end-->
        <section class="page-content" style="padding-top: 90px;">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 offset-md-3">
                        <div class="sidebar class-sidebar position-static" style="max-width:unset">
                            <div class="widget widget-information">
                                <div>
                                    <video id="qr-video"></video>

                                </div>
                                <div>
                                    <select id="inversion-mode-select" class="form-control">
                                        <option value="original">Scan original (dark QR code on bright background)</option>
                                        <option value="invert">Scan with inverted colors (bright QR code on dark background)</option>
                                        <option value="both">Scan both</option>
                                    </select>
                                    <br>
                                </div>

                                <div>
                                    <b>Preferred camera:</b>
                                    <select id="cam-list" class="form-control">
                                        <option value="environment" selected>Environment Facing (default)</option>
                                        <option value="user">User Facing</option>
                                    </select>
                                </div>

                                <div>
                                    <button id="flash-toggle">📸 Flash: <span id="flash-state">off</span></button>
                                </div>
                                <br>
                                <b>Detected QR code: </b>
                                <span id="cam-qr-result">None</span>


                                <div class="tech-info">
                                    <a href="attendance-success" id="continue-btn" class="btn-default d-none">Submit<i class="fa fa-long-arrow-alt-right"></i></a>
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
    <script src="./assets/js/html5-qrcode.min.js" type="text/javascript">
    </script>

    <script type="module">
        import QrScanner from "./assets/js/qr-scanner.min.js";
        QrScanner.WORKER_PATH = "./assets/js/qr-scanner-worker.min.js";

        const video = document.getElementById('qr-video');
        const camList = document.getElementById('cam-list');
        const flashToggle = document.getElementById('flash-toggle');
        const flashState = document.getElementById('flash-state');
        const camQrResult = document.getElementById('cam-qr-result');

        function setResult(label, result) {
            label.textContent = result;
            label.style.color = 'teal';
            const continueBtn = document.querySelector("#continue-btn");
            continueBtn.setAttribute('href', `attendance-success?id=${result}`);
            continueBtn.classList.remove("d-none")
            clearTimeout(label.highlightTimeout);
            label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
        }

        // ####### Web Cam Scanning #######

        const scanner = new QrScanner(video, result => setResult(camQrResult, result), error => {
            // camQrResult.textContent = error;
            camQrResult.style.color = 'inherit';
        });

        const updateFlashAvailability = () => {
            scanner.hasFlash().then(hasFlash => {
                flashToggle.style.display = hasFlash ? 'inline-block' : 'none';
            });
        };

        scanner.start().then(() => {
            updateFlashAvailability();
            // List cameras after the scanner started to avoid listCamera's stream and the scanner's stream being requested
            // at the same time which can result in listCamera's unconstrained stream also being offered to the scanner.
            // Note that we can also start the scanner after listCameras, we just have it this way around in the demo to
            // start the scanner earlier.
            QrScanner.listCameras(true).then(cameras => cameras.forEach(camera => {
                const option = document.createElement('option');
                option.value = camera.id;
                option.text = camera.label;
                camList.add(option);
            }));
        });


        // for debugging
        window.scanner = scanner;


        document.getElementById('inversion-mode-select').addEventListener('change', event => {
            scanner.setInversionMode(event.target.value);
        });

        camList.addEventListener('change', event => {
            scanner.setCamera(event.target.value).then(updateFlashAvailability);
        });

        flashToggle.addEventListener('click', () => {
            scanner.toggleFlash().then(() => flashState.textContent = scanner.isFlashOn() ? 'on' : 'off');
        });
    </script>
</body>

</html>