<?php 
include('../../database.php');
include('../scripts/gettingFirstName.php');
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
        <?php include('sidebar.php'); ?>

        <section class="form-section section">
    <div class="form-container">
        <h2 class="form-header">إضافة مندوب جديد</h2>
        <form class="user-form" method="POST" action="scripts/addNewDealer.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstName">الاسم الأول:</label>
                <input type="text" id="firstName" name="firstName" required />
            </div>
            <div class="form-group">
                <label for="lastName">الاسم الثاني:</label>
                <input type="text" id="lastName" name="lastName" required />
            </div>
            <div class="form-group">
                <label for="phoneNumber">رقم الهاتف:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required />
            </div>
            <div class="form-group">
                <label for="image">صورة المندوب:</label>
                <input type="file" id="image" name="image" required />
            </div>
            <div class="form-group">
                <button type="submit" style="width: 80px;" name="addNewDealer" class="btn myBtn">إضافة</button>
            </div>
        </form>
    </div>
</section>
        </main>
    </body>


        <script src="https://unpkg.com/scrollreveal"></script>
        <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
        <script src="../assets/js/scrollrevealAnimation.min.js"></script>

        <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
