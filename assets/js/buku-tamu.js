$("#submitBukuTamu").click(function(){
    var namaTamu = $("#nama_tamu").val();
    var saranTamu = $("#saran_tamu").val();

    if(namaTamu === ""
    || namaTamu === undefined
    || saranTamu === ""
    || saranTamu === undefined){
        alert("Form Masih Kosong");
    }else{
        $.ajax({
           url : "http://localhost/WebApp1/models/ws/buku-tamu/save.php",
           method : "POST",
           headers :{"Content-type":"application/x-www-form-urlencoded"},
           data : {
               nama : namaTamu,
               saran : saranTamu.toString().trim()
           },
           success : function(data,textStatus,jqXhr){
                alert("Saran anda berhasil disimpan ke database");
                clearForm(["#nama_tamu","#saran_tamu"]);
           },
           error : function(jqXhr,textStatus,errorThrown){
               console.log(errorThrown);
           }
        });
    }

});