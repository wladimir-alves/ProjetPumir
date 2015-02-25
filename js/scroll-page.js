$("#scroll-icon a").click( function() { 
	var page = $(this).attr("href"); 
	$("html, body").animate( { scrollTop: $(page).offset().top }, "slow" ); // Go
	return false;
});