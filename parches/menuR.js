//Scrip encargado de la funcion Menu Responsive//
$('.VerMenuIco').on('click',function(){
	$('nav').toggleClass('VerMenu');
});

//Scrip encargado del Fancybox 
       
            
            $(".fancyOther").fancybox({
                width       : '600',
                height      : '75%',
              
                transitionIn: 'elastic', 
                transitionOut: 'elastic', 
                speedin: 400,
                speedOut: 200,
                autoSize    : false,
                closeClick  : false,
             
        });
