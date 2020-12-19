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
	    		<li>Coding</li>
	    		<li><a href="photography.php">Photography</a></li>
	    		<li><a href="tutoring.php">Tutoring</a></li>
	            <li><a href="books.php">Book List</a></li>
	    	</ul>	
	    </center>	
	</navbar>
	<div style="display:flex;">
		<div id="demo" style = "min-width:40vw; max-width: 50vw; padding-left: 10vw;">
				Fiction
		</div>
		<div id="nonf" style = "min-width:30vw; max-width: 50vw;padding-left: 10vw;">
				Non Fiction
		</div>
	</div>
	<script>
            var bookList = ["9780590353403","9780439064873","9780439136365"," 9780439139601","9780439358071","9780439785969","9780545139700"]
            for(var i = 0; i < bookList.length; i++){
            	var request = new XMLHttpRequest();
	            var jsonData;
	            var proxy = 'https://cors-anywhere.herokuapp.com/';
	            var bookCoverElem = document.createElement("img");
	            var titleElem = document.createElement("p");
	            var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+bookList[i]+"&format=json&jscmd=data";
	            request.onreadystatechange = function(){
	            	if(this.readyState == 4 && this.status == 200){
	            		jsonData = JSON.parse(this.responseText);
			            bookData = jsonData["ISBN:" + bookList[i]];
			            titleElem.innerHTML = bookData.title;
			            bookCoverElem.setAttribute("src", bookData.cover.medium);
			            document.getElementById("demo").appendChild(titleElem);
			            document.getElementById("demo").appendChild(bookCoverElem);
	            	}
	            }
	            request.open("GET", url, false);
	            //request.setRequestHeader("Access-Control-Allow-Origin", "*")
	            request.send();	
            }

            var nfbookList = ["9780743269513","0071401946","9780449203651","9781416549710","9781591842804"]
			for(var i = 0; i < nfbookList.length; i++){
            	var request = new XMLHttpRequest();
	            var jsonData;
	            var proxy = 'https://cors-anywhere.herokuapp.com/';
	            var bookCoverElem = document.createElement("img");
	            var titleElem = document.createElement("p");
	            var url = proxy + "http://openlibrary.org/api/books?bibkeys=ISBN:"+nfbookList[i]+"&format=json&jscmd=data";
	            request.onreadystatechange = function(){
	            	if(this.readyState == 4 && this.status == 200){
	            		jsonData = JSON.parse(this.responseText);
			            bookData = jsonData["ISBN:" + nfbookList[i]];
			            titleElem.innerHTML = bookData.title;
			            bookCoverElem.setAttribute("src", bookData.cover.medium);
			            document.getElementById("nonf").appendChild(titleElem);
			            document.getElementById("nonf").appendChild(bookCoverElem);
	            	}
	            }
	            request.open("GET", url, false);
	            //request.setRequestHeader("Access-Control-Allow-Origin", "*")
	            request.send();	
            }            
/*            fetch("https://openlibrary.org/isbn/9780590353403")
            	.then(function(response){
            		redirect = response.blob();
            	});*/


        </script>
<body>
</html>