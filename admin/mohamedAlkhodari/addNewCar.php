<?php
    include('../../database.php');
    include('../scripts/gettingFirstName.php');
    include('scripts/add_car.php');

    // Define $message variable with an empty string
    $message = '';
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="سيارات مستعملة في الإمارات، سيارات مستعملة في الشارقة،سيارات مستعملة في الشارقة،سيارات مستعملة في عجمان، بيع السيارات في الإمارات، سيارات مستعملة للبيع في الإمارات" />
        <meta name="title" content="سيارات مستعملة للبيع في أبوظبي، دبي، الشارقة، الإمارات | سيارات مستعملة في الإمارات - معرض الخضري للسيارات" />
        <meta
            name="description"
            content="أفضل معرض للسيارات المستعملة لشراء وبيع السيارات الفاخرة المستعملة في الشارقة، عجمان، دبي، الإمارات. اعثر على أكبر تشكيلة من السيارات المستعملة للبيع في الإمارات. اشتري سيارات مستعملة في الإمارات. معرض الخضري للسيارات المستعملة"
        />

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="../../assets/img/DarkLogo.png" type="image/x-icon" class="favicon" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Noto+Sans+Arabic:wght@700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet" />

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="../assets/css/all.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />

        <!--================== Unicons CSS =================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <title>ALKHODARI SHOWROOMS - Admin</title>
    </head>

    <body>
        <!--************* MAIN CODE ****************-->

        <main class="main">
            <body>
                <?php include('sidebar.php'); ?>

                <main class="main">
                    <section class="form-section section">
                        <div class="form-container">
                            <h2 class="form-header">إضافة سيارة جديدة</h2>
                            <?php echo $message; ?>
                            <form class="car-form" method="POST" action="scripts/add_car.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group">
            <label for="brand">الماركة</label>
            <input type="text" id="brand" name="brand" required />
        </div>
        <div class="form-group">
            <label for="model">الموديل</label>
            <input type="text" id="model" name="model" required />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="year">السنة</label>
            <input type="number" id="year" name="year" required />
        </div>
        <div class="form-group">
            <label for="kilometers">عدد الكيلومترات</label>
            <input type="number" id="kilometers" name="kilometers" required />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="color">اللون</label>
            <input type="text" id="color" name="color" required />
        </div>
        <div class="form-group">
            <label for="fuel">نوع الوقود</label>
            <input type="text" id="fuel" name="fuel" required />
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="seats">عدد المقاعد</label>
            <input type="number" id="seats" name="seats" required />
        </div>
        <div class="form-group">
            <label for="seats">السعر</label>
            <input type="number" id="price" name="price" required />
        </div>
        <div class="form-group">
            <label for="cylinder">عدد السلندر</label>
            <input type="number" id="cylinder" name="cylinder" required />
        </div>
    </div>
    <div class="form-group">
        <label for="description">الوصف</label>
        <textarea style="width: 100%;" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="images">صور السيارة (يمكن رفع أكثر من صورة)</label>
        <input type="file" id="images" name="images[]" accept="image/*" multiple required />
    </div>

    <div class="form-group">
        <button type="submit" style="width: 80px;" name="addCar" class="btn myBtn">إضافة</button>
    </div>
</form>
                        </div>
                    </section>
                </main>
            </body>
        </main>

        <script src="https://unpkg.com/scrollreveal"></script>
        <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
        <script src="../assets/js/scrollrevealAnimation.min.js"></script>

        <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
