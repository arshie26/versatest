<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="site.css">
		<link rel="stylesheet" href="splide.min.css">
		<script src="cart.js"></script>
		<script src="splide.min.js"></script>
	</head>
	<body>
		<div>
			<center>
				<h1><a href="versatest.php">Arsh Agarwal</a></h1>
				<ul>
					<li><a href="coding.php">Coding</a></li>
					<li><a href="photography.php">Photography</a></li>
					<li><a href="tutoring.php">Tutoring</a></li>
					<li><a href="books.php">Book List</a></li>
				</ul>
			</center>
		</div>

		<div id="image-slider" class="splide">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<img style="width:50%" src="greendrinks.jpg"></li>
					</li>
					<li class="splide__slide">
						<img style="width:50%" src="meher.jpg">
					</li>
					<li class="splide__slide">
						<img style="width:50%" src="IMG_4978.jpg">
					</li>
					<li class="splide__slide">
						<img style="width:50%" src="bollywood.jpg">
					</li>
				</ul>
			</div>
		</div>
		</div>
		<div id="cart-wrap">
	      <div id="photography-products"></div>
	      <div id="cart-items"></div>
	    </div>
		<br>
	    <div id="quote">
	    </div>
	    <script>
	    	fetch("https://api.quotable.io/random")
	    		.then((response) => response.json())
	    		.then(function (data) {
	    			document.getElementById("quote").innerHTML = data.content;
	    		})
	    		.catch(function(error){
	    			console.log(error);
	    		});
	    		document.addEventListener( 'DOMContentLoaded', function () {
					new Splide( '#image-slider' ).mount();
				} );
	    </script>
	</body>
</html>