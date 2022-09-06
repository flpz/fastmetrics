( function() {

  var youtube = document.querySelectorAll( ".youtube" );
  
  for (var i = 0; i < youtube.length; i++) {
    
    var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
    
    var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
          youtube[ i ].appendChild( image );
        }( i ) );
    
        youtube[i].addEventListener( "click", function() {

          var iframe = document.createElement( "iframe" );

              iframe.setAttribute( "frameborder", "0" );
              iframe.setAttribute( "allowfullscreen", "" );
              iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

              this.innerHTML = "";
              this.appendChild( iframe );
        } );  
  };
  
} )();

jQuery(document).ready(function(){
if(jQuery(window).width()<1200){
	jQuery('.header-menu > li').on('click',function(){
		jQuery('.header-menu > li > ul').hide();
		jQuery(this).children('.header-menu > li > ul').slideToggle();
	});
}
var ua=navigator.userAgent,iOS=/iPad|iPhone|iPod/.test(ua);if(iOS){jQuery("body").addClass("iosBugFixCaret");}

jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>400){jQuery("#totop").fadeIn();}else{jQuery("#totop").fadeOut();}});jQuery("#totop").click(function(){jQuery("body,html").animate({scrollTop:0},800);return false;});var nav=jQuery('#header');jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>0){nav.addClass("f-nav");}else{nav.removeClass("f-nav");}});jQuery('.skip').on('click',function(event){event.preventDefault();jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top},500);});jQuery('.mobile-menu-toggle').click(function(){jQuery(".header-menu").slideToggle(500);});var $animation_elements=$('.animation-element');var $window=$(window);function check_if_in_view(){var window_height=$window.height();var window_top_position=$window.scrollTop();var window_bottom_position=(window_top_position+window_height);$.each($animation_elements,function(){var $element=$(this);var element_height=$element.outerHeight();var element_top_position=$element.offset().top;var element_bottom_position=(element_top_position+element_height);if((element_bottom_position>=window_top_position)&&(element_top_position<=window_bottom_position)){$element.addClass('in-view');}});}$window.on('scroll resize',check_if_in_view);$window.trigger('scroll');
//jQuery("#signupform").validate({rules:{zip:"required",address:"required",business:"required",unittype:"required",unitnumber:"required",},messages:{zip:"Please enter your ZIP code",address:"Please enter your address",business:"No residential service. Commercial buildings only.",unittype:"Please select your unit type",unitnumber:"Please select your unit number",}});
//jQuery("#signupformsuggestions").validate({rules:{address:"required",},messages:{address:"Please select your address",}});
var a=0;jQuery(window).scroll(function(){var oTop=jQuery('#counter').offset().top-window.innerHeight;if(a==0&&jQuery(window).scrollTop()>oTop){jQuery('.counter-value').each(function(){var $this=jQuery(this),countTo=$this.attr('data-count');jQuery({countNum:$this.text()}).animate({countNum:countTo},{duration:2000,easing:'swing',step:function(){$this.text(Math.floor(this.countNum));},complete:function(){$this.text(this.countNum);}});});a=1;}});


jQuery('.customers-slider').slick({dots:false,arrows:true,autoplay:true,autoplaySpeed:8000,fade:false,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:420,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:1}}]});
  
jQuery('.reviews-slider').slick({dots:false,arrows:true,autoplay:true,autoplaySpeed:5000,fade:false,slidesToShow:1,slidesToScroll:1,adaptiveHeight:true});
jQuery('.flip').hover(function(){jQuery(this).find('.card').toggleClass('flipped');});
});

//jQuery('.lazy').Lazy();
//jQuery("#contactform").validate({rules:{name:"required",email:{required:true,email:true},company:"required",address:"required",zip:{required:true,digits:true,minlength:5,maxlength:5},},messages:{name:"Please enter your name",email:"Please enter a valid email address",company:"Please enter your company name",address:"Please enter your business address"}});

jQuery('.home-reviews-slider').slick({
	dots:false,
	arrows:true,
	fade:false,
	slidesToShow:1,
	adaptiveHeight: true
	});
	
/*
jQuery("#signupform").validate({
	rules:{
		address:"required",
		zip:"required",
		business:"required",
		contactname:"required",
		phone:"required",
		email:"required"
	},
	messages:{
		address:"Please enter an address",
		zip:"Please enter a ZIP code",
		business:"Your address should be a business address",
		contactname:"Please enter a name",
		phone:"Please enter a phone number",
		email:"Please enter an email address"
	}
});

jQuery("#servicesform").validate({
	rules:{
		speed:"required",
		term:"required",
		phonelines:"required"
	},
	messages:{
		speed:"Please select internet speeds",
		term:"Please select a term",
		phonelines:"Please select number of phone lines"
	}
});

jQuery('#term').on('change',function () {
	if (this.value == 1) {
		jQuery(".dect").hide(500);
	} else {
		jQuery(".dect").show(500);
	}
	jQuery(".services").show(500);
});

jQuery('#wap').on('change',function () {
	if (this.value != '') {
		jQuery(".managedrouter").hide(500);
	} else {
		jQuery(".managedrouter").show(500);
	}
});

var ckbox = jQuery('#dnsfiltering');
jQuery('#dnsfiltering').on('click',function () {
	if (ckbox.is(':checked')) {
		jQuery(".dnsfilteringusers").show(500);
	} else {
		jQuery(".dnsfilteringusers").hide(500);
	}
});

jQuery("#billingform").validate({
	rules:{
		businessname:"required",
		contactname:"required",
		email:{required:true,email:true},
		phone:"required"
	},
	messages:{
		businessname:"Please enter a business name",
		contactname:"Please enter a first name",
		email:"Please enter a valid email address",
		phone:"Please enter a phone number"
	}
});

var ckboxx = jQuery('#samecontact');
jQuery('#samecontact').on('click',function () {
	if (ckboxx.is(':checked')) {
		jQuery(".billinginfo").hide(500);
	} else {
		jQuery(".billinginfo").show(500);
	}
});

setTimeout(function() {
    if (!jQuery.cookie('survey-popup')) {
		jQuery('#book').modal('show');
		jQuery.cookie('survey-popup', true, { expires: 7, path: '/' });
	}
}, 25000);
*/
jQuery("#ticketform").validate({rules:{name:"required",email:{required:true,email:true},company:"required",phone:"required",subject:"required",message:"required",},messages:{name:"Please enter your name",email:"Please enter a valid email address",company:"Please enter your company name",phone:"Please enter your phone number",subject:"Please enter a subject",message:"Please describe your issue",}});