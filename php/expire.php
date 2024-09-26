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
				<li   > <a href="s.php">| | Search  | |</a>  </li>
			</ul>
		</div>
        <div class="expire" style="text-align:center;margin-left:400px;">
            <table><tr><td><h2>Expired Medications</h2></td></tr>
                <tr style="text-align:center;margin-left:300px;"><td>  

<?php

include "connect.php";
$currentDate = date("Y-m-d");
$sql = "SELECT * FROM purchase WHERE exp_date<CURDATE()";
$result = $conn->query($sql);
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (!$result) {
    die("SQL query error: " . $conn->error);
}
echo "Number of rows: " . $result->num_rows . "<br>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $medicationName = $row["m_name"];
        $expirationDate = $row["exp_date"];
        
            $message = "The medication '$medicationName' has expired on $expirationDate.";
            echo $message . "<br>";

    }
} else {
    echo "No medications found.";
}

?>

</td>
<td><form action="purchase.php" method="POST">
    <input type="submit" value="Purchase"></form>
</td>
</tr></table></div>
  </div>  
</body>
</html> 



