<?php
    require_once "layouts/config-dfixx.php";
?>
<style>
h4,table {
    font-family: 'Prompt';
}
</style>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>



<style> 
#example1 {
  border: 1px solid ;
 
  border-radius: 25px;
  
}
#Font {
  font-family: "Prompt", sans-serif;
}


</style>

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
                            <div class="col-4">
                                <a href="http:\\localhost\dfixx" target="_blank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">แจ้งซ่อมเสาไฟ</a>
                            </div>
                        </div>

</br>
<!-- <div class="row" style="width:100%"> -->
 <?php
        $sql = "SELECT u.*,p.*,o.org_shortname ,t.repair_typetitle,if(e.eq_code IS NOT NULL ,e.eq_code,u.eq_code) AS eq_code, if(e.eq_name IS NOT NULL ,e.eq_name,u.eq_name) AS eq_name,st.status_title,u.qt_status
        FROM repair_main u 
        LEFT JOIN org_main o ON u.org_id = o.org_id 
        LEFT JOIN repair_type t ON u.repair_type = t.repair_typeid
        LEFT JOIN person_main p ON u.person_id = p.oid
        LEFT JOIN cprename pr ON p.prename = pr.id_prename
        LEFT JOIN equipment_main e ON u.eq_id = e.oid
        LEFT JOIN repair_status_type st ON u.repair_status = st.status_typeid WHERE u.flag != 0 AND u.org_id = '5'  ORDER BY u.repair_id DESC";

        $result = $linkdifxx -> query($sql);


 ?>   
<div class="table-responsive" >
    <table id="example" class="table table-striped table-bordered" >
    <thead>
    <tr>
                        <!-- <th><input type="checkbox" onclick="checkAll(this)"></th> -->
                        <th class="text-center">ลำดับ</th>
                        <th>วันที่</th>
                        <th>ประเภท</th>
                        <th>อุปกรณ์</th>
                        <th>อาการแจ้งซ่อม</th>
                        <th class="text-center">สถานะ</th>
                        <th class="text-center">จัดการ</th>	
    </tr>
    </thead>
    <tbody>
            
            <?php
            // for($i=0;$i < $rowcount;$i++)
            $i=0;
            while ($row = $result -> fetch_assoc())
            {
                $i++;
                ?>
                <tr>
                            <!-- <td><input type="checkbox" name=""></td> -->
                            <td class="text-center"><?php echo $i;?></td>
                            <td><?php echo $row['repair_date'];?></td>
                            <td><?php echo $row['repair_type'];?></td>
                            <td><?php echo $row['repair_typetitle'];?></td>
                            <td><?php echo $row['repair_title'];?></td>
                            <td><?php echo $row['status_title'];?></td>
                            <td class="text-center">
                                <a  href="http:\\localhost\dfixx" target="_blank" >
                                    <i class="ri-tools-fill"></i>
                                </a>
                            </td>
                </tr>
            <?php 
            }  // end while
            
            $linkdifxx -> close();
            ?>
            </tbody>
            </table>
        </div>

<!-- </div> -->
   


<script type="text/javascript" > 

$(document).ready(function() {
    $('#example').DataTable(
         {     
      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );

</script>


