$(function() {
    let table = {
        'bg-pop':{
            '0': 'd-none',
            '1':'d-block',            
        }
    }
   
    function showhidepopup(a,b){
        $.each(table[a]), function(i,elem){
            let c = elem[1-b];                
            $.each(elem), function(i,elem){
                if(b.toString() == i){
                    $(a).removeClass(attr(elem)).addClass(c.childen[0]);                    
                    $(a).attr("data-pop",1-b);
                }
            }
        }
    }
    
    $('.call').click(function(){
        showhidepopup($(".bg-pop"),$(".bg-pop").attr("data-pop"));
    })
    
});