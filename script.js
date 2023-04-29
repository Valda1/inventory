//loaded after the entire HTML document gets loaded if you add ready function

$(document).ready(function(){
    $('#type').on('change', function(){
        var demovalue = $(this).val();
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});

/*$('.type').change(function(){
    var responseType = $(this).val();
    if(responseType == "DVD"){
        $('#DVD').removeClass("hidden");
        //$("#DVD").removeAttr('hidden');
        $("#DVD").show();
        //$('#DVD').addClass("show");
    }else if (responseType == "Furniture"){
        //$("#Furniture").removeAttr('hidden');
        $('#Furniture').removeClass("hidden");
        $("#Furniture").show();
        //$('#Furniture').addClass("show");
    }else if (responseType == "Book"){
        //$("#Book").removeAttr('hidden');
        $('#Book').removeClass("hidden");
        $("#Book").show();
        //$('#Book').addClass("show");
    }
});*/




/*if("#type" === "#choice-1"){
    $("#DVD").removeAttr('hidden');
}

if("#type" === "#choice-1"){
    $("#DVD").show();
}

if("#type" === "#choice-2"){
    $("#Furniture").show();
}

if("#type" === "#choice-2"){
    $("#Book").show();
};*/

//.change()
