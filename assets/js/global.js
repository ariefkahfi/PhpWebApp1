function clearForm(listOfIds){
    listOfIds.forEach(function(val){
        $(val).val("");
    });
}