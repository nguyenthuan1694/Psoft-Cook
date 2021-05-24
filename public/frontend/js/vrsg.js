jQuery(document).ready(function($){
	$('.related-product .col-12').slick({
		dots:false,
		infinite: true,
		speed: 500,
		slidesToShow: 4,
		slidesToScroll: 2,
		nextArrow:'<span class="next"><i class="ti-arrow-right"></i></span>',
		prevArrow:'<span class="prev"><i class="ti-arrow-left"></i></span>',
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				}
			},
		]
	});
	$('.wrap-image-pro').slick({
		dots:false,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		speed: 500,
		asNavFor: '.thumnail'
	});
	$('.thumnail').slick({
		slidesToShow: 4,
		slidesToScroll: 1,

		arrows: true,
		asNavFor: '.wrap-image-pro',
		dots: false,
		autoplay: true,
		autoplaySpeed: 4000,
		infinite: true,
		centerMode: true,
		focusOnSelect: true,
		nextArrow:'<span class="next"><i class="ti-angle-right"></i></span>',
		prevArrow:'<span class="prev"><i class="ti-angle-left"></i></span>',
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 980,
				settings: {
					slidesToShow: 2,
				}
			},
		]
	});
	$(window).scroll(function(){
		if($(this).scrollTop()> 150){
			$('.header-menu').addClass('fixed')
		}
		else {
			$('.header-menu').removeClass('fixed')
		}

		if($(this).scrollTop()> 250){
			$('.backtotop').addClass('active')
		}
		else {
			$('.backtotop').removeClass('active')
		}
	})
	/*if($(window).width()<767){
		$('.sign-up').slick({
		dots:false,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		infinite: true,

  		focusOnSelect: true,
	});
	}*/
	/*-----------------------END SLICK---------------------------------*/
	$('.remove-item').click(function() {
		$(this).parents('.item-view-cart').remove();
	})
	$('.btn-plus').click(function() {
		var input = $(this).siblings('input');
		input.val(+input.val()+1);
	})
	$('.btn-minus').click(function() {
		var input = $(this).siblings('input');
		if(input.val() >1){
			input.val(+input.val()-1);
		}
		else {
			$('#cartModal').modal('show')
		}

	})
	$('.backtotop').click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
	})

	$("div.list-group a.list-group-item").click(function() {
        $(this).parent().children().removeClass("active");
        $(this).addClass("active");
	});
	
	$(".ul-menu,.button-menu").click(function(event){
		event.stopPropagation();
	});

	// $(".ul-menu .sub-ul-menu li a").click(function(event){
	// 	$("a.active").each(function () {
	// 		$(this).removeClass("active");
	// 	});
	// 	console.log($('.ul-menu li a'))
	// 	$(this).addClass('active')
	// 	event.stopPropagation();
	// });
	
	$("input[name='fullname']").keyup(function() {
		$('.name-input').text($(this).val())
	});
	$("input[name='phone']").keyup(function() {
		$('.phone-input').text($(this).val())
	});
	$("input[name='email']").keyup(function() {
		$('.email-input').text($(this).val())
	});
	$("input[name='house_number']").keyup(function() {
		getAddressString();
	});
	$("textarea[name='note']").keyup(function() {
		$('.note').text($(this).val())
	});
	if($(window).width()<768){
		$('.button-menu').click(function(){
			$('.opened').removeClass('opened')
			$(this).toggleClass('menu-opened');
			$('.ul-menu').slideToggle();
		})
		$("body").click(function(event){
			if(!$('.ul-menu').is(':hidden')){
				$('.ul-menu').slideToggle();
				$('.button-menu').removeClass('menu-opened');
			}
		});
		$('.ul-menu>.has-child>a,.sub-ul-menu .has-child>a').click(function(e){
			e.preventDefault()
			if($(this).parent().hasClass('opened')){
				$(this).parent().removeClass('opened');
			}
			else {
				$(this).parent().addClass('opened')
			}
		})
		$('.search button').click(function(e){
			$('.search').addClass('active');
			$('.search').find('input').focus();
		})
		$('.search .ti-close').click(function(){
			$('.search input').val('')
			$('.search').removeClass('active')
		})
	}

	setCategorisLeft();
	setCategorisTop();
});

var path = window.location.href;
path = path.replace(/\/$/, "");
path = decodeURIComponent(path);

