<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
         $query = "insert into employee (first_name,last_name,em_email,em_address,em_phone,em_birthday,em_joining_date,des_id,dep_id)values('$first_name','$last_name','$em_email','$em_address','$em_phone','$em_birthday','$em_joining_date','$des_id','$dep_id')";
echo $query;
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