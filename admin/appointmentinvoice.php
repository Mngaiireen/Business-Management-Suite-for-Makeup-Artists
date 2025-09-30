<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['bpmsaid']) == 0) {
    header('location:logout.php');
    exit(); // Exit script to prevent further execution
}

if (isset($_POST['submit'])) {
    $invoiceid = mt_rand(100000000, 999999999); // Generate invoice ID
    
    // Iterate through selected services and insert invoice records
    if (isset($_POST['sids'])) {
        $selected_services = $_POST['sids'];
        foreach ($selected_services as $svid) {
            $svid = intval($svid);
            // Assuming $aptid holds the AppointmentID
            $ret = mysqli_query($con, "INSERT INTO tblinvoice (AppointmentID, ServiceId, BillingId) VALUES ('$aptid', '$svid', '$invoiceid')");
        }
        
        // Display success message and redirect
        echo '<script>alert("Invoice created successfully. Invoice number is '.$invoiceid.'")</script>';
        echo "<script>window.location.href ='invoices.php'</script>";
    } else {
        // Handle case where no services are selected
        echo '<script>alert("Please select at least one service.")</script>';
        echo "<script>window.location.href ='invoice_form.php'</script>";
    }
} else {
    // Redirect to the form page if form is not submitted
    header('location:invoice_form.php');
    exit(); // Exit script to prevent further execution
}
?>
