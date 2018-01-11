<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="http://localhost/libs/js/jQuery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/WebApp1/assets/css/navbar.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/global.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/form.css"/>
</head>
<body>
    <?php include "../assets/html/navbar.php" ?>

    <div class="right-container">
        <div class="right-inner-container">
            <h3 class="right-inner-container-title">Buku Tamu</h3>
        </div>
        <div class="right-inner-container" id="form-buku-tamu-container">
            <h3 class="right-inner-container-title" id="form-buku-tamu-title">Form Buku Tamu</h3>
            <div class="right-inner-content">
                <div class="form-wrapper">
                    <div class="form-row clearfix">
                        <label for="nama_tamu" class="form-label">Nama</label>
                        <input type="text" id="nama_tamu" class="form-input"/>
                    </div>
                    <div class="form-row clearfix">
                        <label for="saran_tamu" class="form-label">Saran Anda</label>
                        <textarea class="form-input" id="saran_tamu" cols="30" rows="10">

                        </textarea>
                    </div>
                    <div class="form-row clearfix">
                        <button class="form-button form-button-blue" id="submitBukuTamu">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
    <script src="/WebApp1/assets/js/global.js"></script>
    <script src="/WebApp1/assets/js/navbar.js"></script>
    <script src="/WebApp1/assets/js/buku-tamu.js"></script>
</html>