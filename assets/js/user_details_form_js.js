/*
 * JQuery - User Details Form Functions
 * Created by: Emdad on 8/5/2017
 */


/* =========================================
 * Run init() on $(document).ready();
 * ========================================= */
$(function()
{
	init();
});



/* =========================================
 * Initializes other functions 
 * ========================================= */
function init()
{



	$('.progress-bar').css('width', '0');

	$('#physique-panel').css
	({
		"opacity": "1",
		"visibility": "visible" 
	})



};

    
    
/*$(window).on('load', function() {

    $('.progress-bar').each(function() {
    
        var itemWidth = $(this).data('level');
        
        $(this).animate({
            width: itemWidth
        }, 800);
        
    });

});*/

$(".next").click(function()
{
    $('.progress-animate').each(function() 
    {
        var itemWidth = $(this).data('level');

        if (itemWidth <= 80)
        {
	        var newItemWidth = itemWidth + 20;

	        $(this).animate({width: newItemWidth + '%'}, 500);
	        $(this).data('level', newItemWidth);
        }

/*        if (itemWidth == 0)
        {
        	$('#physique-panel').css
        	({
        		"opacity": "1",
        		"visibility": "visible" 
        	})

        	$('.data-panel').css
        	({
        		"opacity": "0",
        		"visibility": "hidden" 
        	})

        }*/

        switch(itemWidth)
        {
        	case 0:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#background-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 20:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#beliefs-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 40:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#family-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 60:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#education-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 80:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#partner-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;
        }
        
    });
});


$(".previous").click(function()
{
    $('.progress-animate').each(function() 
    {
        var itemWidth = $(this).data('level');

        if (itemWidth >= 20)
        {
	        var newItemWidth = itemWidth - 20;

	        $(this).animate({width: newItemWidth + '%'}, 500);
	        $(this).data('level', newItemWidth);
	    }

	    switch(itemWidth)
        {
        	case 20:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#physique-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 40:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#background-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 60:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#beliefs-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 80:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#family-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;

        	case 100:
        		$('.data-panel').css
	        	({
	        		"opacity": "0",
	        		"visibility": "hidden" 
	        	})
	        	$('#education-panel').css
	        	({
	        		"opacity": "1",
	        		"visibility": "visible" 
	        	})
        		break;
        }
    });
});