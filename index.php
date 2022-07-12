<?php 

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
$module = filter_input(INPUT_GET, 'module', FILTER_SANITIZE_STRING);
if(!$page) $page = 'main';
if(!$module) $module = '';
$msg = filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING);
$pagenum = filter_input(INPUT_GET, 'pagenum', FILTER_SANITIZE_NUMBER_INT);



include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Smart Street Light</title>
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

                        

                        <?php 
                        // ADMIN pages
                        if (!file_exists("views/".$module."/".$page.".php")) {
                            include ("views/404.php");
                        }else{
                            switch ($page){       

                                case $page:
                                    include ("views/".$module."/".$page.".php");
                                    break;					
                                                            
                                default:
                                    include ("views/main.php");
                                    break;						
                            }
                        } 
				    ?>


                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <?php //include 'layouts/customizer.php'; ?>

        <?php include 'layouts/vendor-scripts.php'; ?>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>