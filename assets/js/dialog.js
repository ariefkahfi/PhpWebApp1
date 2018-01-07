$("#koleksi-dialog-outer-container").hide();



$("#tambah-koleksi").click(function(){
    console.log("dialog opened");
    $("#koleksi-dialog-outer-container").toggle();
});

window.onclick = function(event){
    var clickedElement = event.target;
    if(event.target.id === "koleksi-dialog-outer-container"){
        $("#koleksi-dialog-outer-container").hide();
    }
}