function setCategorisTop() {
	$(".ul-menu a").each(function () {
		var href = $(this).attr('href');
        if (path.substring(0, href.length) === href) {
            $(this).closest('li a').addClass('active');
        }
    });
}

function setCategorisLeft() {
    $(".category--list__content a").each(function () {
		var href = $(this).attr('href');
        if (path.substring(0, href.length) === href) {
            $(this).closest('li a').addClass('active');
        }
    });
}

function getAddressString() {
	let province = $('#province option:selected');
	let district = $('#district option:selected');
	let ward = $('#ward option:selected');
	if (province.val() && district.val() && ward.val()) {
		$('.address-input').text(`${$("input[name='house_number']").val()}, ${ward.text()}, ${district.text()}, ${province.text()}`);
	} else {
		$('.address-input').text($("input[name='house_number']").val());
	}
}


const carousel = document.querySelector(".c-carousel");
const nextButton = document.querySelector(".c-carousel-control-next");
const prevButton = document.querySelector(".c-carousel-control-prev");
const carouselItems = document.querySelectorAll(".c-carousel-item");
const carouselImages = document.querySelectorAll(".c-carousel-item img");
const indicatorLi = document.querySelectorAll(".c-carousel-indicator-li");
const indicatorUl = document.querySelector(".c-carousel-indicators ul");
var itemCount = carouselItems.length;
var timeCount = 0;
var autoTimer ="0";
var indicatorUlWidth = indicatorUl.offsetWidth;
var tempUrl = "";
var imgCounter = 0;
var timeInterval = 0;
var imgUrls = [];
var indicatorWidth = indicatorUlWidth/(itemCount+1.5);

carouselImages.forEach((item, i) => {
  imgUrls[i] = item.src;
});

function autoNext(){
  var itemIndex = 0;
  carouselItems.forEach((item, i) => {
    if(item.classList.contains("active"))
    {
      itemIndex = i;
    }
  });
  removeActiveStatus();
  itemIndex++;
  if(itemIndex >= itemCount)
  {
    itemIndex = 0;
  }
  addActiveStatus(itemIndex);
}

if(carousel.hasAttribute('data-interval')){
  timeInterval = carousel.getAttribute('data-interval');
  autoTimer = setInterval(autoNext,timeInterval);
}

window.addEventListener('resize',()=>{
  indicatorUlWidth = indicatorUl.offsetWidth;
  indicatorWidth = indicatorUlWidth/(itemCount+1.5);
  indicatorLi.forEach((item, i) => {
    item.style.width = 150+"px";
	// item.style.height = (indicatorWidth/1.777)+"px";
	item.style.height = 'auto';
  });
});

indicatorLi.forEach((item, i) => {
//   item.style.width = indicatorWidth+"px";
  item.style.width = 120+"px";
//   item.style.height = (indicatorWidth/1.777)+"px";
  item.style.height = 'auto';
//   tempUrl = imgUrls[i];
//   item.style.backgroundImage = "url('" + tempUrl + "')";
  item.addEventListener('click',()=>{
    removeActiveStatus();
    addActiveStatus(i);
    clearInterval(autoTimer);
    autoTimer = setInterval(autoNext,5000);
  })
});

nextButton.addEventListener('click',() =>{
  var itemIndex = 0;
  carouselItems.forEach((item, i) => {
    if(item.classList.contains("active"))
    {
      itemIndex = i;
    }
  });
  removeActiveStatus();
  itemIndex++;
  if(itemIndex >= itemCount)
  {
    itemIndex = 0;
  }
  addActiveStatus(itemIndex);
  clearInterval(autoTimer);
  autoTimer = setInterval(autoNext,5000);
});

prevButton.addEventListener('click',()=> {
  carouselItems.forEach((item, i) => {
    if(item.classList.contains("active"))
    {
      itemIndex = i;
    }
  });
  removeActiveStatus();
  itemIndex--;
  if(itemIndex < 0){
    itemIndex = itemCount-1;
  }
  addActiveStatus(itemIndex);
  clearInterval(autoTimer);
  autoTimer = setInterval(autoNext,5000);
});

function removeActiveStatus(){
  carouselItems.forEach((item, i) => {
    item.classList.remove("active");
    indicatorLi[i].classList.remove("active");
  });
}

function addActiveStatus(target){
  carouselItems[target].classList.add("active");
  indicatorLi[target].classList.add("active");
}

// --------------