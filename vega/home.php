<html>
    <head>
        <title>home</title>
        <style>
                body  {
    background-image: url("hdd.png");
}
            h2{
                color:yellow;
            }
            
            p{
                color:white;
            }
            
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
    </head>
    <body bgcolor="">
        <h1><font color="brown">VEGA PHARMACEUTICAL SERVICES</font></h1>
        <ul>
  <li class="dropdown">
      <a href="home.php" class="dropbtn">Home</a>
  </li>
  <li><a href="about.php">About</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="pur.php">Purchase</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
        <br>
        <h2 class="w3-center"></h2>

<div class="w3-content w3-section" style="max-width:1400px">
  <img class="mySlides w3-animate-fading" src="1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="4.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="5.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="2n.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="3n.jpg" style="width:100%">
</div>
        
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}
</script>
<br>
<h1><font color="yellow">Prevention Is Better Than Cure!!</h1>
<h2>Easy Tips For A Healthier Life</h2> <br>
<p>
1. Drink a Glass of Water in the Morning<br>
2. Sleep Enough<br>
3. Stretch in the Morning!<br>
4. Snack the Healthy Way<br>
5. Eat Breakfast!<br>
6. Take a Daily Walk<br>
7. Make Social Connections.<br>
8. Study Ingredient Lists of Your Favorite Products.<br>
9. Find New Activities!<br>
10. Love Your Life! :)<br>
</p>

<br>

<h2>Common Seasonal Diseases Can Be Avoided By Taking Necessary Precautions:</h2>
<p>
1)Wear suitable clothes.<br>
2)Cover your mouth and nose while sneezing or coughing.<br>
3)Regularly wash your hands with soap and water.<br>
4)Avoid exposure to illness at home or school.<br>
5)Have a balanced, healthy diet to build immunity.<br>
</p><br>
    <marquee><font color="brown">Developers -  Vaibhav Deshpande And Suraj Kulkarni !.</font></marquee>
    </body>
</html>