<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<!-- start page title -->
<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Starter</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-2">
                                    <div class="card card-custom gutter-b bg-warning" style="height: 150px">
                                        <div class="card-body">
                                      
                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3"></div>
                                            <a  class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                                    <div class="card card-custom gutter-b bg-warning" style="height: 150px">
                                        <div class="card-body">
                                    
                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3"></div>
                                            <a lass="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                                    <div class="card card-custom gutter-b bg-success" style="height: 150px">
                                        <div class="card-body">

                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3"></div>
                                            <a  class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                                    <div class="card card-custom gutter-b bg-success" style="height: 150px">
                                        <div class="card-body">
                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3"></div>
                                            <a class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                                    <div class="card card-custom gutter-b bg-success" style="height: 150px">
                                        <div class="card-body">
                                            <div class="text-dark font-weight-bolder font-size-h2 mt-3"></div>
                                            <a  class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong></strong></a>
                                        </div>
                                    </div>
                            </div>

                            
                            </div>


                            <div class="row">
      <!-- Map --> 
    <div >
        <div id="map" style="width: 100%; height:750px;">
        </div>
    </div>
   



<script>
$(document).ready(function () {
    'use strict';
    var longdomapserver = 'http://ms.longdo.com/mmmap/tile.php?zoom={z}&x={x}&y={y}&key=5e785cb06a872f9662a93d93ad733eed&proj=epsg3857&HD=1';
    var tileLayer = new L.TileLayer(longdomapserver, {
                    'attribution': "© Longdo Map"
                    });

                var map = new L.Map('map', {
                    'center': [14.9674218,102.0682299],
                    'zoom': 12,
                    'layers': [tileLayer]
                    });
                   
                });       
               
</script>