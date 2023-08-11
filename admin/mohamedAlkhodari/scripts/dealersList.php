<?php
        $sql = "SELECT * FROM dealers";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['phoneNumber'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td><a href='scripts/deleteDealerScript.php?id=" . $row['ID'] . "' class='btn btn-danger' onclick='return confirmDelete()'>حذف</a></td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='5'>No users found.</td></tr>";
        }
        ?>

<script>
function confirmDelete() {
    return confirm("هل انت متاكد من حذف هذا المندوب");
}
</script>