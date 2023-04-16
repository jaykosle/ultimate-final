<?php

$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM finepayment";

$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<?php
	include 'admin_css.php'
	?>

    <style type="text/css">
    .table_th
    {
        padding: 20px;
        font-size: 20px;
    }
    .table_td
    {
        padding: 20px;
        font-size: 20px;
    }
    </style>
	
</head>
<body>

	<?php

	include 'admin_sidebar.php';

	?>
	
	<div class="content">
		<h1> This is manage fine payment!</h1>
	

    <table border="1px">
        <tr>
            <th class="table_th">Depositor's Name</th>
            <th class="table_th">Phone no.</th>
            <th class="table_th">Email</th>
            <th class="table_th">Payment Mode</th>
            <th class="table_th">Amount</th>
            <th class="table_th">Reason For Payment</th>
        </tr>

        <?php
        while($info=$result -> fetch_assoc())

        {
        ?>

        <tr>
            
            <td class="table_td">
                <?php echo "{$info['depositorsname']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['phoneno']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['email']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['paymentmode']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['amount']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['reasonforpayment']}"; ?>
            </td>
        </tr>

        <?php

        }

        ?>
    </table>
    </div>

</body>
</html>
