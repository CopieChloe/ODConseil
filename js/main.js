$(document).ready(function() {     
     
    let position = $(window).scrollTop(); 

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > position) {
            console.log('scrollDown');
            $('.menu_header').addClass('menu_reduce');
            
            $('.selected').addClass('menu_reduce');
            $('.selected_link').addClass('menu_reduce');
            $('.logo_menu').addClass('logo_menu_reduce');
            $('.menu_large_ul').addClass('menu_reduce');
            $('.logo_menu_container').addClass('menu_reduce');
            
        } else {
            console.log('scrollUp');
            $('.menu_header').removeClass('menu_reduce');
            
            $('.selected').removeClass('menu_reduce');
            $('.selected_link').removeClass('menu_reduce');
            $('.logo_menu').removeClass('logo_menu_reduce');
            $('.menu_large_ul').removeClass('menu_reduce');
            $('.logo_menu_container').removeClass('menu_reduce');
            

            
        }
        position = scroll;
    });

    console.log(scroll);

    $('.carousel').carousel();
    $('.dropdown-trigger').dropdown({ constrainWidth: false, alignment: 'right' });
    $('.tabs').tabs();

    $('.menu_link_dropdown').dropdown({ constrainWidth: false, alignment: 'right', hover: true, coverTrigger: false });

    $('.btn-secondary').click(function() {
        $('.btn-secondary').addClass('btn-click');  
      });

    $(function(){
        $('.menu_link').each(function(){
            
            if ($(this).prop('href') == window.location.href) {
                $(this).parents('li').addClass('selected');
                $(this).addClass('selected_link');
            }
        });
    });
    
    $(function(){
        if($('main').is('.home_page_type')){
            jQuery(window).scroll(function() {	
                //fetch élt ds le DOM
                var wholeDiv = jQuery(".main_container_home_large");
                
                var textSlideRight = jQuery(".txt_home_large_1");
                var imageSlideDown = jQuery(".img_home_large");
                var subtitleSlideLeft = jQuery(".subtitle_home_large");
                var textSlideUp = jQuery(".txt_home_large_2");
                
                //définir le top de l'offset de l'élt
                var toOfWholeDiv = jQuery(wholeDiv).offset().top;
                
                //définir le bottom de la window
                var bottom_of_screen = jQuery(window).scrollTop() + jQuery(window).height();
                            
                //si le bottom de la window est supérieur au top l'offset de l'élt,
                if ((bottom_of_screen > (toOfWholeDiv + 400))){	
                    //alors ajoute à cet élt (en fait ici ts les élts) la classe 		
                    jQuery(textSlideRight).addClass("slide_right");
                    jQuery(imageSlideDown).addClass("slide_down");
                    jQuery(subtitleSlideLeft).addClass("slide_left");
                    jQuery(textSlideUp).addClass("slide_up");
    
                } 
    
            });
        }
      });
        
      $(function(){
        if($('main').is('.who_page_type')){
            jQuery(window).scroll(function() {	
                //fetch élt ds le DOM
                var paragraphWho = jQuery(".qui_content");
                
                var textSlideRightWho = jQuery(".qui_paragraph");
                var textSlideLeftWho = jQuery(".qui_paragraph2");
                
                //définir le top de l'offset de l'élt
                var paragraphWho = jQuery(".qui_content");
                var topOfParagraphWho = jQuery(paragraphWho).offset().top;
                
                //définir le bottom de la window
                var bottom_of_screen = jQuery(window).scrollTop() + jQuery(window).height();
                            
                //si le bottom de la window est supérieur au top l'offset de l'élt,
                if ((bottom_of_screen > (topOfParagraphWho + 170))){	
                    //alors ajoute à cet élt (en fait ici ts les élts) la classe 		
                    jQuery(textSlideRightWho).addClass("slide_right_who");
                    jQuery(textSlideLeftWho).addClass("slide_left_who");
        
                } 
        
        });
        }
      });
       
         

    
    

});

