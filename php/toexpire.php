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
            <table>
            <tr><td><h2>Medications about to expire</h2></td></tr>
                <tr style="text-align:center;margin-left:300px;"><td>  

<?php

include "connect.php";
$sql = "SELECT * FROM purchase";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo "No medications found.";
    while ($row = $result->fetch_assoc()) {
        
        
        $medicationName = $row["m_name"];
        $expirationDate = $row["exp_date"];

        $currentDate = date("Y-m-d");
        $expirationThreshold = 7; // Number of days before expiration to trigger a notification

        $expiryDiff = strtotime($expirationDate) - strtotime($currentDate);
        $expiryDiffDays = floor($expiryDiff / (60 * 60 * 24));

        if ($expiryDiffDays <= $expirationThreshold && $expiryDiffDays >= 0) {
            echo "Number of rows: " . $result->num_rows . "<br>";

            $message = "The medication '$medicationName' will expire in $expiryDiffDays days on $expirationDate.";
         
            echo $message . "<br>";
        }
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
