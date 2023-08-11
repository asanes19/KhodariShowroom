<?php
include('db_connection.php');

// Query to count the total number of cars in the database
$countQuery = "SELECT COUNT(*) AS totalCars FROM khcars";
$countResult = mysqli_query($conn, $countQuery);

// Check if the query was successful
if ($countResult) {
    // Fetch the result as an associative array
    $countData = mysqli_fetch_assoc($countResult);
    $totalCars = $countData['totalCars'];
} else {
    // Handle the case where the query failed (e.g., show an error message)
    $totalCars = 'N/A'; // You can set this to any default value you prefer
}
?>
