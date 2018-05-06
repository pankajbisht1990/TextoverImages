require([
    "jquery"
], function($){
//<![CDATA[
    $(document).ready(function() { 
		 
	     //$(".product-img-column").append("<div class='any_name'>Any Name</div>");
		 //$(".product-img-column").append("<div class='any_no'>00</div>");
		 var x = $(".any_name").position();
		 //alert("Top: " + x.top + " Left: " + x.left);
         $(".jersy_name").focusout(function(){ 
			  var jersy_no = $(".jersy_no").val();
			  var jersy_name = $(".jersy_name").val();
        });
    });
//]]>
});

