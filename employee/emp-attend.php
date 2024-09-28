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
     
                   <div class="col-lg-12 col-md-12">
              
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                               
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                        </div>
                                        <div class="body">
                                       
                                            <div class="table-responsive">
                                                <table class="table table-hover js-basic-example contact_list">
                                                    <thead>
                                                        <tr>
                                                            <th class="center"> Date </th>
                                                            <th class="center"> Check In </th>
                                                            <th class="center"> Check Out </th>
                                                            <th class="center"> Working Hours </th>
                                                           
                                                            <th class="center"> Status </th>
                                                         
                                                        </tr>
                                                    </thead>
                                                    <tbody>
														<?php
                                          require 'db.php';
                                         
                                          $query = "SELECT * FROM attendance where emp_id='$session_id'";
                                          if ($result = $con->query($query)) {
                                           
                                              while ($data = $result->fetch_assoc()) {
                                                      echo'  <tr class="odd gradeX">
                                                            <td class="center">'.$data["atten_date"].'</td>
                                                            <td class="center col-green">'.$data["signin_time"].'</td>
                                                            <td class="center col-green">'.$data["signout_time"].'</td>
                                                            <td class="center col-green">'.$data["working_hour"].'</td>
                                                          
                                                            <td class="center">
                                                                <div class="badge col-green">'.$data["status1"].'</div>
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
                        <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <strong>Attendance</strong> Report</h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="body">
                                                    <div id="pieChart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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