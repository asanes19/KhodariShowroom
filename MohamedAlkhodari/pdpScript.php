<?php
include('../database.php');

if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Fetch car data for the specific car using its ID
    $carDataQuery = "SELECT * FROM khcars WHERE ID = $carId";
    $carDataResult = mysqli_query($conn, $carDataQuery);

    // Check if the query was successful and fetch the car data
    if ($carDataResult && mysqli_num_rows($carDataResult) > 0) {
        $carData = mysqli_fetch_assoc($carDataResult);
    } else {
        // Handle the case where car data is not found (e.g., redirect to an error page or display an error message)
        // For example, redirect to carsList.php with an error message
        header("Location: carsList.php?error=CarNotFound");
        exit();
    }

    // Fetch car images for the specific car using its ID
    $carImagesQuery = "SELECT image_path FROM car_images WHERE car_id = $carId";
    $carImagesResult = mysqli_query($conn, $carImagesQuery);
}
?>