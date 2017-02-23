$(document).ready(function(){
	$(".show-Types").sideNav({edge:'right',draggable:true});
	$('select').material_select();
	$('.select-SortBy').on('change',function(){
		var actionRoute = $('.active span').attr('route');
		$(this).parent().attr('action',actionRoute);
		$(this).parent().submit();
	});
});
$(window).on('load',function(){
	$('body').removeClass('hidden-Scroll');
	$('.loader-Section img').fadeOut(1000,function(){
		$(this).parent().fadeOut(2000,function(){
			$(this).remove();
		});
	});
});