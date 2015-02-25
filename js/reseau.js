$(function(){
	$('.stick').each(function(){
		var parent = $(this).parent();
		var dTop = $(this).offset().top;
		var elem = $(this);
		parent.css('position','relative');
		elem.css('position','absolute');
		$(window).scroll(function(){
			if(scrollY()>dTOP){
				elem.stopanimate({top:scrollY()-parent.offset().top+20},500)
			}
		});
	});
});

function scrollY(){
	scrOfY = 0;
	if(typeof(window.pageYOffset) =='number'){
		scrOfY = window.pageYOffset;
	}else if(document.body&&(document.body.scrollTop)){
		scrOfY = document.body.scrollTop;
	}else if(document.documentElement&&(document.documentElement.scrollTop)){
		scrOfY = document.documentElement.scrollTop;
	} return scrOfY;
}