$('.sl').slick({
 	autoplay: true,
 	autoplaySpeed: 10000,
 	draggable: false,
 	cssEase: 'ease-in',
 	asNavFor: '.sl2'
 
});

$('.sl2').slick({
	 arrows: false,
	 slidesToShow: 5,
	 centerMode: true,
	 asNavFor: '.sl',
	 focusOnSelect: false,
	 draggable: false,
	 responsive: [
    {
      breakpoint: 900,
      settings: { 
      slidesToShow: 5,

      }
    },
    {
      breakpoint: 720,
      settings: { 
       slidesToShow: 4,

      }
    },
    {
      breakpoint: 600,
      settings: { 
       slidesToShow: 3,

      }
    },
    {
      breakpoint: 480,
      settings: { 
      slidesToShow: 2,

      }
    },
    
  ]
});