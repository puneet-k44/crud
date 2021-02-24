<!DOCTYPE html>
<html>
<head>
	<title>Fieldset</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<header>
		<div class="header_area">
			<div class="container">
				<div class="site_logo"><a href="#">HOME</a></div>
				<div class="site_menu"><a href="#"></a></div>
			</div>
		</div>
	</header>
	<section>
		<form class="food_description">
		
			<fieldset style="display: block;">
				<div class="first_step">
					<div class="container"><a href="javascript:void(0);" class="choose_btn"><h1>First Step optin 1</h1></a></div>
				</div>
			</fieldset>
		
			<fieldset>
				<div class="first_step">
					<div class="container"><a href="javascript:void(0);" class="choose_btn"><h1>Second Step option 2</h1></a></div>
				</div>
			</fieldset>
		
			<fieldset>
				<div class="first_step">
					<div class="container"><a href="javascript:void(0);" class="choose_btn"><h1>Third Step option 3</h1></a></div>
				</div>
			</fieldset>
			
			<fieldset>
				<div class="first_step">
					<div class="container"><a href="javascript:void(0);" class=""><h1>Fourth Step option 4</h1></a></div>
				</div>
			</fieldset>
		
		</form>
	</section>
	<footer></footer>

</body>
</html>


<script type="text/javascript">
	jQuery(document).ready(function(){
		$('.food_description fieldset:first-child').fadeIn('slow').css("margin-left","0px");
		$('.choose_btn').on('click', function() {
			var parent_fieldset = $(this).parents('fieldset');
			var next = parent_fieldset.next();
			parent_fieldset.fadeOut(400, function() {
				next.fadeIn().css("margin-left","0px");
			});
		})
		alert();
	})
</script>