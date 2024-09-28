
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
                                <h4 class="page-title">Edit Department</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">Department</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Department</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Edit</strong> Department</h2>
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
                            $query = "SELECT * FROM department where id = '$id'";
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
                                            <input type="text" name="dep_name" class="form-control" value="<?php echo $dep_name;?>"
                                                placeholder="Department Name" />
                                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                           
                           
                         
                         
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="btn btn-primary waves-effect m-r-15">Submit</button>
                               <a href="department.php"><button type="button" class="btn btn-danger waves-effect">Cancel</button></a> 
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/js/form.min.js"></script>
    <!-- Custom Js -->
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/pages/forms/form-data.js"></script>


<script type="text/javascript">
  $("#edit_emp").submit(function () {
    var formData = new FormData($("#edit_emp")[0]);
     $.ajax({
                    type:"POST",
                    url:"edit/edit_depart_submit.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                     console.log(data);
                     if(data=="0")
                     {
                       // swal("Success","Video Updated !","success")
                       //      .then((value) => {
                       //        if (value) {
                       //             window.location.href="manage_videos.php";
                                   
                       //            } else {
                       //              window.location.href="manage_videos.php";
                       //            }
                       //          });
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


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/pages/employee/edit-employee.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:27 GMT -->
</html>