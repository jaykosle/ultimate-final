<?php

$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM firmodule";

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
		<h1> This is manage fir module!</h1>
	

    <table border="1px">
        <tr>
            <th class="table_th">Victim name</th>
            <th class="table_th">Phone no.</th>
            <th class="table_th">FIR no.</th>
            <th class="table_th">Address</th>
            <th class="table_th">Nationality</th>
            <th class="table_th">Complaints</th>
            <th class="table_th">Nature of crime</th>
            <th class="table_th">Location of crime</th>
            <th class="table_th">Name of suspect</th>
        </tr>

        <?php
        while($info=$result -> fetch_assoc())

        {
        ?>

        <tr>
            
            <td class="table_td">
                <?php echo "{$info['victimname']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['phoneno']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['firno']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['address']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['nationality']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['complaints']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['natureofcrime']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['locationofcrime']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['nameofsuspect']}"; ?>
            </td>
        </tr>

        <?php

        }

        ?>
    </table>
    </div>

</body>
</html>
