<?php include"db.php"?>

 <?php include "header.php";?>
<?php include "navbar.php";?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Holiday</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.php">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Holiday</a>
                            </li>
                            <li class="breadcrumb-item active">Add Holiday</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Add</strong> Holiday</h2>
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
                            <form method="post" id="add_emp_form">
                            <div class="row clearfix">
                                <div class="col-sm-6">
									<label>Holday Name</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Holiday Name" / name="holiday_name">
                                        </div>
                                    </div>
                                </div>
								 <div class="col-sm-6">
									 <label>From Date</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control" placeholder="From Date" / name="from_date">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
								  <div class="row clearfix">
                                <div class="col-sm-6">
									<label>To Date</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control" placeholder="To Date" / name="to_date">
                                        </div>
                                    </div>
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
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                                <a href="all_holiday.php"><button type="button" class="btn btn-danger waves-effect">Cancel</button></a>
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
   <!--  <script src="assets/js/pages/forms/form-data.js"></script> -->
    <script type="text/javascript">
 
  $("#add_emp_form").submit(function () {
    var formData = new FormData($("#add_emp_form")[0]);
     $.ajax({
                    type:"POST",
                    url:"add_holiday_submit.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        if(data=="success")
                        {
                            alert("Holiday Added !");
                            window.location.href="all_holiday.php";
                        }
                        else
                        {
                            alert("Holiday Not Added !");
                         
                        }
                    
                   
                    }
                });
    return false;
  })
</script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/employee/add-employee.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:26 GMT -->
</html>