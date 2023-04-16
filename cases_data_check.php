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

    if(isset($_POST['add_cases']))
    {
        $data_cases_name=$_POST['casesname'];
        $data_station=$_POST['station'];
        $data_case_stating=$_POST['casestating'];
        $data_indident_date=$_POST['incidentdate'];
        $data_incident_place=$_POST['incidentplace'];
        $data_description=$_POST['description'];

        $sql="INSERT INTO cases(casesname,station,casestating,incidentdate,incidentplace,description) 
        VALUES('$data_cases_name','$data_station','$data_case_stating','$data_indident_date','$data_incident_place','$data_description')";

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