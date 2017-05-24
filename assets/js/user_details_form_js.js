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
        var newItemWidth = itemWidth + 20;

        $(this).animate({width: newItemWidth + '%'}, 500);
        $(this).data('level', newItemWidth);
    });
});

$(".previous").click(function()
{
    $('.progress-animate').each(function() 
    {
        var itemWidth = $(this).data('level');
        var newItemWidth = itemWidth - 20;

        $(this).animate({width: newItemWidth + '%'}, 500);
        $(this).data('level', newItemWidth);
    });
});