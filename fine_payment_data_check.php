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

    if(isset($_POST['add_fine_payment']))
    {
        $data_depositors_name=$_POST['depositorsname'];
        $data_phone_no=$_POST['phoneno'];
        $data_email=$_POST['email'];
        $data_payment_mode=$_POST['paymentmode'];
        $data_amount=$_POST['amount'];
        $data_reason_for_payment=$_POST['reasonforpayment'];

        $sql="INSERT INTO finepayment(depositorsname,phoneno,email,paymentmode,amount,reasonforpayment) 
        VALUES('$data_depositors_name','$data_phone_no','$data_email',' $data_payment_mode','$data_amount','$data_reason_for_payment')";

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