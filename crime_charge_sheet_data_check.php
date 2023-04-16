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

    if(isset($_POST['add_crime_charge_sheet']))
    {
        $data_charge_sheet_no=$_POST['chargesheetno'];
        $data_date=$_POST['date'];
        $data_details=$_POST['details'];
        $data_fir_no=$_POST['firno'];
        $data_produced_court_name=$_POST['producedcourtname'];
        $data_fine_status=$_POST['finestatus'];
        $data_filled_by=$_POST['filledby'];

        $sql="INSERT INTO chargesheet(chargesheetno,date,details,firno,producedcourtname,finestatus,filledby) 
        VALUES('$data_charge_sheet_no','$data_date','$data_details',' $data_fir_no','$data_produced_court_name','$data_fine_status','$data_filled_by')";

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