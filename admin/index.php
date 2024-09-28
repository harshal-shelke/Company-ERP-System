<?php

    require 'db.php';

    @session_start();

    //print_r($_SESSION);

    // Check if the user is logged in, if not then redirect him to login page

    if((!empty($_SESSION["usertype"])) && (!empty($_SESSION['id'])))

      {

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
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-purple">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="far fa-window-restore"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Projects</h5>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">New Employee</h5>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Attendance</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-money-check-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Department</h5>
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
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Dec 2021 09:09:06 GMT -->
</html>