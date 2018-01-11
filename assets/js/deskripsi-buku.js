
function loadDeskripsiBuku(){
    var idParam = window.location.search;
    var validId = idParam.substr(1,idParam.length);
    var lastIndexOfId = validId.substr(validId.lastIndexOf("=")+1,validId.length);


    $.ajax({
       url : "http://localhost/WebApp1/models/ws/koleksi/downloadById.php?id="+lastIndexOfId,
       method : "GET",
       success : function(data,textStatus,jqXhr){
           var arrayObj = JSON.parse(data);
           var singleResult = arrayObj[0];



           $("#detail_title").append(singleResult.nama);
           $("#detail_gambar_container").html(
               `<img src="${singleResult.url}" class="right-inner-content-image"/>`
           );
           $("#detail_kategori").append("<b>Kategori : </b>"+ singleResult.kategori);
           $("#detail_deskripsi").html(singleResult.deskripsi_buku);
       },
       error : function(jqXhr,textStatus,errThrown){
            console.log(errThrown);
       }
    });

}

loadDeskripsiBuku();