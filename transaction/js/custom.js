$(function() {

    $('.progress-bar').each(function() {
        var bar_value = $(this).attr('aria-valuenow') +'%';

        $(this).animate({ width: bar_value }, { duration: 3000, easing: 'easeOutCirc' }); 
    });

    $('#valid_acces').click(function(){
        if($("#code_acces").val()== "649209") {
            $('.progress-bar').each(function() {
                var bar_value = $(this).attr('aria-valueun') +'%';
        
                $(this).animate({ width: bar_value }, { duration: 1500, easing: 'easeOutCirc' }); 
            });
            $("#code_acces").hide();
            $("#valid_acces").hide();
            $("#code_virement").show();
            $("#valid_virement").show();
        } else{
            alert("Invalid");
        }

    });



    $('#valid_virement').click(function(){

        if($("#code_virement").val()== "687245") {
            $('.progress-bar').each(function() {
                var bar_value = $(this).attr('aria-valuedeux') +'%';
        
                $(this).animate({ width: bar_value }, { duration: 1500, easing: 'easeOutCirc' }); 
    
                $("#code_acces").hide();
                $("#valid_acces").hide();
                $("#code_virement").hide();
                $("#valid_virement").hide();
                $("#valid_valid").show();
                $("#code_validation").show();
            });
        } else {
            alert("Invalid code");
        }
        
       

    });

    $('#valid_valid').click(function(){

        if($("#code_validation").val()== "099615") {
        
            $('.progress-bar').each(function() {
                var bar_value = $(this).attr('aria-valuetrois') +'%';
        
                $(this).animate({ width: bar_value }, { duration: 1500, easing: 'easeOutCirc' }); 

                $("#code_acces").hide();
                $("#valid_acces").hide();
                $("#code_virement").hide();
                $("#valid_virement").hide();
                $("#valid_valid").show();
                $("#code_validation").show();
                setTimeout(pause, 2000); 
                function pause () {
                    document.location.href = "response.html"
                }
            });
        } else {
            alert("Invalid Code");
        }

    });

    //makeProgress(75, 10)
    
    /* 
    function makeProgress(pourcent){
        if(i <pourcent){
            i = i + 1;
            $('.progress-bar').css("width", pourcent).text(i + " %");
        }
    }

    $('.progress-bar').each(function() {
        var bar_value = $(this).attr('aria-valuenow') +'%';

        $(this).animate({ width: bar_value }, { duration: 3000, easing: 'easeOutCirc' }); 
    });

    $('#setun').click(function(){
    
        $('.progress-bar').each(function() {
            var bar_value = $(this).attr('aria-valuemax') + '%';
    
            $(this).animate({ width: bar_value }, { duration: 3000, easing: 'easeOutCirc' }); 
        });

        
    });

    $('#valid_transfert').click(function(){
        var code = $('#code_secret').val();
        if(code == '1234') {
            $('#count_bar').jQuerySimpleCounter({
                start: 75,
                end: 100,
                easing: 'linear',
                duration: 600,
                complete: '',
            });
    
            $('.progress-bar').each(function() {
                var bar_value = $(this).attr('aria-valuemax') + '%';
        
                $(this).animate({ width: bar_value }, { duration: 3000, easing: 'easeOutCirc' }); 
            });

            $('#code_secret').hide();

        } else {
            alert("Faux code");
        }
        
    });

     */

}) 