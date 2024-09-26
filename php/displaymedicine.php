<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/displayrecord.css">
</head>
<body>
<div class="container">
		<div class="box">	
            <h2 style="text-align:center;">Dashboard</h2>	
			<ul>
                <li   ><a href="dashboard.php">|  | Home</a></li>
				<li   ><a href="m.php">|  | Medicine Records</a></li>
				<li   > <a href="p.php">|  | Patient Records</a></li>
				<li   > <a href="n.php">|  | Notifications</a>  </li>
				<li   > <a href="search.php">| | Search  | |</a>  </li>
			</ul>
		</div>
        <div class="box1">

		
		<?php
	include "connect.php";
        
	$disQuery="select * from purchase";
	$disExe=mysqli_query($conn,$disQuery);

	echo "<table border=1px>";
	echo "<tr>";
	echo "<th>Medicine ID</th>";
	echo "<th>Medicine Name</th>";
	echo "<th>Batch No</th>";
	echo "<th>Manufacured Date</th>";
	echo "<th>Expiry Date</th>";
	echo "<th>Price</th>";
    echo "<th>Description		</th>";
	echo "</tr>";

	if ($disExe) {
		while ($row=mysqli_fetch_assoc($disExe)) {
			$Medicine_id=$row['m_id'];
			$Medicine_name=$row['m_name'];
			$Batch_No=$row['batch_no'];
			$Manufacured_date=$row['mft_date'];
			$Expiry_date=$row['exp_date'];
			$Price=$row['price'];
            $Description=$row['descript'];
            

			echo "<tr>";
			echo "<td>$Medicine_id</td>";
			echo "<td>$Medicine_name</td>";
			echo "<td>$Batch_No</td>";
			echo "<td>$Manufacured_date</td>";
			echo "<td>$Expiry_date</td>";
			echo "<td>$Price</td>";
            echo "<td>$Description</td>";
			echo "<td><a href='delmedicine.php?m_name=$Medicine_name '>Delete</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
?>
</div></div>

</body>
</html>

