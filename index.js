$(document).ready(function(){
	
	//banner owl carousel
	$("#banner-area .owl-carousel").owlCarousel({
		dots:true,
		items:1
	});

	//top sale carousel

	$("#top-sale .owl-carousel").owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}

	});

	//isotope filter
	var $grid= $(".grid").isotope({
		itemSelector:'.grid-item',
		layoutMode:'fitRows'
	});

	//filter items on button-click
	$(".button-group").on("click", "button", function(){
		var filterValue=$(this).attr("data-filter");
		$grid.isotope({filter: filterValue });
	})

	//New Phones owl-carousel

	$("#new-phones .owl-carousel").owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}

	});


	//Blogs owl-carousel
	$("#blogs .owl-carousel").owlCarousel({
		loop:true,
		nav:false,
		dots:true,
		responsive:{
			0:{						// 0 viewport user can only see 1 item
				items:1
			},
			600:{                   //600 viewport user can only see 3 items
				items:3
			}	
		}
	});


	//product.html quantity section
	let $qty_up = $(".qty .qty-up");
	let $qty_down = $(".qty .qty-down");
	//let $input = $(".qty .qty-input");

	//click event on qty button 
	$qty_up.click(function(e)
	{	let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
		if($input.val()>= 1 && $input.val()<=9)
		{
			$input.val(function(i,oldval)
			{
				return	++oldval;
			})
		}
	});


	$qty_down.click(function(e)
	{	let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
		if($input.val() > 1 && $input.val() <= 10)
		{
            $input.val(function (i,oldval)
            {
              return --oldval;
            })
		}
	});
	
});


