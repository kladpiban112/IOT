<style>
h4 {
    font-family: 'Prompt';
}
</style>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>



<style> 
#example1 {
  border: 1px solid ;
 
  border-radius: 25px;
  font-family: 'Prompt';
  
}



</style>

<!-- start page title -->
<div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">เสาไฟที่ใช้งานไม่ได้</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">เสาไฟที่ใช้งานไม่ได้</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-2">
                                    <div class="card  gutter-b bg-warning"  id= example1  style="height: 90px;"  >
                                        <div class="card-body " style=" padding-top: 0px" >
                                      
                                            <div class="text-dark font-weight-bolder  mt-3" ><h4>ใช้งานไม่ได้</h4></div>
                                            <a  class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong><h4> จำนวน 5 ดวง</h4></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                            <div class="card  gutter-b bg-success" id= example1  style="height: 90px " >
                                        <div class="card-body" style=" padding-top: 0px">
                                    
                                            <div class="text-dark font-weight-bolder  mt-3"><h4>พบปัญหาไฟดับ </h4></div>
                                            <a lass="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong><h4>จำนวน 2 ดวง </h4></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                            <div class="card  gutter-b bg-warning "  id= example1  style="height: 90px " >
                                        <div class="card-body" style=" padding-top: 0px">

                                            <div class="text-dark font-weight-bolder  mt-3"><h4>พบปัญหาแบตเตอร์รี่ </h4></div>
                                            <a  class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong><h4>จำนวน 2 ดวง</h4></strong></a>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xl-2">
                            <div class="card  gutter-b bg-warning  " id= example1  style="height: 90px " >
                                        <div class="card-body" style=" padding-top: 0px">
                                            <div class="text-dark font-weight-bolder mt-3"><h4>เสาที่มีการล้มเอียง </h4></div>
                                            <a class="text-dark text-hover-primary font-weight-bold font-size-lg mt-3"><strong><h4>จำนวน 1 เสา</h4></strong></a>
                                        </div>
                                    </div>
                            </div>

                            
                            </div>


                            <div class="row">
      <!-- Map --> 
    <div class="row">
    <div id="map" class="col-5">
    <div class="card  gutter-b bg-secondary  " id= example1  style="height: 750px " >
    <p></p>
    <div class="card-body " style=" padding-left: 70px;">
    <text class="text-muted "><h4>ปัญหาที่พบ</h4></text>

        <div class="row">
        
    <div class="col-6">
    <select class="form-select" placeholder="เลือกปัญหา">
  <option>ทั้งหมด</option>
  <option>ปัญหาแบตเตอร์รี่</option>
  <option>ปัญหาการล้มเอียง</option>
  <option>ปัญหาไฟดับ</option>
</select>
    </div>

    <div class="col-3">
    <label > </label>
    <input type="submit" class="btn btn-success" value="ค้นหา">
    </div>
</div>
    </div>
                                         <div class="table-responsive-lg bg-light  "  id= example1  style="height: 90%; "  >
                                        
                                     <br>
 <table class=" table table-light  " style="text-align:center"  >

 <thead>
 <tr>
     <th>ชื่อเสา</th>
     <th>ปัญหาที่พบ</th>
        <th> </th>
 
 </tr>
 </thead>

 <tbody>
 <tr>
     <td>เสาที่ 15 </td>
     <td>ปัญหาการล้มเอียง</td>
     <td><a  href="?module=lamp&page=detailwrong"><input type="submit" class="btn btn-success" value="รายละเอียดเพิ่มเติม"></a></td> 
 </tr>
 <tr>
     <td>เสาที่ 25 </td>
     <td>ปัญหาแบตเตอร์รี่</td>
     <td><a  href="?module=lamp&page=detailwrong"><input type="submit" class="btn btn-success" value="รายละเอียดเพิ่มเติม"></a></td> 
 </tr>
 <tr>
     <td>เสาที่ 35 </td>
     <td>ปัญหาแบตเตอร์รี่</td>
     <td><a  href="?module=lamp&page=detailwrong"><input type="submit" class="btn btn-success" value="รายละเอียดเพิ่มเติม"></a></td> 
 </tr>
 <tr>
     <td>เสาที่ 45 </td>
     <td>ปัญหาการล้มเอียง</td>
    <td><a  href="?module=lamp&page=detailwrong"><input type="submit" class="btn btn-success" value="รายละเอียดเพิ่มเติม"></a></td>
 
 </tr>
 <tr>
     <td>เสาที่ 55 </td>
     <td>ปัญหาไฟดับ</td>
     <td><a  href="?module=lamp&page=detailwrong"><input type="submit" class="btn btn-success" value="รายละเอียดเพิ่มเติม"></a></td> 
 </tr>

 </tbody>
 </table>
                             
         
                                           
                                        </div>
                                       
                                           
                                    </div>
                            </div>
        <div id="map" class="col-7">
            <iframe src="https://www.google.com/maps/d/embed?mid=1yn7YaPwzsyUONK_7eUvPYHOXxFugvNk&ehbc=2E312F" width="100%" height="750"></iframe>
        </div>
    </div>
   





