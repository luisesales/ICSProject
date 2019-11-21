$(function() {
    $(".sub").hide();
    let table = {
        '0':{
            '0': 'd-none',
            '1':'d-block',            
        }
    }
   
    function changeclass(a,b,c,d){        
        $.each(table[a],function(i,elem){ 
                if(b.toString() == i){  
                    $(c[d]).removeClass(elem)
                    $(c[d]).addClass(table[a][1-i]);                  
                    $(c[d]).attr("data-pop",1-b);
                }
            });
    }
    function ShowHideArea(a){
        if($(a).is(":visible")){$(a).slideUp();}               
            else {$(a).slideDown();}    
    }
    
    $('.call').click(function(){
        changeclass($(this).attr("data-function"),$(".bg-pop").attr("data-pop"),$(".bg-pop"),$(this).attr("data-item"));
    })    
    $(".tri").click(function(){
        ShowHideArea($(".sub"));
    })
    
});