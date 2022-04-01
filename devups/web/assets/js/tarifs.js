var priceElt =  $(".price"),
original_price = priceElt.attr('data-price');
$( ".devise" ).val("EUR_EUR");

$( ".devise" ).change(function() {
    
   
    var selectedCurrency = $(this).val();
    var curr = selectedCurrency.split('_');
    $(".currency").html(curr[1]);

    if(selectedCurrency == "EUR_EUR"){
        $('.price').each(function(i, obj) {
            var originalprice = $(this).attr('data-price');
            $(this).html(originalprice); 
        });
    }else{
        $(".price").html('<img height="35px" src="assets/img/loader.gif" class=""/>');

        $.getJSON("/getrate/"+selectedCurrency,
        function(data){
            $('.price').each(function(i, obj) {
                var originalprice = $(this).attr('data-price');
                var result = originalprice * data['rate'];
                $(this).html(result.toFixed(4)); 
            });
        });
    }

});
