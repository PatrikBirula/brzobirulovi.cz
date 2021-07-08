//JQuery
(function ($) {
	$(document).ready(function () {

		console.log('Im ready!')

		//Hidden
		$(".firstarticle").hide();
		$(".article").hide();
		$("footer").hide();
		$('.firstH1').hide();
		$(".pic1").hide();
		$(".pic2").hide();
		$(".spodkol1").hide();
		$(".vrchkol1").hide();
		$(".spodkol2").hide();
		$(".vrchkol2").hide();
		$(".popwindows").hide();

		if (window.innerWidth < 1366) {
			setTimeout(function () {
				$(".firstarticle").css('opacity', 0);
				$(".firstarticle").show();
				$(".firstarticle").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			}, 2800);
			setTimeout(function () {
				$(".article").css('opacity', 0);
				$(".article").show();
				$(".article").animate({ opacity: 1 }, { queue: false, duration: 1000 });

			}, 2800);
			setTimeout(function () {
				$("footer").css('opacity', 0);
				$("footer").show();
				$("footer").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			}, 2800);
		}
		//Main Screen animate

		setTimeout(function () {
			$('.firstH1').css('opacity', 0);
			$('.firstH1').show();
			$('.firstH1').animate({ opacity: 1 }, { queue: false, duration: 2000, });
		}, 4800);

		$(".unscreen").animate({
			"margin-left": "-=100%"
		}, 3000, "linear");

		setTimeout(function () {
			$(".pic1").css('opacity', 0);
			$(".pic1").show();
			$(".pic1").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".pic1").animate({ "margin-top": "-=1%" }, 2500);
		}, 2800);

		setTimeout(function () {
			$(".pic2").css('opacity', 0);
			$(".pic2").show();
			$(".pic2").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".pic2").animate({ "margin-top": "-=1%" }, 2500);
		}, 2800);

		setTimeout(function () {
			$(".spodkol1").css('opacity', 0);
			$(".spodkol1").show();
			$(".spodkol1").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".spodkol1").animate({ "margin-top": "+=7%" }, 2500);
		}, 2800);

		setTimeout(function () {
			$(".vrchkol1").css('opacity', 0);
			$(".vrchkol1").show();
			$(".vrchkol1").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".vrchkol1").animate({ "margin-top": "+=7%" }, 2500);
		}, 2800);

		setTimeout(function () {
			$(".spodkol2").css('opacity', 0);
			$(".spodkol2").show();
			$(".spodkol2").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".spodkol2").animate({ "margin-top": "+=7%" }, 2500);
		}, 2800);

		setTimeout(function () {
			$(".vrchkol2").css('opacity', 0);
			$(".vrchkol2").show();
			$(".vrchkol2").animate({ opacity: 1 }, { queue: false, duration: 1000 });
			$(".vrchkol2").animate({ "margin-top": "+=7%" }, 2500);
		}, 2800);

		//Show after scroll

		if (window.innerWidth > 1365) {
			$(window).scroll(function () {
				if ($(this).scrollTop() < 1) {
					$('.firstarticle').fadeOut(50);
				}
				else {

					$(".firstarticle").fadeIn(2000);
				}
			});

			$(window).scroll(function () {
				if ($(this).scrollTop() < 1) {
					$('.article').fadeOut(50);
				}
				else {

					$(".article").fadeIn(2000);
				}
			});

			$(window).scroll(function () {
				if ($(this).scrollTop() < 1) {
					$('footer').fadeOut(50);
				}
				else {

					$("footer").fadeIn(2000);
				}
			});
		}


		//Popup windows hide show

		$("#programbtn1").click(function () {
			$("#program1").show();
			$(".halfopacity").css('opacity', 0.5);
			$(".halfopacity1").css('opacity', 0.5);
		});
		$("#programbtn2").click(function () {
			$("#program2").show();
			$(".halfopacity").css('opacity', 0.5);
			$(".halfopacity1").css('opacity', 0.5);
		});
		$("#airbnbbtn").click(function () {
			$("#airbnb").show();
			$(".halfopacity").css('opacity', 0.5);
			$(".halfopacity1").css('opacity', 0.5);
		});
		$(".dotaznikodkaz").click(function () {
			$("#menu").show();
			$(".halfopacity").css('opacity', 0.5);
			$(".halfopacity1").css('opacity', 0.5);
		});
		$(".cross").click(function () {
			$("#program1").hide();
			$("#program2").hide();
			$("#airbnb").hide();
			$("#menu").hide();
			$(".halfopacity").css('opacity', 1);
			$(".halfopacity1").css('opacity', 1);
		});

		$(".clickpop").click(function () {
			alert("Vaše zpráva byla odeslána.");
		});




	});
})(jQuery);