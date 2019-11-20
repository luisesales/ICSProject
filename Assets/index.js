$(function() {
    let table = {
        '0':{
            '0': 'd-none',
            '1':'d-block',            
        }
    }
   
    function showhidepopup(a,b,c){        
        $.each(table[a],function(i,elem){ 
                if(b.toString() == i){               
                    $(c).removeClass(elem)
                    $(c).addClass(table[a][1-i]);                  
                    $(c).attr("data-pop",1-b);
                }
            });
    }
    
    $('.call').click(function(){
        showhidepopup($(this).attr("data-function"),$(".bg-pop").attr("data-pop"),$(".bg-pop"));
    })
    
});