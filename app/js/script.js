$(document).ready(function(){
	$(".about-item").each(function(i) {
	$(this).find("a").attr("href", "#work_" + i);
	$(this).find(".about-descr").attr("id", "work_" + i);
	});

	$(".popup_content").magnificPopup({
		type: "inline",
		midClick: true,
		gallery : {
		  enabled : true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
		
	});
	
});



//Меню jquery
$(document).ready(function(){
//menu
			var touch = $('#touch-menu');
		    var menu = $('.nav');
		 
		    $(touch).on('click', function(e){
		        e.preventDefault();
		        menu.slideToggle();
		    });
		    $(window).resize(function(){
		        var wid = $(window).width();
		        if(wid > 768 && menu.is(':hidden')){
		            menu.removeAttr('style');
		        }
		    });
		
		});


//картинки  
$(document).ready(function(){
	$(".lul").magnificPopup({
		type : 'image',
		gallery : {
		  enabled : true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});
	
});
