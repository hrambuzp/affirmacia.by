(function ($) {
  'use strict';

  $(document).ready(function () {

     	function affTabs(){
  		var $wrapper=$('.tab-wrapper'),
  			$menu=$wrapper.find('.tab-menu li'),
  			$content=$wrapper.find('.thumbs-row');

  			$content.not(':first-of-type').hide();
  			$content.each(function(i){
  				$(this).attr('data-tab','tab-'+i);
    		});
    		$menu.each(function(i){
  				$(this).attr('data-tab','tab-'+i);
    		});

    		$menu.click(function(){
    			var $getWrapper=$(this).closest($wrapper),
    			dataTab=$(this).attr('data-tab');

    			$getWrapper.find($menu).find('a').removeClass('active');
    			$(this).find('a').addClass('active');

    			$getWrapper.find($content).hide();
    			$getWrapper.find($content).filter('[data-tab='+dataTab+']').show();
    		});
  	}



  	affTabs();

 
  	function affmenu(){
  		var $trigger=$('.trigger-nav'),
  			$menu=$('.trigger-victim');

  		$trigger.click(function(){
  			$(this).next($menu).slideToggle();
  		});

  		$(window).resize(function(){
  			if($(window).width()>1200){
  				$menu.removeAttr('style');
  			}
  		});
  	}
 	
 	affmenu();


 	function slider(width_li, margin_right_li, col_view_img){
 		var step=width_li+margin_right_li,
 		slider_box_width=col_view_img*step-margin_right_li,
 		col_img=$("#slider_box>ul>li").length,
 		col_main_left=0,
 		max_col_main_left=$col_img*step;
 		$("#slider_box").width(slider_box_width);
 		$("#slider_box>ul>li").width(width_li).css("margin-right",margin_right_li);
 		$("#left_nav").click(function(){
 			if(-col_main_left==max_col_main_left-col_view_img*step){
 				col_main_left=0;
 			} else{
 				col_main_left=col_main_left-step;
 			}
 			$("#slider_box>ul").css("margin-left",col_main_left+"px");
 		});
 		$("#right_nav").click(function(){
 			if(col_main_left==0){
 				col_main_left=max_col_main_left+col_view_img*step;
 			} else{
 				col_main_left=col_main_left+step;
 			}
 			$("#slider_box>ul").css("margin-left",col_main_left+"px");
 		});
 	}
 	$(slider(200,10,4));

  }); //end ready


}(jQuery));