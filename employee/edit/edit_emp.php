<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
                  $query = "update  employee set first_name = '$first_name',last_name = '$last_name',em_email = '$em_email',em_address = '$em_address',em_phone = '$em_phone',em_birthday = '$em_birthday',em_joining_date = '$em_joining_date',des_id='$des_id' where id = '$id'";

                    $fire_query= mysqli_query($con,$query);

                    //print_r($query);

                    if($fire_query)

                      {

                        echo '0';

                      }

                      else

                      {

                        echo '1';

                      }

    

      ?>