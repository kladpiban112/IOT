<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Highlight | Velzon - Admin & Dashboard Template</title>
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
                                    <h4 class="mb-sm-0">Highlight</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Advanced UI</a></li>
                                            <li class="breadcrumb-item active">Highlight</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">HTML Highlight</h4>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <p class="text-muted">HTML highlight is used to mark or highlight text that is of property, relevance, or special interest to an HTML document. here is the example shown below.</p>

                                        <div class="live-preview">
                                            <pre>
<code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Velzon - Responsive Admin Dashboard Template&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div&gt;
            &lt;h1&gt;This is a Heading 1&lt;/h1&gt;
            &lt;h2&gt;This is a Heading 2&lt;/h2&gt;
            &lt;h3&gt;This is a Heading 3&lt;/h3&gt;
            &lt;h4&gt;This is a Heading 4&lt;/h4&gt;
        &lt;/div&gt;
        &lt;!-- end div content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">CSS Highlight</h4>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <p class="text-muted">CSS highlight is used to mark or highlight text that is of property, relevance, or special interest to a CSS document. Here is the example shown below.</p>
                                        <div class="live-preview">
                                            <pre>
<code class="language-css">body {
    color: #212529; 
    background-color: #f3f3f9;
    font-family: "Poppins",sans-serif;
}

.example {
    margin: 0;
    color: #74788d; 
}</code></pre>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <div class="flex-grow-1">
                                            <h4 class="card-title mb-0">Javascript Highlight</h4>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <p class="text-muted">Javascript highlight is used to mark or highlight text that is of property, relevance, or special interest to a Javascript document. Here is the example shown below.</p>
                                        <div class="live-preview">
                                            <pre>
<code class="language-js">function myFunction() {
    var divElement = document.getElementById("myDIV");
    if (divElement.style.display === "none") {
      divElement.style.display = "block";
    } else {
      divElement.style.display = "none";
    }
}</code></pre>
                                        </div>
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
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>