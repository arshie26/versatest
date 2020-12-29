# versatest

My intention for the website was to create a rough portfolio website for myself. I've had the structure in mind for some time, and I thought this assessment would be a good opportunity to implement it. I had a very clear image for the heading of the landing page, which I eventually made the navigation bar. I knew I wanted it to reflect my experience in various fields, like so:

				Arsh Agarwal

Photography | Cinematography | Editing | Tutoring | Coding

In the interest of time and simplicity and to facilitate the use of Public APIs, I left out the Cinematography and Editing sections and put in a Book List section. I knew I wanted to make the landing page dramatic as well, with a dark background lit theatrically, but I knew that would probably be too complex for the current implementation.

Theme is very important for a website, because it needs to be aligned with the brand and facilitate the user experience. Similarly to Instagram, if you don't have a great theme, the user will not be immersed in the brand. If they're not immersed, they won't have a quality brand experience, and you want to make certain that the user has a positive brand experience and associates the website with the brand. I'm very much about achieving goals and dreams, making fantasy a reality, and deep philosphical and analytical thought. Inception is one of my favorite movies. Thus, I themed the website with Inception. I searched online for the Inception color palette and font to use on the website and implemented it here. I've done my best to incorporate the inception theme in all elements of the website, from the text boxes to the title to the backgrounds.
 

Setup
	I began developing the website as local files that my browser could open. When I began running into trouble with CORS, I began to use XAMPP to run this on a local server. Though this did not help, I knew it would be better to stick to this approach. The websites I will be developing will not be stored on a local machine. Because they're hosted on an XAMPP server, the files are PHP instead of HTML.

Different layouts
	
I knew it would be important to work with multiple types of layouts, so I tried to see what layouts would facilitate the user's experience consuming the content on each page

The navigation bar is similar across pages, because every page needs a thematic element that stays consistent across the pages.
	
	The home page has a product layout with features listed across the page
		Many product landing pages are structured in this way, so I used this layout to communicate my strengths.
	The coding and tutoring pages have single column content layout
		Both of these pages feature my work front and center, because I thought this would be the best way to present my capabilities.
		
		The coding page is a chronological portfolio of my experience. I thought this was the simplest way for the user to experience my work. I interspersed graphics, video, and text to contextualize my work for the user.
		
		The tutoring page is a much simpler introduction to my tutoring abilities. I think this section would normally have reviews and possible other content as well. I began tutoring this year, and so I do not have much additional content.
	The book list page has a card layout
		I originally coded this in a 2 column layout that got the job done but looked messy and unappealing. Searching online, I found the card layout would probably suit this section much better.
		
	The photography page has a sliding gallery layout
		This puts my work front and center and allows the user to navigate it easily
	

Javascript
	
	My intent was to use Javascript for functionality and to make the code clean for reading and easily readable.
	I use Javascript for asynchronous calls to 3 different APIs. At first, I was using XHRs to retrieve the data, but I switched to fetch. It's more modern, I think more APIs support it, and it seems easier to read once you get the hang of it.
	
	Where I call these APIs, I use Vue JS objects and directives to integrate the data received into the HTML. I was previously using vanilla JS to direct the integration of this data into the DOM, but Angular code looked cleaner to me and easier to read.
	
	I use a simple cart library implemented in JS for a cart that works around the website. There are 3 possible products that you can add to the cart: photography, tutoring, and coding. Each product is shown on the respective page, and the cart is shown across the website, with the option to empty the cart and change quantity of items shown on every page.
Public APIs
	I implement the Quotable Quotes API, the OpenLibrary API, and the Advice Slip APIs.
	I attempted to use the Photoshop, Flickr, Paypal APIs. I got stuck at the authentication part for each of these APIs, so for the time being, I decided to use APIs that do not require authentication to demonstrate that once I am able to clear the mechanics of authentication, I would be able to use any API we need to use.
	I am currently using a proxy to get around CORS, but I would like to implement a cleaner solution.

Backgrounds
Responsive design
	To make the website responsive, the CSS currently supports screen sizes greater than 1000 px wide and less than 400 px wide. The content on each page has been customized for the viewing experiences on desktops, laptops, and mobile phones.
	
	The photography page will only show images on a mobile phone if the device is in landscape mode.
