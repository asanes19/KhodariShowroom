<?php
include('db_connection.php');

if (isset($_GET['id'])) {
    $dealerId = $_GET['id'];

    // Retrieve image path for the dealer from the database
    $getImagePathQuery = "SELECT image FROM dealers WHERE ID = '$dealerId'";
    $imagePathResult = mysqli_query($conn, $getImagePathQuery);
    $imageData = mysqli_fetch_assoc($imagePathResult);
    $imagePath = $imageData['image'];

    // Delete the image file from the folder
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Delete the dealer entry from the database
    $deleteQuery = "DELETE FROM dealers WHERE ID = '$dealerId'";
    if (mysqli_query($conn, $deleteQuery)) {
        // Redirect back to the dealers list page after deletion
        header("Location: ../dealers.php");
        exit();
    } else {
        // Handle the case where the deletion failed (e.g., show an error message)
        echo "Error deleting dealer: " . mysqli_error($conn);
    }
}
?>
