$(document).ready(function(){
    $("#productType").on("change",function(){
        if($("#productType").val() == "dvd" == true){
            $(".form-dynamic").empty()
            $(".form-dynamic").append("<div class='form-group'><label for='form-dvd'>Please enter size of DVD (MB)</label><input type='number' name='attribute' class='form-control' id='size' placeholder='Size'></div>")
        } else if($("#productType").val() == "book" == true){
            $(".form-dynamic").empty()
            $(".form-dynamic").append("<div class='form-group'><label for='form-book'>Please enter weight of book (kg)</label><input type='number' name='attribute' class='form-control' id='weight' placeholder='Weight'></div>")
        } else {
            $(".form-dynamic").empty()
            $(".form-dynamic").append("<div class='form-group'><label for='form-furniture-height'>Please enter height of furniture</label><input type='number' name='attribute' class='form-control' id='height' placeholder='Height'></div>")
            $(".form-dynamic").append("<div class='form-group'><label for='form-furniture-width'>Please enter width of furniture</label><input type='number' name='attribute' class='form-control' id='width' placeholder='Width'></div>")
            $(".form-dynamic").append("<div class='form-group'><label for='form-furniture-length'>Please enter length of furniture</label><input type='number' name='attribute' class='form-control' id='length' placeholder='Length'></div>")
        }
    })
})



