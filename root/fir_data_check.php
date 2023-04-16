<?php

$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

    if(isset($_POST['add_fir_module']))
    {
        $data_victim_name=$_POST['victimname'];
        $data_phone_no=$_POST['phoneno'];
        $data_fir_no=$_POST['firno'];
        $data_address=$_POST['address'];
        $data_nationality=$_POST['nationality'];
        $data_police_station_recorded=$_POST['policestationrecorded'];
        $data_complaints=$_POST['complaints'];
        $data_nature_of_crime=$_POST['natureofcrime'];
        $data_location_of_crime=$_POST['locationofcrime'];
        $data_name_of_suspect=$_POST['nameofsuspect'];

        $sql="INSERT INTO firmodule(victimname,phoneno,firno,address,nationality,policestationrecorded,complaints,natureofcrime,locationofcrime,nameofsuspect) 
        VALUES('$data_victim_name','$data_phone_no','$data_fir_no','$data_address','$data_nationality','$data_police_station_recorded','$data_complaints','$data_nature_of_crime','$data_location_of_crime','$data_name_of_suspect')";

        $result=mysqli_query($data,$sql);

        if($result)
        {
            echo "Apply Success";
        }
        else
        {
            echo "Apply Failed";
        }
    }

?>