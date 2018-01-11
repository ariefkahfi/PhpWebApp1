<?php

    $nama_berkas = "/var/www/html/WebApp1/counter/counter.txt";
    if(file_exists($nama_berkas)){
        $berkas = fopen($nama_berkas,"r");
        $pencacah = (integer)trim(fgets($berkas,255));
        $pencacah++;
        fclose($berkas);
    }else
        $pencacah = 1;

    $berkas = fopen($nama_berkas,"w");
    fputs($berkas,$pencacah);
    fclose($berkas);
?>
<nav id="top-navbar-fixed-container">
    <nav id="top-navbar">
        <div id="top-navbar-item-container">
            <h3 class="title space" id="title-top-navbar">
                Arief Al-Kahfi
            </h3>
            <div id="top-navbar-visitor-counter-container" class="space">
                <span>
                    <?php echo $pencacah;?>
                </span>
            </div>
        </div>
        <div id="top-navbar-secondary-item-container">
            <!--<div id="counter-visitor-container" class="clearfix">-->
                <!--<span id="counter-visitor">Counter Visitor Here</span><i class="fa fa-list fa-fw" id="toggle-top-navbar"></i>-->
            <!--</div>-->
            <div class="horizontal-line"></div>
            <div class="left-navbar-content">
                <i class="fa fa-user fa-fw"></i><a class="left-navbar-content-a">Beranda</a>
            </div>
            <div class="left-navbar-content">
                <i class="fa fa-archive fa-fw"></i><a class="left-navbar-content-a">Koleksi</a>
            </div>
            <div class="left-navbar-content">
                <i class="fa fa-address-book fa-fw"></i><a class="left-navbar-content-a">Buku Tamu</a>
            </div>
        </div>
    </nav>
</nav>

<nav id="left-navbar">
    <h3 class="title" id="left-navbar-title">Sidebar Nav</h3>
    <div id="left-navbar-container">
        <div class="left-navbar-content">
            <i class="fa fa-user fa-fw"></i><a class="left-navbar-content-a" id="b-a">Beranda</a>
        </div>
        <div class="left-navbar-content">
            <i class="fa fa-archive fa-fw"></i><a class="left-navbar-content-a" id="k-a">Koleksi</a>
        </div>
        <div class="left-navbar-content">
            <i class="fa fa-address-book fa-fw"></i><a class="left-navbar-content-a" id="b-t-a">Buku Tamu</a>
        </div>
    </div>
</nav>
