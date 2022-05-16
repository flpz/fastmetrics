jQuery(document).ready(function(){
    jQuery('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        if( this.value.length > 2 ) {
			var inputVal = jQuery(this).val();
			var resultDropdown = $(this).siblings(".result");
			if(inputVal.length){
				jQuery.get("backend-search.php", {term: inputVal}).done(function(data){
					// Display the returned data in browser
					resultDropdown.html(data);
				});
			} else{
				resultDropdown.empty();
			}
		}
    });
    
    // Set search input value on click of result item
    jQuery(document).on("click", ".result p", function(){
        jQuery(this).parents(".search-box").find('input[type="text"]').val(jQuery(this).text());
        jQuery(this).parent(".result").empty();
    });
});