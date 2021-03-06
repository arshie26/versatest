<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="site.css">
		<link rel="stylesheet" href="splide.min.css">
		<script src="cart.js"></script>
		<script src="splide.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>
	<body class="photography">
		<div>
    		<center>
		    	<ul>
		    		<li>
		    			<a class="title" href="versatest.php"><h1 class="title">ARSH AGARWAL</h1></a>
		    		</li>
		    	</ul>
		    	<ul>
		    		<li><a class="navbar" href="coding.php"><h3 class="navbar">CODING</h3></a></li>
		    		<li><a class="navbar" href="photography.php"><h3 class="navbar">PHOTOGRAPHY</h3></a></li>
		    		<li><a class="navbar" href="tutoring.php"><h3 class="navbar">TUTORING</h3></a></li>
	                <li><a class="navbar" href="books.php"><h3 class="navbar">BOOK LIST</h3></a></li>
		    	</ul>	
		    </center>
		</div>
		<div id="cart-items"></div>
	    
	    <div id = "rotate">
	    	Please rotate device to view images
		</div>
	    <div id="show">
	    	<div id="quote" class="animated fadeInDown">
		    	{{quote}}
		    	{{author}}
		    </div>
			<div id="image-slider" class="splide">
				<div class="splide__track">
					<ul class="splide__list">
						<li class="splide__slide">
							<img class="photo" src="greendrinks.JPG"></li>
						</li>
						<li class="splide__slide">
							<img class="photo" src="meher.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo portrait" src="IMG_4978.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo" src="bollywood.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo portrait" src="Brasch workshop2.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo" src="Brash workshop 1.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo" src="dunnie.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo portrait" src="emerald.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo" src="greendrinks2.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo" src="greendrinks3.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo portrait" src="IMG_0204.JPG">
						</li>
						<li class="splide__slide">
							<img class="photo portrait" src="sanjanalighting.JPG">
						</li>
					</ul>
				</div>
			</div>
			
			<!--div id="quote" class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
		    	{{quote}}
		    	{{author}}
		    </div-->
			<div id="cart-wrap">
		      	<div id="photography-products"></div>
		    </div>
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
	    			var quoteElem = new Vue({
						el: "#quote",
						data:{
							author: "-" + data.author,
							quote: "\"" + data.content + "\""
						}
					})
	    		})
	    		.catch(function(error){
	    			console.log(error);
	    		});
	    		document.addEventListener( 'DOMContentLoaded', function () {
					new Splide( '#image-slider' ).mount();
				} );
    		document.addEventListener('DOMContentLoaded', function(){
		  		AOS.init();
	  		});
	    </script>
      	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	</body>
</html>