//loaded after the entire HTML document gets loaded if you add ready function

function validateForm(){
    if(product-form.sku.value.length == 0){
        document.getElementById("sku-input-feedback").value = "Please enter the SKU!";
        return false;
    }
};

/*$(document).ready(function(){
    $('#type').on('change', function(){
        var demovalue = $(this).val();
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});*/

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
