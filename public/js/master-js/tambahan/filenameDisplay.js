$("#imgName").change(function(){
    $("#fileName").text(this.files[0].name);
  });