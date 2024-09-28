<?php include "db.php";?>
<?php include "header.php";?>
<?php include "navbar.php";?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Today's Attendance</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.php">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Attendance</a>
                            </li>
                            <li class="breadcrumb-item active">Employee Attendance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Employee</strong> Attendance
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list" id="table_emp">
                                    <thead>
                                        <tr>
											<th class="center">Id</th>
                                            <th class="center"> Name </th>
											 <th class="center">Date </th>
                                          
                                            
                                            <th class="center"> Check In </th>
											 <th class="center"> Check Out </th>
                                           
                                            <th class="center"> Status </th>
                                            <th class="center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                          require 'db.php';
                                          
                                          $query = "SELECT attendance.id,attendance.emp_id,attendance.atten_date,attendance.signin_time,attendance.signout_time,attendance.status1,employee.id,employee.first_name FROM attendance INNER JOIN employee ON attendance.emp_id=employee.id;
";
                                          if ($result = $con->query($query)) {
                                           
                                              while ($data = $result->fetch_assoc()) {
                                              
                                      echo'  <tr class="odd gradeX">
                                          <td class="center">'.$data["id"].'</td>
											<td class="center">'.$data["first_name"].'</td>
                                           <td class="center">'.$data["atten_date"].'</td>
                                            <td class="center">'.$data["signin_time"].'</td>
											  <td class="center">'.$data["signout_time"].'</td>
                                         
                                            <td class="center col-green">'.$data["status1"].'</td>
                                        
                                            
                                            <td class="center">
                                              
                                                    <a href="#" data-userid="'.$data["id"].'" class="btn btn-tbl-delete delete_video">
                                                    <i class="material-icons">delete_forever</i>
                                                </a>
                                            </td>
                                        </tr>';
                                    }
                                }
                                ?>
                                       
                                      
                                      
                                      
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/app.min.js"></script>
    <script src="assets/js/table.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>

    <script type="text/javascript">
  
 $("#table_emp").on("click", ".delete_video", function(){
  var id =  $(this).data('userid');
      if (confirm('Confirm delete the Employee Attendance?')){
       window.location = "delete_emp_attend.php?id="+id;
    }else{
       alert("Cancelled Delete operation");
    }
});
  
</script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/attendance/today-attend.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:28 GMT -->
</html>