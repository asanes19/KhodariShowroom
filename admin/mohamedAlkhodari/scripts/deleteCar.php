<?php
include('db_connection.php');


if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Retrieve image paths associated with the car from the database
    $getImagePathsQuery = "SELECT image_path FROM car_images WHERE car_id = '$carId'";
    $imagePathsResult = mysqli_query($conn, $getImagePathsQuery);

    while ($imageData = mysqli_fetch_assoc($imagePathsResult)) {
        $imagePath = $imageData['image_path'];

        // Delete the image file from the folder
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the car entry from the database
    $deleteCarQuery = "DELETE FROM khcars WHERE ID = '$carId'";
    mysqli_query($conn, $deleteCarQuery);

    // Delete image entries associated with the car from the database
    $deleteImageQuery = "DELETE FROM car_images WHERE car_id = '$carId'";
    mysqli_query($conn, $deleteImageQuery);

    // Redirect back to the cars list page after deletion
    header("Location: ../carsList.php");
    exit();
}
?>
