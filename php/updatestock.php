<?php
    $sname = $_GET['s_name'];
    $mname = $_GET['m_name'];
    $batch = $_GET['batch_no'];
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Stock</title>
    <link rel="stylesheet" href="../css/update.css">
</head>
<body>
    <div class="container">
        <div class="box1">
            <form action="upstock.php" method="POST">
                <fieldset style="width: 500px">
                    <legend align="center">Update Stock</legend>
                    <table>
                        <tr>
                            <td><label>Suppliers Name:</label></td>
                            <td><input type="text" name="sname" value="<?php echo $sname ?>" readonly /></td>
                        </tr>
                        <tr>
                            <td>Medicine name:</td>
                            <td><input type="text" name="mname" value="<?php echo $mname ?>" readonly /></td>
                        </tr>
                        <tr>
                            <td>Batch no:</td>
                            <td><input type="number" name="batch" value="<?php echo $batch ?>"  /></td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td><input type="number" name="price" value="<?php echo $price ?>" /></td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><input type="number" name="qty" value="<?php echo $qty ?>" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="submit" value="Update">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>
</body>
</html>
