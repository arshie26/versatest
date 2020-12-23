<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="site.css">
	<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body class="books">
	<navbar>
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
	</navbar>
	<div id="cart-items"></div>
	<div id = "adviceButton"  >
		<button onclick="getAdvice()">Get Life Advice!</button>
	</div>
	<div id="advice">
		Click above for life advice
	</div>
	<div class="book-wrapper">
		<div class="fiction" >
				<h2>Fiction</h2><br><br>
			<div id="9780590353403"></div>
			<div id="9780439064873"></div>
			<div id="9780439136365"></div>
			<div id="9780439139601"></div>
			<div id="9780439358071"></div>
			<div id="9780439785969"></div>
			<div id="9780545139700"></div>
		</div>
		<div class="nonf" >
				<br><br><br><h2>Non Fiction</h2><br><br><br>
			<div id="9780743269513"></div>
			<div id="0071401946"></div>
			<div id="9780449203651"></div>
			<div id="9781416549710"></div>
			<div id="0066620996"></div>
		</div>
	</div>
	<script>
            var bookList = ["9780590353403","9780439064873","9780439136365","9780439139601","9780439358071","9780439785969","9780545139700"]
            var promiseList = [];
            for(var i = 0; i < bookList.length; i++){
            	var proxy = 'https://cors-anywhere.herokuapp.com/';
	            var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+bookList[i]+"&format=json&jscmd=data";
            	
	            promiseList.push(fetch(url)
	            	.then((response) => response.json())
	            	.then(function(data){ 
	            		var isbn = Object.keys(data)[0];
	            		var bookCoverElem = document.createElement("img");
			            bookCoverElem.className = "cover";
			            var titleElem = document.createElement("p");
			            titleElem.innerHTML = data[isbn].title;
			            bookCoverElem.setAttribute("src", data[isbn].cover.medium);
			            document.getElementById(isbn.substring(5)).appendChild(bookCoverElem);
	            		document.getElementById(isbn.substring(5)).appendChild(titleElem);
	            		document.getElementById(isbn.substring(5)).className = "book";
	            	}));	
            }

            var nfbookList = ["9780743269513","0071401946","9780449203651","9781416549710","0066620996"]
			for(var i = 0; i < nfbookList.length; i++){
            	var proxy = 'https://cors-anywhere.herokuapp.com/';
            	var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+nfbookList[i]+"&format=json&jscmd=data";
            	
	            promiseList.push(fetch(url)
	            	.then((response) => response.json())
	            	.then(function(data){ 
	            		var isbn = Object.keys(data)[0];
	            		var bookCoverElem = document.createElement("img");
			            bookCoverElem.className = "cover";
			            var titleElem = document.createElement("p");
			            titleElem.innerHTML = data[isbn].title;
			            console.log(data[isbn].title);
			            bookCoverElem.setAttribute("src", data[isbn].cover.medium);
			            document.getElementById(isbn.substring(5)).appendChild(bookCoverElem);
	            		document.getElementById(isbn.substring(5)).appendChild(titleElem);
	            		document.getElementById(isbn.substring(5)).className = "book";
	            	}));	
            }
            var adviceData;
			var adviceVue = new Vue({
							el: "#advice",
							data:{
								adviceText: "Get life advice!"
							},
							methods:{
								getAdvice: function(){
									fetch("https://api.adviceslip.com/advice")
										.then((response) => response.json())
										.then(function(data){
											this.adviceText = "Life advice: " + data["slip"].advice	
										});
								}
								
							}
						})

			function getAdvice(){
				fetch("https://api.adviceslip.com/advice")
					.then((response) => response.json())
					.then(function(data){
						var advice = document.createElement("p");
						advice.innerHTML = "Life advice: " + data["slip"].advice;
						document.getElementById("advice").innerHTML = data["slip"].advice;	
					});

			}

        </script>
<body>
</html>