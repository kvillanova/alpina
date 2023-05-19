const logos_container_largura = jQuery('.logos-container').innerWidth();
const logos_wrapper_largura = jQuery('.logos-wrapper').innerWidth();

if(logos_wrapper_largura > logos_container_largura) {
    jQuery('.content-wrapper').css({'justify-content': 'flex-start'});
    jQuery('.logos').clone().appendTo('.logos-wrapper');
    jQuery('.logos').clone().appendTo('.logos-wrapper');

    const moverEsquerda = setInterval(function(){
        jQuery('.logos-wrapper').css('left', '-=10');

        if(parseInt(jQuery('.logos-wrapper').css('left')) <= -logos_wrapper_largura) {
           jQuery('.logos-wrapper').css('left', '0px');
        } 
    },100);
}