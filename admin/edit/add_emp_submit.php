<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
define('PATH','https://companyerp.mycloudspace.in/admin/');
  $path = "upload/";
           
              $path_upload = $path.basename( $_FILES['em_image']['name']);
              move_uploaded_file($_FILES['em_image']['tmp_name'], $path_upload);
              $path1 = PATH.$path_upload; 
   
         $query = "insert into employee (first_name,last_name,em_email,em_address,em_phone,em_birthday,em_joining_date,des_id,dep_id,username,em_password,em_image)values
		 ('$first_name','$last_name','$em_email','$em_address','$em_phone','$em_birthday','$em_joining_date','$des_id','$dep_id','$username','$em_password','$path1')";
//echo $query;
                    $fire_query= mysqli_query($con,$query);

                    //print_r($query);

                    if($fire_query)

                      {

                        echo 'success';

                      }

                      else

                      {

                        echo 'error';

                      }

    

      ?>