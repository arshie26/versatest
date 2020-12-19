var cart = {
  // (A) PROPERTIES
  // (A1) HTML ELEMENTS
  tutoringPdt : null, // HTML tutoring products list
  photographyPdt : null,
  codingPdt : null,
  hItems : null, // HTML current cart

  // (A2) CART
  items : {}, // Current items in cart

  // (A3) AVAILABLE PRODUCTS
  // PRODUCT ID => DATA
  products : {
    123: {
      name : "MokBook Ground",
      desc : "Greatest properly off ham exercise all.",
      img : "smiley-1.png",
      price : 2034
    },
    124: {
      name : "Tutoring",
      desc : "Unsatiable invitation its possession nor off.",
      img : "smiley-2.png",
      price : 1247
    },
    125: {
      name : "iPong Max",
      desc : "All difficulty estimating unreserved increasing the solicitude.",
      img : "smiley-3.png",
      price : 675
    },
    126: {
      name : "iTab Pork",
      desc : "Had judgment out opinions property the supplied. ",
      img : "smiley-4.png",
      price : 842
    }
  },

  // (B) LOCALSTORAGE CART
  // (B1) SAVE CURRENT CART INTO LOCALSTORAGE
  save : function () {
    localStorage.setItem("cart", JSON.stringify(cart.items));
  },

  // (B2) LOAD CART FROM LOCALSTORAGE
  load : function () {
    cart.items = localStorage.getItem("cart");
    if (cart.items == null) { cart.items = {}; }
    else { cart.items = JSON.parse(cart.items); }
  },
  
  // (B3) NUKE CART!
  nuke : function () {
    if (confirm("Empty cart?")) {
      cart.items = {};
      localStorage.removeItem("cart");
      cart.list();
    }
  },

  // (C) INITIALIZE
  init : function () {
    // (C1) GET HTML ELEMENTS
    cart.tutoringPdt = document.getElementById("tutoring-products");
    cart.photographyPdt = document.getElementById("photography-products");
    cart.codingPdt = document.getElementById("coding-products");
    cart.hItems = document.getElementById("cart-items");
    
    // (C2) DRAW PRODUCTS LIST
    //cart.hPdt.innerHTML = "";
    let p, item, part;
    for (let id in cart.products) {
      // WRAPPER
      p = cart.products[id];

      item = document.createElement("div");
      item.classList.add("p-item");

      if(p.name === "Tutoring" && cart.tutoringPdt != null){
          cart.tutoringPdt.appendChild(item);  
      }
      else if(p.name === "Photography" && cart.photographyPdt != null){
          cart.photographyPdt.appendChild(item);   
      }

      // PRODUCT IMAGE
      part = document.createElement("img");
      part.src = p.img;
      part.classList.add("p-img");
      item.appendChild(part);

      // PRODUCT NAME
      part = document.createElement("div");
      part.innerHTML = p.name;
      part.classList.add("p-name");
      item.appendChild(part);
      
      // PRODUCT PRICE
      part = document.createElement("div");
      part.innerHTML = "$" + p.price;
      part.classList.add("p-price");
      item.appendChild(part);
      
      // PRODUCT DESCRIPTION
      part = document.createElement("div");
      part.innerHTML = p.desc;
      part.classList.add("p-desc");
      item.appendChild(part);

      // ADD TO CART BUTTON
      part = document.createElement("input");
      part.type = "button";
      part.value = "Add to Cart";
      part.classList.add("p-add");
      part.onclick = cart.add;
      part.dataset.id = id;
      item.appendChild(part);
    }
    
    // (C3) LOAD CART FROM PREVIOUS SESSION
    cart.load();
    
    // (C4) LIST CURRENT CART ITEMS
    cart.list();
  },
  
  // (D) LIST CURRENT CART ITEMS (IN HTML)
  list : function () {
    // (D1) RESET
    cart.hItems.innerHTML = "";
    let item, part, pdt;
    let empty = true;
    for (let key in cart.items) {
      if(cart.items.hasOwnProperty(key)) { empty = false; break; }
    }

    // (D2) CART IS EMPTY
    if (empty) {
      item = document.createElement("div");
      item.innerHTML = "Cart is empty";
      cart.hItems.appendChild(item);
    }
    
    // (D3) CART IS NOT EMPTY - LIST ITEMS
    else {
      let p, total = 0, subtotal = 0;
      for (let id in cart.items) {
        // ITEM
        p = cart.products[id];
        item = document.createElement("div");
        item.classList.add("c-item");
        cart.hItems.appendChild(item);

        // NAME
        part = document.createElement("div");
        part.innerHTML = p.name;
        part.classList.add("c-name");
        item.appendChild(part);

        // REMOVE
        part = document.createElement("input");
        part.type = "button";
        part.value = "X";
        part.dataset.id = id;
        part.classList.add("c-del");
        part.addEventListener("click", cart.remove);
        item.appendChild(part);

        // QUANTITY
        part = document.createElement("input");
        part.type = "number";
        part.value = cart.items[id];
        part.dataset.id = id;
        part.classList.add("c-qty");
        part.addEventListener("change", cart.change);
        item.appendChild(part);
        
        // SUBTOTAL
        subtotal = cart.items[id] * p.price;
        total += subtotal;
      }

      // EMPTY BUTTONS
      item = document.createElement("input");
      item.type = "button";
      item.value = "Empty";
      item.addEventListener("click", cart.nuke);
      item.classList.add("c-empty");
      cart.hItems.appendChild(item);

      // CHECKOUT BUTTONS
      item = document.createElement("input");
      item.type = "button";
      item.value = "Checkout - " + "$" + total;
      item.addEventListener("click", cart.checkout);
      item.classList.add("c-checkout");
      cart.hItems.appendChild(item);
    }
  },

  // (E) ADD ITEM INTO CART
  add : function () {
    if (cart.items[this.dataset.id] == undefined) {
      cart.items[this.dataset.id] = 1;
    } else {
      cart.items[this.dataset.id]++;
    }
    cart.save();
    cart.list();
  },

  // (F) CHANGE QUANTITY
  change : function () {
    if (this.value == 0) {
      delete cart.items[this.dataset.id];
    } else {
      cart.items[this.dataset.id] = this.value;
    }
    cart.save();
    cart.list();
  },
  
  // (G) REMOVE ITEM FROM CART
  remove : function () {
    delete cart.items[this.dataset.id];
    cart.save();
    cart.list();
  },
  
  // (H) CHECKOUT
  checkout : async function () {
    // SEND DATA TO SERVER
    // CHECKS
    // SEND AN EMAIL
    // RECORD TO DATABASE
    // PAYMENT
    // WHATEVER IS REQUIRED
    // 1. Set up your server to make calls to PayPal

    // 1a. Add your client ID and secret
    PAYPAL_CLIENT = 'AUxPMtZcE4OGEhJcrzclEZ_nmH31jYBRBAcCaOepKvxRnXbUtScdBQStyr34BfiR25OvngcYboIja61A';
    PAYPAL_SECRET = 'EPqFnChkfu0RPUuftpc2jQTWLo2PVUmCcJksl1GVH59dnONA0ydEQ1AUFcNV8DcFG_Lz2-5DOO7n91Kh';

    // 1b. Point your server to the PayPal APIs
    PAYPAL_OAUTH_API = 'https://api.sandbox.paypal.com/v1/oauth2/token/';
    PAYPAL_ORDER_API = 'https://api.sandbox.paypal.com/v2/checkout/orders/';

    // 1c. Get an access token from the PayPal API
    basicAuth = btoa(`${ PAYPAL_CLIENT }:${ PAYPAL_SECRET }`);
    alert(basicAuth);
    let auth = await fetch(PAYPAL_OAUTH_API, {
      headers: {
        Accept:        `application/json`,
        Authorization: `Basic ${ basicAuth }`
      },
      data: `grant_type=client_credentials`
    });

    // 2. Set up your server to receive a call from the client
    

      // 3. Call PayPal to set up a transaction
      fetch(PAYPAL_ORDER_API, {
        headers: {
          Accept:        `application/json`,
          Authorization: `Bearer ${ auth.access_token }`
        },
        data: {
          intent: 'CAPTURE',
          purchase_units: [{
            amount: {
              currency_code: 'USD',
              value: '01.00'
            }
          }]
        }
      }).then((response) =>{

      }).catch((error) =>{
          console.error(order.error);
          return response.send(500);
      });

    

    alert("TO DO");

    /*
    var data = new FormData();
    data.append('cart', JSON.stringify(cart.items));
    data.append('products', JSON.stringify(cart.products));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "SERVER-SCRIPT");
    xhr.onload = function(){ ... };
    xhr.send(data);
    */
  }
};
window.addEventListener("DOMContentLoaded", cart.init);