$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".myDiv").not("." + optionValue).hide();
                $("." + optionValue).show();
            }else{
                $(".myDiv").hide();
            }
        });
    }).change();
});

/*$(document).ready(function(){
    $("#product_form").submit(function(event){
        event.preventDefault();
        var sku = $("#sku").val();
        var name = $("#name").val();
        var price = $("#price").val();
        var productType = $("#productType").val();
        var size = $("#size").val();
        var weight = $("#weight").val();
        var height = $("#height").val();
        var length = $("#length").val();
        var width = $("#width").val();
        var save = $("#saveBtn").val();
        //var error = $("#errorMsg").val();
        $.ajax ({
            url: 'code_for_adding.php',
            type: 'POST',
            datatype: JSON,
            data: {
                sku: sku,
                name: name,
                price: price,
                productType: productType,
                size: size,
                weight: weight,
                height: height,
                length: length,
                width: width,
                save: save,
                //error: error
            },
            success: function(data){
                if(data == 'false'){
                    window.location.replace('index.php?error=none');
                }
                alert(data);
            },
            error: function(request, status, error){
                alert("Error: Could not delete");
            }
        })
    });
    
});*/

$(document).ready(function(){
    $("#product_form").submit(function(event){
        event.preventDefault();
        var sku = $("#sku").val();
        var name = $("#name").val();
        var price = $("#price").val();
        var productType = $("#productType").val();
        var size = $("#size").val();
        var weight = $("#weight").val();
        var height = $("#height").val();
        var length = $("#length").val();
        var width = $("#width").val();
        var save = $("#saveBtn").val();
        //var error = $("#errorMsg").val();
        $(".error").load("code_for_adding.php", {
            sku: sku,
            name: name,
            price: price,
            productType: productType,
            size: size,
            weight: weight,
            height: height,
            length: length,
            width: width,
            save: save,
            //hasErrors: "<?php echo $hasErrors ?>"
            //'error': error
        }/*, function(data){
            if(data != null){
                window.location.replace('index.php?error=none');
            }
            alert(data);
        }*/);
    });
});









