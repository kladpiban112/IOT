<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Apex Pie Charts | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'layouts/menu.php'; ?>

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
                                    <h4 class="mb-sm-0">Pie Charts</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apexcharts</a></li>
                                            <li class="breadcrumb-item active">Pie Charts</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Simple Pie Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="simple_pie_chart" data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.55", "--vz-primary-rgb, 0.40"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Simple Donut Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="simple_dount_chart" data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.70", "--vz-primary-rgb, 0.55", "--vz-primary-rgb, 0.40"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Updating Donut Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div>
                                            <div id="updating_donut_chart" data-colors='["--vz-primary", "--vz-primary-rgb, 0.85", "--vz-primary-rgb, 0.65", "--vz-primary-rgb, 0.50"]' class="apex-charts" dir="ltr"></div> 

                                            <div class="d-flex align-items-start flex-wrap gap-2 justify-content-center mt-4">
                                                <button id="add" class="btn btn-light btn-sm">
                                                    + ADD
                                                </button>
                                                
                                                <button id="remove" class="btn btn-light btn-sm">
                                                    - REMOVE
                                                </button>
                                                
                                                <button id="randomize" class="btn btn-light btn-sm">
                                                    RANDOMIZE
                                                </button>
                                                
                                                <button id="reset" class="btn btn-light btn-sm">
                                                    RESET
                                                </button>
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Monochrome Pie Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="monochrome_pie_chart" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Gradient Donut Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="gradient_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-secondary", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Patterned Donut Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="pattern_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-secondary", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Pie Chart with Image Fill</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="image_pie_chart" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <?php include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- piecharts init -->
        <script src="assets/js/pages/apexcharts-pie.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>