<?php

require("db_connectionform.php");

// Start or resume the session
session_start();

if(isset($_POST["product_id"])){
    $product_id = $_POST["product_id"];

    // Assuming you have a session started and a database connection
    if (isset($_SESSION['user']['id'])) {
        $userid = $_SESSION['user']['id'];

        $delete = "DELETE FROM cart WHERE productid = $product_id AND userid = $userid AND status=0";
        var_dump($delete);
        
        // Check for errors in the SQL query execution
        if ($connect->query($delete) === TRUE) {
            echo "Record deleted successfully";
            
        } else {
            echo "Error deleting record: " . $connect->error;
        }
    } else {
        echo "User ID not set in session.";
    }
}



// This delete.php file will handle the deletion of products from the cart. It retrieves the product ID from the form submission, checks if the product belongs to the logged-in user, and if it does, it deletes the entry from the cart table.