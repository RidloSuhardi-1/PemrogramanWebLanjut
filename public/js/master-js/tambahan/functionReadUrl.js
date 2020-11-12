function previewFile(input){
    var file = $("#imgName").get(0).files[0];

    if(file){
        var reader = new FileReader();

        reader.onload = function(){
            $("#imgHolder").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
}