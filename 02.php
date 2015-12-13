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
	.row .col-12{background:#f1f1f1; width:100%;position: relative;    min-height: 1px;    padding-right: 15px;    padding-left: 15px; float:left}
	.form-control{width:100%; display:block;}
	.form-group{margin:15px auto;}
</style>
<body>

<div class="container">
<div class="row">
	<div class="col-12 form-group" >
		<label for="title">Title</label>	
		<input type="text" class="form-control" id="title" maxlength="50"  ></input>
		<p class="limit">Limit: 50 charecters</p>
	</div>
	<div class="col-12 form-group" >
		<label for="short-message">Short Message</label>	
		<textarea class="form-control" id="short-message" maxlength="150" rows="6" ></textarea>
		<p class="limit">Limit: 150 charecters</p>
	</div>
</div>
</div>

<script src="js/jquery-2.1.4.min.js" ></script>
<script>

	(function( $ ){
		'use strict';
		$.fn.updateCharCounter = function(){
			return this.each(function(index,element){
				$(element).keyup(function(){
					
					var $me = $(this),
						maxlength = parseInt($me.attr('maxlength'),10),
						charCount = $me.val().length,
						$counter = $me.next('.limit');
					// console.log(charCount);
					
					$counter.text('Limit: '+ maxlength + ' charecters. remaining: '+ (maxlength - charCount));
					
				});
			});
		};
		
	}( jQuery ));

	$(document).ready(function(){
		'use strict';
		
		$('.form-control').updateCharCounter().css({
			'background': 'black',
			'color': 'white',
		});
		
	});
</script>
	
</body>
</html>
