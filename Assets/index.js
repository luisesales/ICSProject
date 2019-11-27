$(function() {    
    master = "12345678";
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
    
    $('.call').click(function(){
        if($(this).attr("data-type") == "0"){
            $('#quarto_id').html($($($(this).parent().children().children())[1]).val());
        }
        changeclass($(this).attr("data-function"),$($(".bg-pop")[$(this).attr("data-item")]).attr("data-pop"),$(".bg-pop"),$(this).attr("data-item"));
    })    
    $(".tri").click(function(){
        ShowHideArea($(".sub"));
    })
    $(".change").click(function(){
        changeclass($(this).attr("data-function"),$($(".navbar-nav")[0]).attr("data-pop"),$(".navbar-nav"),0);
        changeclass($(this).attr("data-function"),$($(".navbar-nav")[1]).attr("data-pop"),$(".navbar-nav"),1);
        changeclass($(this).attr("data-function"),$($(".navbar-nav")[2]).attr("data-pop"),$(".navbar-nav"),2);
        changeclass($(this).attr("data-function"),$($(".navbar-nav")[3]).attr("data-pop"),$(".navbar-nav"),3);
        
    })  
    $(".log").click(function(){
        if($("#pass").val() == master){           
            changeclass(1,$($(".navbar-nav")[0]).attr("data-pop"),$(".navbar-nav"),0);
            changeclass(1,$($(".navbar-nav")[1]).attr("data-pop"),$(".navbar-nav"),1);
            changeclass(1,$($(".navbar-nav")[2]).attr("data-pop"),$(".navbar-nav"),2);
            changeclass(1,$($(".navbar-nav")[3]).attr("data-pop"),$(".navbar-nav"),3);
            $("#pass").attr("placeholder","");
            
        }
        else{
            $("#pass").attr("placeholder","Senha Incorreta");
        }
        $("#pass").value = "";
    }) 
    $(".search").click(function(){
        if($("#pass").val() != ""){
            changeclass($(this).attr("data-function"),$($(".bg-pop")[$(this).attr("data-item")]).attr("data-pop"),$(".bg-pop"),$(this).attr("data-item"));
        }
    })
});