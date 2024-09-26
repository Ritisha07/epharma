<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase</title>
	<link rel="stylesheet" href="../css/addrecord.css">
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
        <div class="box1">
<form action="" method="POST">
    <fieldset>
			<legend align="center">Purchase</legend>
			<table>
                <tr>
					<td><label>Suppliers Name:</label></td>
					<td><input type="text" name="sname"/></td>
				</tr>
                <tr>
					<td><label>Suppliers ID:</label></td>
					<td><input type="number" name="sid"/></td>
				</tr>
                <tr>
					<td><label>Suppliers Address:</label></td>
					<td><input type="text" name="address"/></td>
				</tr>
                <tr>
					<td><label>Contact No:</label></td>
					<td><input type="number" name="contact"/></td>
				</tr>
				<tr>
					<td><label>Medicine ID:</label></td>
					<td><input type="number" name="mid" /></td>
				</tr>
				<tr>
					<td><label>Medicine name:</label></td>
					<td><input type="text" name="mname"/></td>
				</tr>
				<tr>
					<td><label>Batch no:</label></td>
					<td><input type="number" name="batch"/></td>
				</tr>
				<tr>
					<td><label>Manufactured date:</label></td>
					<td><input type="date" name="mdate" value="<?php echo date('Y-m-d'); ?>" /></td>
				</tr>
				<tr>
					<td><label>Expiry date:</label></td>
					<td><input type="date" name="edate" value="<?php echo date('Y-m-d'); ?>" /></td>
				</tr>
				<tr>
					<td><label>Price:</label></td>
					<td><input type="number" name="price"/></td>
				</tr>
				<tr>
					<td><label>Quantity:</label></td>
					<td><input type="number" name="qty"/></td>
				</tr>
				<tr>
					<td><label>Description:</label></td>
					<td><input type="text" name="desc"/></td>
				</tr>
                <tr>
					<td><label>Purchase date:</label></td>
					<td><input type="date" name="purdate" value="<?php echo date('Y-m-d'); ?>" /></td>
				</tr>
				<tr>
					
					<td><input type="submit" name="submit" value="Purchase"/></td>
					<td><input type="reset" name="reset"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
	</div></div>
</body>
</html>
<?php
	include "connect.php";
	if (isset($_POST['submit'])) {
		if (empty($_POST['sname'])||empty($_POST['sid'])||empty($_POST['address'])||empty($_POST['contact'])
		||empty($_POST['mid'])||empty($_POST['mname'])||empty($_POST['batch'])||empty($_POST['mdate'])
		||empty($_POST['edate'])||empty($_POST['price'])||empty($_POST['qty'])||empty($_POST['desc'])||empty($_POST['purdate'])) {
			
		}else{
		$sname=$_POST['sname'];
		$sid=$_POST['sid'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
        $mid=$_POST['mid'];
        $mname=$_POST['mname'];
        $batch=$_POST['batch'];
		$mdate=$_POST['mdate'];
		$edate=$_POST['edate'];
		$price=$_POST['price'];
		$qty=$_POST['qty'];
		$desc=$_POST['desc'];
		$purdate=$_POST['purdate'];
        

		$ins_query = "INSERT INTO purchase (s_name, s_id, address, contact, m_id, m_name, batch_no, mft_date,
		 exp_date, price, qty,descript, p_date)
		VALUES ('$sname', '$sid', '$address', '$contact', '$mid', '$mname', '$batch', '$mdate', '$edate', '$price', '$qty','$desc', '$purdate')";

			$ins_exe=mysqli_query($conn,$ins_query);
			if ($ins_exe) {
				header('location:displaymedicine.php');
			}else{
				echo " failed";
			}
		}
	}
?>