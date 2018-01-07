$(".left-navbar-content").click(function(){

});

$("#toggle-top-navbar").click(function(){
    var topNavbarHeight = $("#top-navbar").height();
    if(topNavbarHeight === 93){
        // console.log("topNavbar height on 93px");
        $("#top-navbar").css("height","215px");
    }else if(topNavbarHeight === 215){
        $("#top-navbar").css("height","93px");
    }
});

function initWindow(){
    if($(window).width() <=500){
        $("#top-navbar").css("height","93px");
    }else if($(window).width() > 648){
        $("#top-navbar").css("height","42px");
    }else{
        $("#top-navbar").css("height","202px");
    }
}

function changePage(path){
    window.location.href = path;
}

initWindow();


$(window).resize(function(){
   if($(window).width() <=500){
       $("#top-navbar").css("height","93px");
   }else if($(window).width() > 648){
       $("#top-navbar").css("height","42px");
   }else{
       $("#top-navbar").css("height","202px");
   }
});

$(".left-navbar-content").click(function(){
   var hrefId = $(this).children(".left-navbar-content-a").prop("innerHTML");
   var trimmedHrefId = hrefId.toString().trim();

   if(trimmedHrefId.toLowerCase() === "koleksi"){
        changePage("/WebApp1/pages/koleksi.php");
   }else if(trimmedHrefId.toLowerCase() === "beranda"){
        changePage("/WebApp1/index.php");
   }else if(trimmedHrefId.toLowerCase() === "buku tamu"){
        changePage("/WebApp1/pages/buku-tamu.php");
   }else{
        changePage("/WebApp1/index.php");
   }
});


