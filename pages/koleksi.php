<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koleksi</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="http://localhost/libs/js/jQuery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/WebApp1/assets/css/navbar.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/global.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/dialog.css"/>
    <link rel="stylesheet" href="/WebApp1/assets/css/form.css"/>
</head>
<body>
    <?php include "../assets/html/navbar.html";?>
    <div class="right-container">
        <div class="right-inner-container clearfix">
            <h3 class="right-inner-container-title" id="koleksi-title">Koleksi</h3>
            <div id="tambah-koleksi">
                <i class="fa fa-lg fa-plus fa-fw"></i>Tambah Koleksi
            </div>
        </div>
        <div class="right-inner-container">
            <div class="card-container clearfix" id="card-container">

<!--                <div class="card">-->
<!--                    <img src="../assets/images/book1.jpg" class="card-image"/>-->
<!--                    <div class="card-content">-->
<!--                        <p>-->
<!--                            Card Text Card Text-->
<!--                            Card Text Card Text-->
<!--                            Card Text Card Text-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </div>
    </div>

    <div class="dialog-outer-container" id="koleksi-dialog-outer-container">
        <div class="dialog-inner-container">
            <h3 class="dialog-inner-container-title">Tambah Koleksi Buku</h3>
            <div class="dialog-inner-container-content">
<!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
                <div class="form-wrapper">
                    <div class="form-row clearfix">
                        <label for="nama_buku" class="form-label">Nama Buku</label>
                        <input type="text" id="nama_buku" class="form-input"/>
                    </div>
                    <div class="form-row clearfix">
                        <label for="kategori_buku" class="form-label">Kategori Buku</label>
                        <select id="kategori_buku" class="form-input">
                            <option value="novel">Novel</option>
                            <option value="pendidikan">Pendidikan</option>
                            <option value="politik">Politik</option>
                        </select>
                    </div>
                    <div class="form-row clearfix">
                        <label for="pilih_buku_container" class="form-label">Pilih File</label>
                        <div id="pilih_buku_container" class="form-input">
                            <input type="file" id="pilih_buku"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <button class="form-button-blue form-button" id="upload_file">Submit Data</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
    <script src="/WebApp1/assets/js/global.js"></script>
    <script src="/WebApp1/assets/js/koleksi.js"></script>
    <script src="/WebApp1/assets/js/navbar.js"></script>
    <script src="/WebApp1/assets/js/dialog.js"></script>
</html>