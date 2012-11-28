// Zepto/jQuery fadeLoop plugin for fade slide show effects by ali.md
(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 4000,
				startIndex : -1,
				fadeFirstImage : true
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut);
			options.fadeFirstImage || pics.eq(0).css(fadeIn);

			(nextPic=function(){
				pics.eq(indx).animate(fadeOut,options.duration,ease);
				indx=indx<plen-1?indx+1:0;
				pics.eq(indx).animate(fadeIn,options.duration,ease,function(){
					setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)


$(function(){
	$('.backimg > div').fadeLoop();

	$('.content_plc > div').animate({
			right : 0 ,
			top: '70px' ,
	},1000,'swing')

	//gallery
	$('.pic_plc').animate({
		right : 0 ,
		top: '70px'
	},1000,'swing')
	// $('.gallery a>div').animate({
	// 	height: '200px'
	// },2000,'swing')
});
function showContent(div){
	//$('#'+div).css({'right':'0px'});
	// $('#contact').animate({
	// 	right: '-650px' ,
	// },1000,'swing',function(){
	// 	$('#'+div).animate({
	// 		right : 0 
	// 	},1000,'swing')

	// })
	$('.content > div').animate({
		right: '-650px' ,
	},1000,'swing');
	$('#'+div).animate({
			right : 0 
	},1000,'swing')
	
}
function playVideo(videoName){
	$('.show_film').css({
		display: 'block' ,
	});

	$('#'+videoName).css({
		display: 'block' ,
	});

	$('.move').animate({
		marginRight: '0px'
	},2000,'swing')
}
function showList(){
	$('.move').animate({
		marginRight: '-580px'
	},2000,'swing',function(){
		$('.show_film').css({
			display: 'none' ,
		});
		$('.video embed').css({
			display: 'none' ,
		});
	});	
}