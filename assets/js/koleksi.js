
var selectedFile = null;
var msg = null;



function resetFormUpload(){
    clearForm(["#nama_buku"]);
    $("#pilih_buku").val(null);
    selectedFile = null;
}


resetFormUpload();

$("#pilih_buku").change(function(){
    var firstFile = $(this).prop("files")[0];

    var fileSize = firstFile.size;
    var fileName = firstFile.name;
    var fileType = firstFile.type;


    var validImageType = fileType.toString().trim().search("image");

    if(fileSize  < 50000000 && validImageType !== -1){
        selectedFile = firstFile;
    }

});

var testDelete = function(fileId, fileUrl){
    var lastPathOfUrl = fileUrl.lastIndexOf("/");
    var fileUrlLength = fileUrl.length;
    var realFileName = fileUrl.substr(lastPathOfUrl+1,fileUrlLength);
    var result = window.confirm("hapus koleksi ini ? ");
    if(result){
        doDeleteFile(fileId,realFileName);
    }else{
        console.log("else on window.confirm ....");
    }
};

function doDeleteFile(fileId,realFileName){
    $.ajax({
        url : "http://localhost/WebApp1/models/ws/koleksi/delete-file.php?file_id="+fileId+"&file_name="+realFileName,
        method : "GET",
        success : function(data, txtStatus , jqXhr){
            console.log(data);
            loadGambarBuku();
        },
        error : function(jqXhr , textStatus ,errorThrown){
            console.log(errorThrown);
        }
    });
}


function addCardToItsContainer(data){
    $("#card-container").empty();
    data.forEach(function(val){
        console.log(val);
        $("#card-container")
            .append(`
                <div class="card">
                    <img src="${val.url}" class="card-image"/>
                    <div class="card-content clearfix">
                        <div class="card-title">${val.nama}</div>
                        <div class="card-description">${val.kategori}</div>
                        <span class="card-delete" onclick="testDelete('${val.id}','${val.url}')"><i class="fa fa-trash-o fa-fw"></i></span>
                    </div>
                </div>
            `);
    });
}

function loadGambarBuku(){
    $.ajax({
       url : "http://localhost/WebApp1/models/ws/koleksi/download.php",
       method:"GET",
       success : function(data,textStatus,jqXhr){
            addCardToItsContainer(data);
       },
       error : function(jqXhr,textStatus,errorThrown){
           console.log(errorThrown);
       }
    });
}

loadGambarBuku();



$("#upload_file").click(function(){
    var namaBuku = $("#nama_buku").val();
    var kategoriBuku = $("#kategori_buku").val();


    if(namaBuku === "" || namaBuku === undefined
    || kategoriBuku === "" || kategoriBuku === undefined){
        alert("Masih ada form kosong");
    }else if (selectedFile === null){
        alert("file doesn't meet requirements");
    }else{
        console.log("doUploadFunction ...");
        var formData = new FormData();

        formData.append("nama_buku",namaBuku);
        formData.append("kategori_buku",kategoriBuku);
        formData.append("file_buku",selectedFile);

        $.ajax({
            url : "http://localhost/WebApp1/models/ws/koleksi/upload.php",
            method : "POST",
            data : formData,
            contentType: false,
            processData : false,
            success : function(data,textStatus , jqXhr){
                alert(data);
                resetFormUpload();
                loadGambarBuku();
            },
            error : function(jqXhr , textStatus , errorThrown){
                console.log(errorThrown);
            }
        });
    }

});

