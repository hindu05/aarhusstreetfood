//Slick.js slideshow
/*$(document).ready(function(){
$('.slickshow').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true
});
});
*/
//modified by codepen user: greeeeg
window.onload=function(){
  $('.slider').slick({
  autoplay:true,
  autoplaySpeed:1800,
  speed: 600,
  dots: true,
  centerMode:true,
  slidesToShow:3,
  slidesToScroll:1,
  centerMode: true,
  variableWidth: true
  });
};




//variabler til sortering
var notMad = $('.kitchenitem').not('.mad');
var notDrikke = $('.kitchenitem').not('.drikke');
var notVegetar = $('.kitchenitem').not('.vegetar');
var notVegan = $('.kitchenitem').not('.vegan');
var notLaktose = $('.kitchenitem').not('.laktosefri');

$(document).on('change','#sorting',function(){
//check value en ad gangen...
	if($(this).val()==1) {
	   		//alert('1');
	   		$('.kitchenitem').show(0);
	}
	else{
	   	if($(this).val()=="mad") {	
   			notMad.hide(0);
   			$('.mad').show(0);
		}
	   	else{
	   		if($(this).val()=="drikke") {
		   		notDrikke.hide(0);
		   		$('.drikke').show(0);
			}
			else {
				if($(this).val()=="vegetar") {
	   				notVegetar.hide(0);
	   				$('.vegetar').show(0);
				}
				else {
					if($(this).val()=="vegan") {
		   				notVegan.hide(0);
		   				$('.vegan').show(0);
					}
					else {
						if($(this).val()=="laktosefri") {
			   				notLaktose.hide(0);
			   				$('.laktosefri').show(0);
			   			}
					}
				}
			}	
		}
	}
});
