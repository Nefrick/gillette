$(document).ready(function(){

		$('.buy').click(function(){
			var id = $(this).attr("data-id");
			$.post("/cart/addAjax/"+id, {} , function(data){
				$('#cart-count').html(data);
			});
			return false;
		});


		$(".toggle-mnu").click(function(e){
			e.preventDefault();
			$(this).toggleClass('on');
			$(".top-mnu").slideToggle();
		});

		 $('.owl-carousel').owlCarousel({
		    loop:true,
				navText: '',
		    margin:10,
		    nav:true,
		    items:1
			})
});

$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.brouserSelector();
		if($("html").hasClass("chrome")){
			$.smoothScroll();
		}
	} catch(err){

	};

	$("img, a").on("dragstart", function(event) {event.preventDefault(); });

});
