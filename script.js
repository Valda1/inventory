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

/*$(document).ready(function() {
    $(document).on('submit', '#product_form', function(event) {
      event.preventDefault();
    
      alert('page did not reload');
    });
  });*/

$('#product_form').submit(function(){
    $.post("code_for_adding.php");
});








