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


$(document).ready(function(){
    $("#cards_form").submit(function(event){
        if(!$(".delete-checkbox").is(":checked")){
            event.preventDefault();
        }
    })
});


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
        $(".error").load("scripts/product_submission.php", {
            sku: sku,
            name: name,
            price: price,
            productType: productType,
            size: size,
            weight: weight,
            height: height,
            length: length,
            width: width,
            save: save
        },
        function(){
            let errorMsg = document.getElementById('error-msg');
            if(errorMsg.textContent.trim() === ''){
                window.location.replace("../index.php?error=none");
            }else{
                $("#icon").attr("hidden", false);
            }

        })
    });
});

