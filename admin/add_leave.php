<?php
    require 'db.php';
    @session_start();
    //print_r($_SESSION);
    // Check if the user is logged in, if not then redirect him to login page
    if((!empty($_SESSION["usertype"])) && (!empty($_SESSION['id'])))
      {
		$session_id = $_SESSION["id"];
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
       $current_month = date('Y-m');
       $current_date = date('Y-m-d');
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
                                <h4 class="page-title">Add Leave</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.php">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Leaves</a>
                            </li>
                            <li class="breadcrumb-item active">Add Leave</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>New</strong> Leave Request</h2>
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
							<form method="post" id="add_leave" >
                        
                            <div class="row clearfix">
                             
                                <div class="col-sm-6">
                                    <div class="form-group">
											<lable>Leave Type</lable>
                                        <select class="col-12 m-t-20 p-l-0" style="display:block;" name="leave_type">
                                            <option value="" disabled selected>Leave Type</option>
                                            <option value="Privilege Leave">Privilege Leave</option>
                                            <option value="Casual Leave">Casual Leave</option>
                                            <option value="Sick Leave">Sick Leave</option>
                                            <option value="Maternity Leave">Maternity Leave</option>
                                        </select>
                                    </div>
                                </div>
									    <div class="col-sm-6">
                                    <div class="form-group">
											<lable>Select Employee</lable>
                                        <select class="col-12 m-t-20 p-l-0" style="display:block;" name="em_id">
                                            <option value="" disabled selected>Select Employee</option>
                                               <?php
                                          require 'db.php';
                                         
                                          $query2 = "SELECT * FROM `employee`";
                                          if ($result2 = $con->query($query2)) {
                                           
                                              while ($data2 = $result2->fetch_assoc()) {
												  echo' <option value="'.$data2["id"].'">'.$data2["first_name"].'</option>';
											  }
										  }
											?>
                                        </select>
                                    </div>
                                </div>
								
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
												<lable>From Date</lable>
                                            <input type="date" class="form-control datetimepicker"
                                                placeholder="From Date" name="start_date" id="date1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
										<lable>To Date</lable>
                                        <input type="date" class="form-control datetimepicker" placeholder="To Date"
                                            name="end_date" id="date2">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
								<div class="col-sm-6">
                                    <div class="form-group">
										
                                        <div class="form-group">
											<lable>Apply date</lable>
                                            <input type="date" class="form-control"
                                                placeholder="Apply Date" name="apply_date" id="date1">
											<input type="hidden" name="id" value="<?php echo $session_id;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
											<lable>Remark</lable>
                                            <textarea rows="4" class="form-control no-resize"
                                                placeholder="Remark" name="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
							
                            </div>
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <button type="button" class="btn btn-danger waves-effect">Cancel</button>
                            </div>
							</form>
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
 
  $("#add_leave").submit(function () {
    var formData = new FormData($("#add_leave")[0]);
     $.ajax({
                    type:"POST",
                    url:"add_leave_submit.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        if(data=="success")
                        {
                            alert("Leave Request Added !");
                            window.location.href="all_leave.php";
                        }
                        else
                        {
                            alert("Leave Request Not Added !");
                           
                        }
                    
                   
                    }
                });
    return false;
  })
</script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:06 GMT -->
</html>