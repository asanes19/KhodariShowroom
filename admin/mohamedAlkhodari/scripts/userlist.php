<?php

$sql = "SELECT * FROM khusers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $row['firstName'] . "</td>";
        echo "<td>" . $row['lastName'] . "</td>";
        echo "<td>" . $row['userName'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
        $count++;
    }
} else {
    echo "<tr><td colspan='4'>No users found.</td></tr>";
}
?>
