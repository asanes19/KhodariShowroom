<?php
include('../../../database.php');

if (isset($_POST['addNewDealer'])) {
    // Process form fields
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    
    // Handle image upload
    $targetDirectory = 'car_images/';
    $imageName = $_FILES['image']['name'];
    $imagePath = $targetDirectory . basename($imageName);
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
        // Image upload successful
        // Prepare the SQL query to insert the user data into the database
        $insertQuery = "INSERT INTO dealers (FirstName, LastName, phoneNumber, image) 
                        VALUES ('$firstName', '$lastName', '$phoneNumber', '$imagePath')";
        
        // Execute the query
        if (mysqli_query($conn, $insertQuery)) {
            // Redirect to a success page or back to the form page with a success message
            header("Location: ../dealers.php");
            exit();
        } else {
            // Handle the case where the insertion failed (e.g., show an error message)
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle the case where image upload failed (e.g., show an error message)
        echo "Error uploading image.";
    }
}
?>
