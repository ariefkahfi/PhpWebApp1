<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="http://localhost/libs/js/jQuery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/WebApp1/assets/css/navbar.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/global.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/dialog.css"/>
</head>
<body>
    <?php include "../assets/html/navbar.php" ?>

    <div class="right-container">
        <div class="right-inner-container">
            <h3 class="right-inner-container-title" id="detail_title"></h3>
        </div>
        <div class="right-inner-container">
            <h3 class="right-inner-container-title" id="detail_kategori"></h3>
        </div>
        <div class="right-inner-container">
            <div class="right-inner-content" >
                <div class="right-inner-content-image-wrapper" id="detail_gambar_container">
<!--                    <img src="" alt="" class="right-inner-content-image"/>-->
                </div>
                <p id="detail_deskripsi"></p>
            </div>
        </div>
    </div>

</body>
    <script src="/WebApp1/assets/js/navbar.js"></script>
    <script src="/WebApp1/assets/js/deskripsi-buku.js"></script>
    <script src="/WebApp1/assets/js/global.js"></script>
</html>