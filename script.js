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
            save: save
        },
        function(){
            let errorMsg = document.getElementById('error-msg');
            if(errorMsg.textContent.trim() === ''){
                window.location.replace("http://localhost/task/index.php?error=none");
            }

        })
    });
});

/*function fetchForm(){
    let productForm = document.getElementById('product_form');
    let formData = new FormData(productForm);
    var errorMsg = "<?php echo $e; ?>";

    productForm.addEventListener('submit', async function(event){
        event.preventDefault();

        await fetch('add-product.php', {
            method: 'POST',
            body: formData
        })
        /*.then(function(response){
            if(!response.ok){
                let errorElement = document.querySelector('#error-msg');
                errorElement.innerHTML = 'Error!';
            }
        })*/
        /*.then(res => res.text())
        .then(function(res){
            if(res.status === '400'){
                alert("yes");
            }
        })*/
        //.then(txt => console.log(txt))
        /*.then(function(errorMsg){
            document.write(errorMsg);
        })*/
        //.then(document.getElementById('error-msg').innerHTML = errorMsg);
        //.catch(err => console.log(err));
        //return false;
        /*.then(e => {
            output = `
            <span class='error'>" . ${e} . "</span> <br>
            `;
            document.getElementById('error-msg').innerHTML = output;
        })*/
    //});

    
//}*/

    //let formData = new FormData(productForm);
    //let data = Object.fromEntries(formData);
    //let jsonData = JSON.stringify(data);

    /*fetch('code_for_adding.php', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: jsonData //was formData
    }).then(res => res.json())
    .then(result => console.log(result.data))
    .catch(err => console.log(err))
});*/









