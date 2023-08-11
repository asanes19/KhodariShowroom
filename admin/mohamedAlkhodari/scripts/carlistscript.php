<?php

$sql = "SELECT * FROM khcars";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $count = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td><a href='scripts/deleteCar.php?id=" . $row['ID'] . "' class='btn btn-danger' onclick='return confirmDelete()'>حذف</a></td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['fuel'] . "</td>";
        echo "<td>" . $row['seats'] . "</td>";
        echo "<td>" . $row['cylinder'] . "</td>";
        echo "<td>" . $row['kilometers'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $count . "</td>";
        echo "</tr>";
        $count++;
    }
} else {
    echo "<tr><td colspan='10'>No cars found.</td></tr>";
}
?>

<script>
function confirmDelete() {
    return confirm("هل انت متاكد من حذف هذه السيارة");
}
</script>