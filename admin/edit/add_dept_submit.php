<?php

 // print_r($_POST);

     

        require '../db.php';

        extract($_POST);
       // $about_section_text = mysqli_real_escape_string($con,$about_section_text);
         $query = "insert into department (dep_name)values('$dep_name')";
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