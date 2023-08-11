<?php
    include('../../../database.php');

// Check if the form is submitted
if (isset($_POST['addNewUser'])) {
    // Retrieve data from the form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // Perform any validation on the data if needed

    // Connect to the database (ensure you have the database.php file included here)

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO khusers (firstName, lastName, userName, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $userName, $password);

    // Execute the statement to insert data
    if (mysqli_stmt_execute($stmt)) {
        // Data inserted successfully, redirect back to the user list page
        header("Location: ../users.php");
        exit();
    } else {
        // Error occurred, handle it accordingly
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
