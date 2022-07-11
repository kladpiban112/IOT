<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Vector Maps | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0">Vector</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                            <li class="breadcrumb-item active">Vector</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Markers</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="world-map-line-markers" data-colors='["--vz-light"]' style="height: 420px"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">World Vector Map with Markers</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="world-map-markers" data-colors='["--vz-light"]' style="height: 350px" dir="ltr"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">World Vector Map with Image Markers</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="world-map-markers-image" data-colors='["--vz-light"]' style="height: 350px" dir="ltr"  ></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">USA Vector Map</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="usa-vectormap" data-colors='["--vz-primary"]' style="height: 350px"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Canada Vector Map</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="canada-vectormap" data-colors='["--vz-primary"]' style="height: 350px"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Russia Vector Map</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="russia-vectormap"  data-colors='["--vz-primary"]' style="height: 350px"></div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Spain Vector Map</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div id="spain-vectormap" data-colors='["--vz-primary"]' style="height: 350px"></div>
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

        <!-- prismjs plugin -->
        <script src="assets/libs/prismjs/prism.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
        <script src="assets/libs/jsvectormap/maps/us-merc-en.js"></script>
        <script src="assets/libs/jsvectormap/maps/canada.js"></script>
        <script src="assets/libs/jsvectormap/maps/russia.js"></script>
        <script src="assets/libs/jsvectormap/maps/spain.js"></script>

        <!-- vector-maps init -->
        <script src="assets/js/pages/vector-maps.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>