<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
                  $query = "update  department set dep_name = '$dep_name' where id = '$id'";

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