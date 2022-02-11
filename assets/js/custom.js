//dashboard-hideandshow

$(document).ready(function(){
    $('.calcbtn').click(function(){
        $('#headdwrap').hide();
        $('#hide').show();
    });
    
    // show booking main form on update click
    $('.ref-icn').click(function(){
        $('#headdwrap').show();
        $('#hide').hide();
    });
});


// $(document).ready(function()
//     $('.payment-type').click(function(){
//         $('#payment-modal').hide();
//         $('.modal-backdrop').hide();
//         $('#credit-modal').show();
//     });
// });

// NAVIGATION
initializeStellarNav(1, '#main-nav');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}


// INDEX BANNER SLIDER
var swiper = new Swiper(".index-banner-slider", {
	loop: true,
	autoplay: {
	    delay: 5000,
	    disableOnInteraction: true,
	},
	pagination: {
        el: ".index-banner-slider .swiper-pagination",
        dynamicBullets: false,
    },
    navigation: {
        nextEl: ".index-banner-slider .swiper-button-next",
        prevEl: ".index-banner-slider .swiper-button-prev",
    },
});

// INDEX NEWS SLIDER
var swiper = new Swiper(".index-news-slider", {
	slidesPerView: 3,
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 5000,
		disableOnInteraction: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		576: {
			slidesPerView: 2,
		},
		880: {
			slidesPerView: 3,
		},
	}
});

// INDEX CLIENT SLIDER
var swiper = new Swiper(".clients-slider", {
	slidesPerView: 1.5,
	spaceBetween: 45,
	loop: true,
// 	autoplay: {
// 	    delay: 5000,
// 	    disableOnInteraction: true,
// 	},
	pagination: {
        el: ".clients-slider .swiper-pagination",
        dynamicBullets: false,
    },
    breakpoints: {
		0: {
			slidesPerView: 1,
		},
		576: {
			slidesPerView: 2,
		},
		1024: {
			slidesPerView: 1.5,
		},
	}
});

// MISSION SLIDER
var swiper = new Swiper(".mission-slider", {
	slidesPerView: 2,
	spaceBetween: 30,
	centeredSlides: true,
	loop: true,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	 breakpoints: {
		0: {
			slidesPerView: 1,
		},
		1024: {
			slidesPerView: 2,
		},
	}
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});


// PRODUCT DETAILS SLIDER
var productSliderThumbs = new Swiper('.product-detail-slider-thumbs', {
  spaceBetween: 10,
  slidesPerView: 6,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  breakpoints: {
    0: {
      slidesPerView: 5,
    },
    480: {
      slidesPerView: 6,
    },
  },
  navigation: {
    nextEl: '.product-detail-slider-thumbs .swiper-button-next',
    prevEl: '.product-detail-slider-thumbs .swiper-button-prev',
  },
});
var productSlider = new Swiper('.product-detail-slider', {
  spaceBetween: 10,
  grabCursor: true,
  navigation: {
    nextEl: '.product-detail-slider .swiper-button-next',
    prevEl: '.product-detail-slider .swiper-button-prev',
  },
  thumbs: {
    swiper: productSliderThumbs
  }
});

// LOGIN SIGNUP FORM
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login_wrap = document.getElementById('login-modal-wrap');

signUpButton.addEventListener('click', () => {
  login_wrap.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  login_wrap.classList.remove("right-panel-active");
});
//accordian-start



