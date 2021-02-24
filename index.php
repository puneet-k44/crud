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
					<div class="container">
						<a href="javascript:void(0);" class="choose_btn">
							<h1>First Step optin sss1</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ut, culpa, voluptatibus dolor cumque cupiditate incidunt animi amet ipsa voluptas quas molestiae accusantium unde? Laudantium consequuntur rem molestias tempora et.</p>
						</a>
					</div>
				</div>
			</fieldset>
		
			<fieldset>
				<div class="first_step">
					<div class="container">
						<a href="javascript:void(0);" class="choose_btn">
							<h1>Second Step option 2</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sed in quod totam incidunt delectus soluta nihil molestias? Cum labore magni aperiam blanditiis aspernatur, quidem voluptate dignissimos placeat distinctio soluta.</p>
						</a>
					</div>
				</div>
			</fieldset>
		
			<fieldset>
				<div class="first_step">
					<div class="container">
						<a href="javascript:void(0);" class="choose_btn">
							<h1>Third Step option 3</h1>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut similique accusamus corrupti magni maxime cumque aperiam deleniti facere saepe, ex dignissimos animi magnam in possimus odit cupiditate a labore dolorem!</p>
						</a>
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<div class="first_step">
					<div class="container">
						<a href="javascript:void(0);" class="">
							<h1>Fourth Step option 4</h1>
							<p>Paragraph111111111sssssssssss11111111</p>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptates voluptas animi repellendus deleniti, nemo architecto reprehenderit in recusandae! Neque harum necessitatibus, doloremque voluptates quo id repellat eaque aspernatur voluptate?</p>
						</a>
					</div>
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
	})
</script>