<?php
// get_cars.php

include('../database.php');

$sql = "SELECT * FROM khcars";
$result = mysqli_query($conn, $sql);
?>

<?php if (mysqli_num_rows($result) > 0): ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <?php
        $carId = $row['ID'];
        $imageQuery = "SELECT image_path FROM car_images WHERE car_id = '$carId' ORDER BY RAND() LIMIT 1";
        $imageResult = mysqli_query($conn, $imageQuery);
        $imageData = mysqli_fetch_assoc($imageResult);
        ?>
        <article class="carCard animate-element">
                        <div class="carCheckbox">
                            <span></span>
                        </div>

                        <div class="carPrice">AED <?= $row['price']; ?></div>
                        <!-- Add the checkbox div here -->
                        <div class="carDet">
                            <div class="carPic">
                                <!-- Your car image here -->
                                <img src="../admin/mohamedAlkhodari/scripts/<?= $imageData['image_path']; ?>" alt="Car Image" />
                            </div>
                            <div class="carInfo">
                                <div>
                                    <h2><?= $row['brand']; ?> <?= $row['model']; ?></h2>
                                </div>
                                <div class="carDetails">
                                    <div class="infoRow">
                                        <p><?= $row['year']; ?> <i class="fas fa-calendar-alt"></i></p>
                                        <p><?= $row['color']; ?> <i class="fas fa-paint-brush"></i></p>
                                        <p><?= $row['fuel']; ?> <i class="fas fa-gas-pump"></i></p>
                                        <p><?= number_format($row['kilometers']); ?> كم <i class="fas fa-road"></i></p>
                                    </div>
                                </div>
                            </div>

                            <div class="carBtn">
                                <a href="pdp.php?id=<?= $row['ID']; ?>"><button>التفاصيل</button></a>
                            </div>
                        </div>
                    </article>
        </article>
    <?php endwhile; ?>
<?php else: ?>
    <p>No cars found.</p>
<?php endif; ?>
