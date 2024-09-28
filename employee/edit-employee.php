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
                                <h4 class="page-title">Edit Employee</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Employee</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Employee</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
           
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Edit</strong> Employee</h2>
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
                         <form id="edit_emp" method="post" action="">
                         <?php
                           extract($_GET);
                           require 'db.php';
                            $query = "SELECT * FROM employee where id = '$id'";
                                if ($result = $con->query($query)) 
                                {
                                 while ($row = $result->fetch_assoc()) 
                                 {
                                  extract($row);
                                 }
                               }
                           ?>
                         
                            <div class="row clearfix">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="first_name" class="form-control" value="<?php echo $first_name;?>"
                                                placeholder="First Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"  name ="last_name"class="form-control" value="<?php echo $last_name;?>"
                                                placeholder="Last Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="email" type="email" name="em_email" class="validate form-control"
                                                value="<?php echo $em_email;?>"placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" name="em_joining_date" class="form-control datetimepicker" value="<?php echo $em_joining_date;?>"
                                            placeholder="Joining Date" name="date1" id="date1">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="des_id" class="form-control" value="<?php echo $des_id;?>"
                                                placeholder="Designation" />
                                                <input type="hidden" name="id" value="<?php echo  $id;?>">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="em_phone" class="form-control" value="<?php echo $em_phone;?>"
                                                placeholder="Telephone" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" name="em_birthday" class="form-control datetimepicker" value="<?php echo $em_birthday;?>"
                                            placeholder="Birth Date" name="date2" id="date2">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="em_address" class="form-control no-resize"
                                                placeholder="Address"><?php echo $em_address;?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                               <a href="all_emp.php"> <button type="button" class="btn btn-danger waves-effect">Cancel</button></a>
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
  


  $("#edit_emp").submit(function () {
    var formData = new FormData($("#edit_emp")[0]);
     $.ajax({
                    type:"POST",
                    url:"edit/edit_emp.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                     console.log(data);
                     if(data=="0")
                     {
                        swal("Success","Employee Updated !","success")
                           .then((value) => {
                            if (value) {
                             window.location.href="all_emp.php";
                                   
                              } else {
                             window.location.href="all_emp.php";
                         }
                             });
                     }
                     else
                     {

                     }
                    }
                });
    return false;
  });

</script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:06 GMT -->
</html>