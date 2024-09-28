<?php include "db.php";?>
<?php
if(isset($_POST['submit']))
{

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
         $query = "insert into attendance (emp_id,atten_date,signin_time,signout_time,status1)values
		 ('$emp_id','$atten_date','$signin_time','$signout_time','$status1')";
//echo $query;
                    $fire_query= mysqli_query($con,$query);

                    //print_r($query);

                    if($fire_query)

                      {

                   echo "<script>alert('Added Successfully');</script>";

                      }

                      else

                      {

                      //  echo 'error';

                      }
}
else{
	//echo "error";
}
    

      ?>
<?php include "header.php";?>
<?php include "navbar.php";?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Employee Attendance</h4>
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
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Add</strong>Attendance </h2>
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
                            <form method="post">
                            <div class="row clearfix">
                                <div class="col-sm-6">
									<label>Select employee</label>
                                           <div class="form-group">
										  <select class="col-12" name="emp_id">
                                            <option value="" disabled selected>Select Employee</option>
										 <?php
                                          require 'db.php';
                                      
                                          $query = "SELECT * FROM employee";
										//echo $query;
                                          if ($result = $con->query($query)) {
                                           
                                              while ($data = $result->fetch_assoc()) {
                                     echo' 
                                            <option value="'.$data["id"].'">'.$data["first_name"].'</option>
                                           
                                        ';
											  }
										  }
										?>
											  </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<label>Attendance Date</label>
                                    <div class="form-group">
										
                                        <div class="form-line">
                                            <input type="date" class="form-control" placeholder="Enter Date" / name="atten_date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
									<label>signin time</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="email" type="time" class="validate form-control"
                                                placeholder="" name="signin_time">
                                        </div>
                                    </div>
                                </div>
                                     <div class="col-sm-6">
									<label>signout time</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input id="email" type="time" class="validate form-control"
                                                placeholder="" name="signout_time">
                                        </div>
                                    </div>
                                </div>
                            </div>
								       <div class="col-sm-6">
									<label>Select Status</label>
                                           <div class="form-group">
										  <select class="col-12" name="status1">
                                            <option value="" disabled selected>Select Status</option>
										
                                            <option value="Present">Present</option>
											 <option value="Absent">Absent</option>
                                       
											  </select>
                                    </div>
                                </div>
                         
                    
          
                           <!--  <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label col-md-3">Upload Your Profile Photo</label>
                                    <form action="https://www.radixtouch.com/" id="frmFileUpload" class="dropzone" method="post"
                                        enctype="multipart/form-data">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph">
                                                <i class="material-icons">touch_app</i>
                                            </div>
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are
                                                <strong>not</strong>
                                                actually uploaded.)</em>
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" name="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <a href="index.php"><button type="button" class="btn btn-danger waves-effect">Cancel</button></a>
                            </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <script src="assets/js/app.min.js"></script>
    <script src="assets/js/form.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/forms/form-data.js"></script>
		 <script type="text/javascript">
 

</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/attendance/today-attend.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:28 GMT -->
</html>