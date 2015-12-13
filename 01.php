<!DOCTYPE HTML>
<html>
<head>
	<title>01 - JQuery Plugin Tutorials</title>
</head>
<style>
	
	.container{width:900px; padding:20px; margin:20px auto; }
	.row {
		margin-right: -15px;
		margin-left: -15px;
	}
	.row .col-3{background:#f1f1f1; width:30%;position: relative;    min-height: 1px;    padding-right: 15px;    padding-left: 15px; float:left}
	
</style>
<body>

<div class="container">
<div class="row">
	<div class="col-3" >
		Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. 
	</div>
	<div class="col-3">
		Sollicitudin viverra, vel varius eget sit mollis. Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus.
	</div>
	<div class="col-3">
		Donec vivamus. Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id maecenas, morbi habitant sem in adipiscing mi erat, malesuada pretium tortor rutrum eu eros vel. Donec molestie, faucibus a amet commodo scelerisque libero massa. Sapien quam in eu vel nulla.
	</div>
</div>
</div>

<script src="js/jquery-2.1.4.min.js" ></script>
<script>

	(function( $ ){
		'use strict';
		$.fn.equalizeHeight = function(){
			var tallestHeight = 0;
			var $stories  = this;
			console.log(this);
			$stories.each(function(i,el){
				var elHeight = $(el).outerHeight();
				if(elHeight > tallestHeight){
					tallestHeight = elHeight;
				}
			});
			
			$stories.css('min-height',tallestHeight);
			
			return $stories;
		};
		
	}( jQuery ));

	$(document).ready(function(){
		'use strict';
		$('.row').
		find('.col-3').
		equalizeHeight().
		css('background','red');
	});
</script>
	
</body>
</html>
