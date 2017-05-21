/*
 * JQuery - Profile Page Functions
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

	// Change Style Based on Viewport Size
	var mq = window.matchMedia("(max-width: 700px)")
	
	changeCssForSm(mq); // Call listener function at run time
	
	mq.addListener(changeCssForSm) // Attach listener function on state changes



};


/* =========================================
 * Populates Mother Tongue drop-down 
 * ========================================= */
function changeCssForSm(mq)
{
	// Set the matchMedia
	if (mq.matches)
	{
		// Changes when we reach the max-width
		// $('body').css('background', 'Crimson');


		/*$(".profile-image").each(function(i, elem) 
		{
			var img = $(elem);
			var div = $("<div />").css
			({
				background: "url(" + img.attr("src") + ") no-repeat",
				width: img.width() + "px",
				height: img.height() + "px"
			});

			img.replaceWith(div);
		});*/





	} 
	else 
	{
		// Reset CSS changes
		// $('body').css('background', 'Yellow');



	}
};