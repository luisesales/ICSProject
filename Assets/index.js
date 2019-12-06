$(function() {           
    $(".sub").hide();
    let table = {
        '0':{
            '0': 'd-none',
            '1': 'd-block',            
        },
        '1':{
            '0': 'd-none',
            '1': '',            
        }
    }   
    function changeclass(a,b,c,d){    
        $.each(table[a],function(i,elem){                             
                if(b == i){                              
                    $(c[d]).removeClass(elem)                    
                    $(c[d]).addClass(table[a][1-i]);                                      
                    $(c[d]).attr("data-pop",1-b);                
                }
            });
    }

    function ShowHideArea(a){
        if($(a).is(":visible")){$(a).slideUp(1);}               
            else {$(a).slideDown(1);}    
    }
    
    $('.call').click(function(quarto){        
        changeclass($(this).attr("data-function"),$($(".bg-pop")[$(this).attr("data-item")]).attr("data-pop"),$(".bg-pop"),$(this).attr("data-item"));
    })    
    $(".tri").click(function(){
        ShowHideArea($(".sub"));
    })

});