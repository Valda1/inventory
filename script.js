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
    $("#cancelBtn").click(function(){
        window.location.replace("http://localhost/task/index.php");
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
        //var cancel = $("#cancelBtn").val();
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
            //cancel: cancel
        },
        function(){
            let errorMsg = document.getElementById('error-msg');
            if(errorMsg.textContent.trim() === ''){
                window.location.replace("http://localhost/task/index.php?error=none");
            }

        })
    });
});







