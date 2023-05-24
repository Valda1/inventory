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

let productForm = document.getElementById('product_form');

productForm.addEventListener('submit', function(event){
    event.preventDefault();
    const formattedFormData = new FormData(productForm);

    /*const formattedFormData = {
        sku: this.sku.value,
        name: this.name.value,
        price: this.price.value,
        productType: this.productType.value,
        size: this.size.value,
        weight: this.weight.value,
        height: this.height.value,
        length: this.length.value,
        width: this.width.value
    }*/
    postData(formattedFormData);

    /*let formData = new FormData(productForm);
    let data = Object.fromEntries(formData);
    let jsonData = JSON.stringify(data);

    fetch('code_for_adding.php', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: jsonData //was formData
    }).then(res => res.json())
    .then(result => console.log(result.data))
    .catch(err => console.log(err))*/
});

async function postData(formattedFormData){
    const response = await fetch('code_for_adding.php', {
        method: 'POST',
        body: formattedFormData
    });
    const data = await response.text();
    console.log(data);
}

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
                save: save
                //error: error
            },
            success: function(data){
                alert("problem");
                alert(data);
            },
            error: function(request, status, error){
                alert("Error: Could not delete");
            }
        })
    });
    
});*/

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
        }, function(data){
            if(!empty(data)){
                alert("empty fields");
            }else{
                alert("no error");
            }
            //alert(data);
        });
    });
});*/









