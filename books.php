<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="site.css">
</head>
<body class="books">
	<navbar>
		<center>
	    	<h1>
	    		<a href="versatest.php">Arsh Agarwal</a>
	    	</h1>
	    	<ul>
	    		<li><a href="coding.php">Coding</a></li>
	    		<li><a href="photography.php">Photography</a></li>
	    		<li><a href="tutoring.php">Tutoring</a></li>
	            <li><a href="books.php">Book List</a></li>
	    	</ul>	
	    </center>	
	</navbar>
	<div class="book-wrapper">
		<div class="fiction" >
				Fiction
			<div id="9780590353403"></div>
			<div id="9780439064873"></div>
			<div id="9780439136365"></div>
			<div id="9780439139601"></div>
			<div id="9780439358071"></div>
			<div id="9780439785969"></div>
			<div id="9780545139700"></div>
		</div>
		<div class="nonf" >
				Non Fiction
			<div id="9780743269513"></div>
			<div id="0071401946"></div>
			<div id="9780449203651"></div>
			<div id="9781416549710"></div>
			<div id="9781591842804"></div>
		</div>
	</div>
	<script>
            var bookList = ["9780590353403","9780439064873","9780439136365"," 9780439139601","9780439358071","9780439785969","9780545139700"]
            var promiseList = [];
            for(var i = 0; i < bookList.length; i++){
            	var proxy = 'https://cors-anywhere.herokuapp.com/';
	            var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+bookList[i]+"&format=json&jscmd=data";
            	/*var request = new XMLHttpRequest();
	            var jsonData;
	            var bookCoverElem = document.createElement("img");
	            bookCoverElem.className = "cover";
	            var titleElem = document.createElement("p");
	            
	            request.onreadystatechange = function(){
	            	if(this.readyState == 4 && this.status == 200){
	            		jsonData = JSON.parse(this.responseText);
	            		var isbn = Object.keys(jsonData)[0];
			            bookData = jsonData[isbn];
			            titleElem.innerHTML = bookData.title;
			            bookCoverElem.setAttribute("src", bookData.cover.medium);
			            document.getElementsByClassName("fiction")[0].appendChild(titleElem);
			            document.getElementsByClassName("fiction")[0].appendChild(bookCoverElem);
	            	}
	            }
				
	            request.open("GET", url, false);
	            //request.setRequestHeader("Access-Control-Allow-Origin", "*")
	            request.send();
	            */
	            promiseList.push(fetch(url)
	            	.then((response) => response.json())
	            	.then(function(data){ 
	            		var isbn = Object.keys(data)[0];
	            		var bookCoverElem = document.createElement("img");
			            bookCoverElem.className = "cover";
			            var titleElem = document.createElement("p");
			            titleElem.innerHTML = data[isbn].title;
			            bookCoverElem.setAttribute("src", data[isbn].cover.medium);
	            		document.getElementById(isbn.substring(5)).appendChild(titleElem);
	            		document.getElementById(isbn.substring(5)).appendChild(bookCoverElem);
	            	}));	
            }

            var nfbookList = ["9780743269513","0071401946","9780449203651","9781416549710","9781591842804"]
			for(var i = 0; i < nfbookList.length; i++){
            	var proxy = 'https://cors-anywhere.herokuapp.com/';
            	var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+nfbookList[i]+"&format=json&jscmd=data";
            	/*var request = new XMLHttpRequest();
	            var jsonData;
	            var bookCoverElem = document.createElement("img");
	            bookCoverElem.className = "cover";
	            var titleElem = document.createElement("p");
	            request.onreadystatechange = function(){
	            	if(this.readyState == 4 && this.status == 200){
	            		jsonData = JSON.parse(this.responseText);
			            bookData = jsonData["ISBN:" + nfbookList[i]];
			            titleElem.innerHTML = bookData.title;
			            bookCoverElem.setAttribute("src", bookData.cover.medium);
			            document.getElementsByClassName("nonf")[0].appendChild(titleElem);
			            document.getElementsByClassName("nonf")[0].appendChild(bookCoverElem);
	            	}
	            }
	            request.open("GET", url, false);
	            //request.setRequestHeader("Access-Control-Allow-Origin", "*")
	            request.send();*/
	            promiseList.push(fetch(url)
	            	.then((response) => response.json())
	            	.then(function(data){ 
	            		var isbn = Object.keys(data)[0];
	            		var bookCoverElem = document.createElement("img");
			            bookCoverElem.className = "cover";
			            var titleElem = document.createElement("p");
			            titleElem.innerHTML = data[isbn].title;
			            bookCoverElem.setAttribute("src", data[isbn].cover.medium);
	            		document.getElementById(isbn.substring(5)).appendChild(titleElem);
	            		document.getElementById(isbn.substring(5)).appendChild(bookCoverElem);
	            	}));	
            }            
/*            fetch("https://openlibrary.org/isbn/9780590353403")
            	.then(function(response){
            		redirect = response.blob();
            	});*/


        </script>
<body>
</html>