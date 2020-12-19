<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="site.css">
		<script src="cart.js"></script>
	</head>
	<body>
		<div>
			<center>
				<h1>Arsh Agarwal</h1>
				<ul>
					<li>Coding</li>
					<li><a href="photography.php">Photography</a></li>
					<li><a href="tutoring.php">Tutoring</a></li>
					<li><a href="books.php">Book List</a></li>
				</ul>
			</center>
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
	    </script>
	</body>
</html>