<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="site.css">
		<link rel="stylesheet" href="splide.min.css">
		<script src="cart.js"></script>
		<script src="splide.min.js"></script>
	</head>
	<body class="photography">
		<div>
    		<center>
		    	<ul>
		    		<li>
		    			<a href="versatest.php"><h1>ARSH AGARWAL</h1></a>
		    		</li>
		    	</ul>
		    	<ul>
		    		<li><a class="navbar" href="coding.php"><h3>CODING</h3></a></li>
		    		<li><a class="navbar" href="photography.php"><h3>PHOTOGRAPHY</h3></a></li>
		    		<li><a class="navbar" href="tutoring.php"><h3>TUTORING</h3></a></li>
	                <li><a class="navbar" href="books.php"><h3>BOOK LIST</h3></a></li>
		    	</ul>	
		    </center>
		</div>
		<div id="cart-items"></div>
	    <div id="quote">
	    </div>
		<div id="image-slider" class="splide">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<img class="photo" src="greendrinks.jpg"></li>
					</li>
					<li class="splide__slide">
						<img class="photo" src="meher.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo portrait" src="IMG_4978.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo" src="bollywood.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo portrait" src="Brasch workshop2.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo" src="Brash workshop 1.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo" src="dunnie.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo portrait" src="emerald.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo" src="greendrinks2.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo" src="greendrinks3.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo portrait" src="IMG_0204.jpg">
					</li>
					<li class="splide__slide">
						<img class="photo portrait" src="sanjanalighting.jpg">
					</li>
				</ul>
			</div>
		</div>
		</div>
		<div id="cart-wrap" style="padding-left: 40vw;">
	      <div id="photography-products"></div>
	    </div>
		<br>
	    <script>
	    	fetch("https://api.quotable.io/random")
	    		.then((response) => response.json())
	    		.then(function (data) {
	    			var quote = document.createElement("p");
	    			quote.className = "quote";
	    			var author = document.createElement("p");
	    			author.className = "quote";
	    			quote.innerHTML = "\"" + data.content + "\"";
	    			author.innerHTML = data.author;
	    			document.getElementById("quote").appendChild(quote);
	    			document.getElementById("quote").appendChild(author);
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