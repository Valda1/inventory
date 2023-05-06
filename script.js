//loaded after the entire HTML document gets loaded if you add ready function

/*function validateForm(){
    //var sku = document.forms["product-form"]["sku"].value;
    //var name = document.forms["product-form"]["name"].value;
    //var price = document.forms["product-form"]["price"].value;

    if(document.getElementById('sku').value == ""){
        alert('Please enter SKU!');
        return false;
    }
};*/

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







