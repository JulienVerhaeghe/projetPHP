"use strict";
$(function() {

     var first = true;
     var previousBtn;
        //lors d'un click sur un bouton precedent ou suivant
     $(window).on("popstate",function(event){

                if(!first)		update(location.href);
                else 			first = false;
    });

    refreshListener();



function refreshListener(){

 $('.nav').on('click','a', function(event){

            event.preventDefault();
            var $this = $(this);
            //on utilise history pour pouvoir naviguer avec retour arriére et avant malgré l'usage de l'ajax
            history.pushState(null,null,$this.attr("href"));
            //chargement de la page demandé
            toggleButton($this);
            update($this.attr("href"));
    });
     $('ul,.bottom').on('click','a', function(event){

            event.preventDefault();
            var $this = $(this);
            //on utilise history pour pouvoir naviguer avec retour arriére et avant malgré l'usage de l'ajax
            history.pushState(null,null,$this.attr("href"));
            //chargement de la page demandé
            
            update($this.attr("href"));
    });

}
    
    
    
        
function toggleButton(button){
     
     if(previousBtn){
         previousBtn.removeClass("activate");
     }
     button.addClass("activate");
     previousBtn = button;
}

function update(url){
     
     $.when(
             $.ajax({url:url,datatype:'html'}),
             $('#row2').fadeOut()
     ).done(function(argsAJAX,elem){
             var data = argsAJAX[0];
             

             var contenu = $(data).find('#row2');
             console.log(contenu);
             $('#row2').html(contenu.html());
             $('#row2').fadeIn();
            refreshListener();
     });
 }
   });