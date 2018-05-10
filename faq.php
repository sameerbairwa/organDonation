<!DOCTYPE html>
<html lang="en">
<head>
  <title>Organ Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/navbar.css">
 <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
 <style type="text/css">
   #faq
   {
    margin-left: 70px;
    background-color: red;
   }
   #l1
   {
    color: #009749;
   }
   #fq
   {

    color:#009749;
    margin-top: -80px;
    text-align: center;
   }
/*   #scroll
{
  position: fixed;
  overflow: hidden;
  width: 100%;
  /*margin-top: -116px;*/
}*/
#a1
{
  color:black;
}
 </style>

</head>
<body>
  <div id="scroll">




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
    echo '<a href="signup.html"><button style="width:200px;">Sign Up</button></a>&nbsp &nbsp<a href="login.php"><button style="width:200px; background-color:red">Login</button></a>';
?></div>



</header>




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
        <a class="nav-link" style="color: white;" href="support.php" id="homebar">Support Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="faq.php" id="faq">Answers to Your Questions</a>
      </li>

    </ul>
   
  </div>
</nav>
</div>




  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<br>
<br>
<br>
<br>
<br>
<h1 id="fq"><b> FAQs </b></h1>
<br>
<br>
<br>

<ol>
  <li id="l1"><b>Would my family be allowed to see my body after donation? </b><br>
    <p id="a1">(Ans).  Families are given the opportunity to spend time with their loved one after the operation if they wish. Arrangements for viewing the body after donation are the same as after any death.<br><br>
    </li>

    <li id="l1"><b>Can I be a donor because I have an existing medical condition? </b><br>
    <p id="a1">(Ans).  Having a medical condition does not necessarily prevent a person from becoming an organ or tissue donor. The decision about whether some or all organs or tissue are suitable for transplant is made by a healthcare professional, taking into account your medical history.<br><br>
    </li>

    <li id="l1"><b>If I donate my organs it will cause delays to my funeral arrangements? </b><br>
    <p id="a1">(Ans).  Yes there is a possibility. However, given the altruistic nature of this donation, families usually accept this and take it as part of the process of donation.<br><br>
    </li>

    <li id="l1"><b>Will Organ donation leave my body disfigured? </b><br>
    <p id="a1">(Ans).  Organs are always removed with the greatest of care and respect for the person. This takes place in a normal operating theater under sterile conditions by a team of specialized doctors. Afterwards the surgical incision is carefully closed and covered by a dressing in the normal way. The operation is carried out by specialist health care professionals who always ensure that the donor is treated with the utmost respect and dignity.<br><br>
    </li>

    <li id="l1"><b>Am I too old to be a donor?</b> <br>
    <p id="a1">(Ans).  In the case of cornea and some other tissue, age does not matter. For other organs it is the person’s physical condition, not age, which is the deciding factor. Specialist health care professionals decide in each case which organs and tissue are suitable. Organs and tissue from people in their 70s and 80s are transplanted successfully.<br><br>
    </li>

    <li id="l1"><b>Will my organs go to those who've waited the longest or are the neediest?</b> <br>
    <p id="a1">(Ans).  The rich and famous aren't given priority when it comes to allocating organs. It may seem that way because of the amount of publicity generated when celebrities receive a transplant, but they are treated no differently from anyone else. In fact, what really counts is the severity of illness, time spent waiting, blood type and other important medical information. The organ allocation system is blind to wealth or social status. Factors such as race, gender, age, income, celebrity status are never considered when determining organ recipients.<br><br>
    </li>

    <li id="l1"><b>What is brain death ?</b> <br>
    <p id="a1">(Ans). Brain death is a medical condition when blood flow to the brain ceases and it stops working while the rest of the organs function normally. In this condition, even though the person breathes, he is actually no more. There is no chance of recovery once a person is brain dead.<br><br>
    </li>

    <li id="l1"><b>Can I change my mind once I become an organ donor? </b><br>
    <p id="a1">(Ans). You always have the option to change your mind. You can withdraw your registration, tear up your organ donor card and let your family know that you have changed your mind.<br><br>
    </li>

    <li id="l1"><b>Why should i donate my organs?</b> <br>
    <p id="a1">(Ans). After you die, your organs are wasted if you do not donate them. But by donating them, you get the chance to give a gift of new life to someone.<br><br>
    </li>

    <li id="l1"><b>Does my religion support the idea of organ donation? </b><br>
    <p id="a1">(Ans). It is a myth that one's religion does not support the idea of organ donation. Donation is a noble act and none of the religions practiced in India say anything against it. If in doubt, it would be best to discuss it with your religious or spiritual leader.<br><br>
    </li>
  </ol>



<!-- <section id="sectionid">

<div class="slideshow-container">
  <div class="Slides ">
    
    <img src="aaa.png" style="width:100%" >   
  </div>

  <div class="Slides">
    
    <img src="bbb.png" style="width:100% ">
  </div>

  <div class="Slides">
    
    <img src="ccc.png" style="width:100%;">
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

 -->

  <!-- <div class="partner">
    <h1>Our Proud Partners</h1>
  </div>
<div class="part">
      <div id="p1"><h3>ZDCC</h3><P>This is a registered, ngo that acts as a focal point for everything related to cadaver organ donation, retrieval and transportation, transplantation.<br><br><a class="ZDCC" href="#">Learn More...</a></P></div>


      <div id="p2"><h3>Narmada Kidney Foundation</h3><P>It is a Non Government Organization that aims to help people with kidney disease. The foundation’s guiding principle is “Life shared life lived”.<br><br><a class="narmada" href="#">Learn More...</a></P></div>
      

      <div id="p3"><h3>Shatayu</h3><P>It is a Non Government Organization that aims to help people with kidney disease. The foundation’s guiding principle is “Life shared life lived”.<br><br><a class="shatayu" href="#">Learn More...</a></P></div>
      <br>
      <!-- <hr> -->
    
 <!--   <div class="divider2"></div>
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
</div> -->
<footer><p id="foot"><img src="images/fb.png" style="width:25px">&nbsp<img src="images/t.png" style="width:25px">&nbsp<img src="images/you.png" style="width:25px">&nbspCopyright &copy; .com &nbsp &nbsp &nbsp </p></footer>
<!-- </div> -->





</body>
</html>



<style type="text/css">
  

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