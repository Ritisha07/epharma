<?php
    include "connect.php";

    if (isset($_POST['submit'])) {
        $sname = $_POST['sname'];
        $mname = $_POST['mname'];
        $batch = $_POST['batch'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        // Perform validation on the form inputs
        if (empty($batch) || empty($price) || empty($qty)) {
            echo "Please enter all required fields.";
        } else {
            // Perform database update
            $update_query = "UPDATE purchase SET batch_no='$batch', price='$price', qty='$qty' WHERE s_name='$sname' AND m_name='$mname'";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                echo "Stock updated successfully.";
                header('location:stock.php');
            } else {
                echo "Failed to update stock.";
            }
        }
    }
?>
