<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Apex Treemap Charts | Velzon - Admin & Dashboard Template</title>
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
                                    <h4 class="mb-sm-0">Treemap Charts</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apexcharts</a></li>
                                            <li class="breadcrumb-item active">Treemap Charts</li>
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
                                        <h4 class="card-title mb-0">Basic Treemap Charts</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="basic_treemap" data-colors='["--vz-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Multi-Dimensional Treemap Chart</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="multi_treemap" data-colors='["--vz-primary","--vz-info"]' class="apex-charts" dir="ltr"></div>
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
                                        <h4 class="card-title mb-0">Distributed Treemap Chart (Different Color for  each Cell)</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="distributed_treemap"  data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info","--vz-warning", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Treemap Chart with Color Ranges</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="color_range_treemap" data-colors='["--vz-info","--vz-primary"]' class="apex-charts" dir="ltr"></div>
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

        <!-- treecharts init -->
        <script src="assets/js/pages/apexcharts-treemap.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>