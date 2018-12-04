<!DOCTYPE html>
<html>
<head>
<style>
h1 {      font-family: 'Rock Salt', cursive;  text-align: center; font-size:40px; margin-top:50px; color:#fff;
	  ; 
}

body
{
	background-image: url(img/productback.jpg);
    background-attachment: fixed;
    background-size: cover;
	font-family:helvetica;
	margin:0px auto;
	padding:0px;
}
#cart_button
{
	margin-top:-100px;
	margin-left:80px;
	cursor:pointer;
	float:right;
}
#cart_button img
{
	width:60px;
	height:60px;
}
#cart_button input[type="button"]
{
	background:none;
	border:none;
	background-color:red;
	border-radius:100%;
	height:30px;
	width:30px;
	margin-top:0px;
	color:white;
	font-size:17px;
	cursor:pointer;
	position:relative;
	top:-4px;
	right:18px;
}
#mycart
{
	display:none;
	background:white;
	width:800px;
	border:2px solid #000;
	position:absolute; right:0px; top:90px;
	z-index:1;
}
#mycart .cart_items
{
	border-bottom:1px dashed silver;
	padding:20px;
	padding-left:10px;
}
#mycart .cart_items img
{
	width:70px;
	height:50px;
	float:left;
}
#mycart .cart_items p
{
	margin:0px;
	font-size:17px;
	color:green;
}

#item_div{
	width:86%;
	margin:60px auto;
	}
.items{
	padding:20px;
	background-color:white;
	width:250px;
	height:350px;
	margin-top:20px;
	box-shadow:0px 0px 10px 0px #A4A4A4;
	box-sizing:border-box;
	float:left;
	margin:20px;
	position:relative;
	transition: all .2s ease-out;
}
.items:hover {
    transform: scale(1.05);
}
.items:hover input[type="button"]
{
	display:block;
}
.items input[type="button"]
{
	display:none;
	background:none;
	background-color:black;
	width:200px;
	height:50px;
	border:none;
	font-size:20px;
	color:white;
	position:absolute;
	top:150px;
	left:20px;
	cursor:pointer;
}
.items img
{
	width:200px;
	height:200px;
}
.items p
{
	color: black;
}
    nav{
  
    position: relative;
    width: 100%;
    background: transparent;
    overflow: auto;
    
}
ul{
   
    padding: 0;
    margin: 0 0 0 150px;
    list-style: none;
}
li{
    float: right;
   
}

nav a{
    width: 100px;
    display: block;
    padding: 20px 15px;
    text-decoration: none;
    font-family: 'Rock Salt', cursive;
    font-size: 15px;
    color: white;
    text-align: center;
}
nav a:hover{
    background: #F08080;
    transition: 0.5s;
    text-transform: uppercase;
}


.cap_status{color:#fff; font-size:20px; float:right; margin-right:30px;  }
</style>
<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">

  <script type="text/javascript" src="../jquery.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){

      $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          total_cart_items:"totalitems"
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });

    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=ele.getElementsByTagName("img")[0].src;
	  var name=document.getElementById(id+"_name").value;
	  var price=document.getElementById(id+"_price").value;
	
	  $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
		  $('.cap_status').html("Adder to Cart").fadeIn('slow').delay(2000).fadeOut('slow');
        }
      });
	
    }

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle();
      }
     });

    }
	
</script>
  
</head>

<body>
<nav>

<ul>
<li><a href="contact.php">CONTACT</a></li>
<li><a href="sell.php">PRODUCTS</a></li>
<li><a href="befandaf.php">B & A</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="index.php">HOME</a></li>
</ul>   
</nav>
<h1>Images on sale</h1>

<p id="cart_button" onclick="show_cart();">
  <img src="img/5.png">
  <input type="button" id="total_items" value="">
</p>

<div id="mycart"></div>
<div class="cap_status"></div>


<div id="item_div">

  <div class="items" id="item1">
    <img src="img/product1.jpg">
    <input type="button" value="Add To CART" onclick="cart('item1')">
    <p>Pic 1</p>
    <p>Price - $10</p>
    <input type="hidden" id="item1_name" value="Simple Navy Blue T-Shirt">
    <input type="hidden" id="item1_price" value="$10">
  </div>

  <div class="items" id="item2">
    <img src="img/product2.jpg">
    <input type="button" value="Add To CART" onclick="cart('item2')">
    <p>Pic 2</p>
    <p>Price - $10</p>
    <input type="hidden" id="item2_name" value="Trendy T-Shirt With Back Design">
    <input type="hidden" id="item2_price" value="$10">
  </div>
  
  <div class="items" id="item3">
    <img src="img/product3.jpg">
    <input type="button" value="Add To CART" onclick="cart('item3')">
    <p>Pic 3</p>
    <p>Price - $10</p>
    <input type="hidden" id="item3_name" value="Two Color Half-Sleeves T-Shirt">
    <input type="hidden" id="item3_price" value="$120">
  </div>

  <div class="items" id="item4">
    <img src="img/product4.jpg">
    <input type="button" value="Add To CART" onclick="cart('item4')">
    <p>Pic 4</p>
    <p>Price - $10</p>
    <input type="hidden" id="item4_name" value="Stylish Grey Chinos For Mens">
    <input type="hidden" id="item4_price" value="$140">
  </div>

<a href="clear-cart.php"><p style="color:#fff; text-align:center; text-decoration:underline">Clear Session</p></a>
</div>
</body>
</html>