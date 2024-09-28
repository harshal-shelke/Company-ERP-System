<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
         $query = "insert into emp_leave (em_id,leave_type,start_date,end_date,apply_date,comment)values('$id','$leave_type','$start_date','$end_date','$apply_date','$comment')";
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