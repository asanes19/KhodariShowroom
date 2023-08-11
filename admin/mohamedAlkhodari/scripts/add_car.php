<?php
include('db_connection.php');
// Rest of the add_car script



    if (isset($_POST['addCar'])) {
        // Process car details form fields
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $kilometers = $_POST['kilometers'];
        $color = $_POST['color'];
        $fuel = $_POST['fuel'];
        $seats = $_POST['seats'];
        $cylinder = $_POST['cylinder'];
        $description = $_POST['description'];
        $price = $_POST['price'];
    
        // Insert car details into the cars table
        $insertCarQuery = "INSERT INTO khcars (brand, model, year, kilometers, color, fuel, seats, cylinder, description, price) 
                           VALUES ('$brand', '$model', '$year', '$kilometers', '$color', '$fuel', '$seats', '$cylinder', '$description', '$price')";
        mysqli_query($conn, $insertCarQuery);
        $carId = mysqli_insert_id($conn); // Get the ID of the newly inserted car
    
           // Handle car images uploads
    if (!empty($_FILES['images']['name'][0])) {
        $imagePaths = array();
        $targetDirectory = 'car_images/'; // Directory to store car images
    
        foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
            $imageName = $_FILES['images']['name'][$key];
            $ext = pathinfo($imageName, PATHINFO_EXTENSION);
            $uniqueImageName = uniqid() . '_' . mt_rand(1000, 9999) . '.' . $ext;
            $imagePath = $targetDirectory . $uniqueImageName;
            move_uploaded_file($tmpName, $imagePath);
            $imagePaths[] = $imagePath;

            // Insert image paths into the car_images table
            $insertImageQuery = "INSERT INTO car_images (car_id, image_path) VALUES ('$carId', '$imagePath')";
            mysqli_query($conn, $insertImageQuery);
        }
    }

    header("Location: ../carsList.php");
    exit();
}
?>