<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organ Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <!-- <link rel="stylesheet" type="text/css" href="css/navbar.css"> -->
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div id="dontscroll">

<script type="text/javascript">
  function signup()
  {
  document.getElementById('id01').style.display='block';
  }
</script>


	<header>
	<div style="text-align: left;
  margin-left: 200px;
font-family: 'Philosopher', sans-serif;
font-size: 30px; display: inline-block;"><a href="index.php" style="color: white;">Organ Receiving and Giving Awareness Network</a></div><div style="display: inline-block; margin-left: 100px;">  <div>   
 <?php
     session_start();
if(isset($_SESSION['username']))
{
     echo 'Welcome   ' ,$_SESSION["username"] ," ", '<a href="/dbms/login/logout.php"><button  style="width:auto; background-color:red;">Logout</button></a>';
}
else 
    echo '<a href="signup.html"><button onclick="signup();" style="width:200px;">Sign Up</button></a>&nbsp &nbsp<a href="login.php"><button style="width:200px; background-color:red">Login</button></a>';
?></div>
</header>













<nav class="navbar navbar-expand-lg navbar-light bg-dark"  >
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color: white;" href="#"><span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item" id="drop">
        <a class="nav-link" style="color: white;" href="#" id="homebar" >Understanding Organ Donation</a>
        <ul class="submenu">
          <li><a href="donationProcess.php">Organ Donation Process</a></li>
          <li><a href="whatToDo.php">What Do I need To Do</a></li>
          <li><a href="discussFam.php">Discuss With Your Family</a></li>
                </ul>
      </li>
      <li class="nav-item" >
        <a class="nav-link" style="color: white;"" href="signup.html" id="homebar">Register Your Decision</a>
    </li>
        <li class="nav-item" >
        <a class="nav-link " style="color: white;"  href="stories_of_hope.php" id="homebar">Stories of Hope</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" style="color: white;"" href="support.php" id="homebar">Support Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="faq.php" id="homebar">Answers to Your Questions</a>
      </li>

    </ul>
   
  </div>
</nav>
</div>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



<section id="sectionid">

<div class="slideshow-container">
  <div class="Slides ">
    
    <img src="images/aaa.png" style="width:100%" >   
  </div>

  <div class="Slides">
    
    <img src="images/bbb.png" style="width:100% ">
  </div>

  <div class="Slides">
    
    <img src="images/ccc.png" style="width:100%;">
  </div>

</div>
<br>



</section>






<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("Slides");
    
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    
    slides[slideIndex-1].style.display = "block";  

    setTimeout(showSlides, 3000); 
}
</script>



  <div class="partner">
    <h1>Our Proud Partners</h1>
  </div>
<div class="part">
      <div id="p1"><h3>ZDCC</h3><P>This is a registered, ngo that acts as a focal point for everything related to cadaver organ donation, retrieval and transportation, transplantation.<br><br><a class="ZDCC" href="#">Learn More...</a></P></div>


      <div id="p2"><h3>Narmada Kidney Foundation</h3><P>It is a Non Government Organization that aims to help people with kidney disease. The foundation’s guiding principle is “Life shared life lived”.<br><br><a class="narmada" href="#">Learn More...</a></P></div>
      

      <div id="p3"><h3>Shatayu</h3><P>It is a Non Government Organization that aims to help people with kidney disease. The foundation’s guiding principle is “Life shared life lived”.<br><br><a class="shatayu" href="#">Learn More...</a></P></div>
      <br>
      <!-- <hr> -->
      <div class="divider2"></div>
    </div>
<br>
<br>

<div><h3>Expert Bites</h3></div>
<hr><span class="section-title-bullet">
            </span>
<br>
<div class="expert">
<div class="skin">
<iframe width="400" height="315" src="https://www.youtube.com/embed/lLmQfYR8Qrc" frameborder="0" allowfullscreen></iframe>
<h2>Skin Donation Awareness</h2>	
<p>&#39&#39Watch these stories of people who would have died, had not a grieving family thought of donating their loved one&#39s organ. They are the lucky few who survived, thanks to the selflessness of others. Share their stories and help spread the message. Just one organ donor can save 8 lives.&#39&#39<p>
</div>
<div class="brain">
<iframe width="400" height="315" src="https://www.youtube.com/embed/-_RO3VaZBio" frameborder="0" allowfullscreen></iframe>
<h2>What is Brain Death?</h2>
<p>
	Brain death occurs when a person has an irreversible, catastrophic brain injury, which causes total cessation of all brain function (the upper brain structure and brain stem). Brain death is not a coma or persistent vegetative state. Brain death is determined in the hospital by one or more physicians not associated with a transplantation team.
</p>


</div>
<div class="organ" >
<iframe width="400" height="315" src="https://www.youtube.com/embed/lp_fr9PKU58" frameborder="0" allowfullscreen></iframe>
<h2>What is Organ Doantion?</h2>
<p>
	Organ donation is when a person allows an organ of theirs to be removed, legally, either by consent while the donor is alive or after death with the assent of the next of kin.Donation may be for research, or, more commonly healthy transplantable organs and tissues may be donated to be transplanted into another person
</p>

</div>
</div>

<footer><p id="foot"><img src="images/fb.png" style="width:25px">&nbsp<img src="images/t.png" style="width:25px">&nbsp<img src="images/you.png" style="width:25px">&nbspCopyright &copy; .com &nbsp &nbsp &nbsp </p></footer>
<!-- </div> -->















</body>
</html>



<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Philosopher');






h3
{
  text-align: center;
  font-family: 'Philosopher', sans-serif;
}
header
{
  
  padding: 10px;
    color: white;
    background-color: #035851;
    clear: left;
    text-align: left;
    /*position: fixed;*/
    /*width: 100%;*/
  
}






footer{
  padding: 10px;
    color: white;
    background-color: #035851;
    clear: left;
    text-align: center;
  }

p
  {
    margin-left: 10px;
  }
  
  .skin
{
  float: left;
  
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
.brain
{
  float: left;
  
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
.organ
{
  float: left;
  margin-left: 30px;
  width:400px;
  font-family: 'Philosopher', sans-serif;

}
  
h1
{
text-align: left;
font-family: 'Philosopher', sans-serif;
font-size: 30px;

}
#homebar
{

  text-align: center;
  margin-left: 70px;
  


}
a
{
  font-family: 'Philosopher', sans-serif;
  
}
#homebar:hover
{
  background-color: #0b5b75;
}
#foot
{
  text-align: right;
}

/*#dontscroll
{
  position: fixed;
  overflow: hidden;
  width: 100%;
  margin-top: -116px;
}
#sectionid
{
  margin-top: 116px;
}*/


 button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
}
button:hover{background-color:#46a049 }



/*dropdown menu*/

#navbarSupportedContent ul
{
  margin:0px;
  padding:0px;
  list-style:none;
  color:white;
  z-index:100;
}

#navbarSupportedContent ul li
{
  float:left;
  height:60px;
  line-height:50px;
  
  opacity: 0.8;
  text-align:center;
  
}
.submenu li
{
  background-color:black;
  
}
  
#navbarSupportedContent ul li a
{
  text-decoration:none;
  color:white;
  display:block;
  width:80%;
}

#navbarSupportedContent ul li a:hover
{
  background-color:#0b5b75;
  width:80%;
  height:60px;
}

#navbarSupportedContent ul li ul li
{
  display:none;
  
  width:100%;
  
}

#navbarSupportedContent ul li:hover ul li
{
  display:block;
  color:white;
  height:60px;
  width:60%;
}

</style>