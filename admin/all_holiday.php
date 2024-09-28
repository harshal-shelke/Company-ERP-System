<?php
    require 'db.php';
    @session_start();
    //print_r($_SESSION);
    // Check if the user is logged in, if not then redirect him to login page
    if((!empty($_SESSION["usertype"])) && (!empty($_SESSION['id'])))
      {
		$session_id= $_SESSION["id"];
        if($_SESSION["usertype"]==1)
          {
          
          } 
         
          else
          {
            echo" you are not recognized"; 
             session_destroy();
            exit;
          }
      }
      else{
         header("location: login.php");exit;
       }
    
?>
<?php include "header.php";?>
    <!-- #Top Bar -->
    <?php include "navbar.php";?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">All Holidays</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.php">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Holidays</a>
                            </li>
                            <li class="breadcrumb-item active">All Holidays</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
           
                        <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>All</strong> Holidays
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example contact_list" id="example">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th class="center"> Title </th>
                                        
                                            <th class="center"> Start Date </th>
                                            <th class="center"> End Date </th>
											<th class="center"> Action </th>
                                       
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
										 <?php
                                          require 'db.php';
                                         
                                          $query = "SELECT * FROM holiday ";
                                          if ($result = $con->query($query)) {
                                           
                                              while ($data = $result->fetch_assoc()) {
                                      echo'<tr class="odd gradeX">
                                            <td class="center">'.$data["id"].'</td>
                                            <td class="center">'.$data["holiday_name"].'</td>
                                            <td class="center">'.$data["from_date"].'</td>
                                            <td class="center">'.$data["to_date"].'</td>
                                        
                                                
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
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/bundles/echart/echarts.js"></script>
    <script src="assets/js/bundles/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/index.js"></script>
    <script src="assets/js/pages/todo/todo.js"></script>

    <script type="text/javascript">
  
 $("#example").on("click", ".delete_video", function(){
  var id =  $(this).data('userid');
      if (confirm('Confirm delete the holiday?')){
       window.location = "delete_holiday.php?id="+id;
    }else{
       alert("Cancelled Delete operation");
    }
});
  
</script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:06 GMT -->
</html>