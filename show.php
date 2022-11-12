<?php
$con=mysqli_connect("localhost","root","","parag");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Parag High School</title>
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
   <!-- Custom styles for this template -->
    <link href="css/Aboutus.css" rel="stylesheet">
    <style>
    
    
    * {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 30px;
    
    text-align: center;
    background: white;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.image {
  display: block;
  width: 80%;
  height: auto;
 margin: 2% 10%;
    
}
  
/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}



/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
footer {
    padding: 20px;
    text-align: center;
    background: #333333;
    margin-top: 20px;

    overflow:hidden;
   
    
    }
  
section{
    width: 29%;
    float: left;
    margin: 7% 2%;
    text-align: center;
}
    

footer p , footer h3 {
    color: white;
    
    
}
footer p a{
    
    color:#fff;
    text-decoration: none;
}
ul.social li img{
    width: 30px;
    height: 30px;
    
}
ul.social li{
    display: inline;
    
}
    
    footer.second{
    
    border-top: 1px solid #000000;
    background: #333333;
    max-height: 50%;
    text-align: center;opacity: 0.90;
}

 
  
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }

    
    }
    

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media (max-width: 515px) {
    .topnav a{
        float: none;
        width:100%;
    }
    

     section{
    width: 100%;
        border-top: 1px solid #fff;
         border-bottom: 1px solid #fff;
    float:none;
    margin: 7% 2%;
    text-align: center;
}
   
    }
    @media(max-width: 400px){
        .text {
            font-size: 13px;
            
        }
    }
    
    
    
    
    </style>
    </head>
<body>

<div class="header">
  <h2>Parag Higher Secondry <br> School</h2>
    
</div>

<div class="topnav">
  <a href="index.html">Home</a>
  <a href="Aboutus.html">About Us</a>
<a href="studentlife.html">Student Life</a>
       <a href="contact.php">Contect</a>

</div>

<div class="row">
  <div class="leftcolumn">
     <div class="card" >
            <h1 style="font-family: cursive; margin:2% 7%; ">Show Table</h1>
  
        <table style="width:100%; border:10px solid gray;">
        <tr style="background-color:pink;">
            <td>ID</td>
            <td>Name</td>
            <td>Dob</td>
            <td>Contact</td>
            <td>Email</td>
            <td>City</td>
            </tr>
        
        <?php
              $q=mysqli_query($con,"select * from  student1");
              while($res=mysqli_fetch_assoc($q)){
              ?>    
              
         <tr style="background-color:yellow;">
             <td><?php echo $res["Id"]; ?> </td>
             <td><?php echo $res["Name"]; ?> </td>
             <td><?php echo $res["Dob"]; ?> </td>
             <td><?php echo $res["Contact"]; ?></td>
             <td><?php echo $res["Email"]; ?> </td>
             <td><?php echo $res["city"]; ?> </td>
             <?php }    ?>
			  
			  </tr>
         
        </table>
                 
        
        
      </div>
 
 
  </div>
  <div class="rightcolumn">

    <div class="card">
      <h3>News</h3>
<marquee onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" direction="up" height="250" scrollamount="2" scrolldelay="10"> 
    <ul style="list-style: disc outside; padding-left: 20px;">
        <li>Farewell for class XII on 31st Jan 18</li> <li>PTM on 3rd Feb 18</li>
        <li>Final Examination for class XI on 5th Feb onwards</li>
        <li><a href="admission/admission-notice-for-class-l-k-g-2018-19/">Admission Notice for Class L.K.G 2018-19</a></li> 
        <li><a href="admission/class-lkg-2018-19/">Admission for Class L.K.G 2018-19</a></li> <li>Annual Sports Day celebrated with much enthusiasm on 21st December 2017.</li>
        <li>A day of mixed feelings, Retirement &amp;amp; Silver Jubilee celebrated on 22nd December 2017.</li> 
        <li>The S.M.A. family shared the joy of Christmas on 23rd December 2017.</li>
        <li>The S.M.A. family wishes you all A Merry Christmas and A Happy New Year 2018.</li> <li>School re-opens after the Winter Vacation on 8th January 2018.</li>
        <li>Periodic Exams and Pre-Boards from 9th January 2018 onwards.</li>
    </ul>
        </marquee>
    </div>
    <div class="card" >
      <h3 style=" border: 1px solid #f1f1f1;"><a href="Aboutus.html" style="color:black;text-decoration: none;">About US</a></h3>
        <p style=" border: 1px solid #f1f1f1; "><b><a href="principalmsg.html" style="color:black;text-decoration: none;">Principal's Message</a></b></p>
        <P style=" border: 1px solid #f1f1f1;"><b><a href="Schoolinformation.HTML" style="color:black;text-decoration: none;">School information</a></b></P>
        <p style=" border: 1px solid #f1f1f1;"><b><a href="Facilities.html" style="color:black;text-decoration: none;">Facilities</a></b></p>
           <p style=" border: 1px solid #f1f1f1;"><b><a href="History.html" style="color: darkgrey;text-decoration: none;">History</a></b></p>
         
    </div>
  </div>
</div>

 <footer>
    <section>
    <img src="img/logo1.png" width="100px" alt="kya yrr tu bhi">
    
    </section>
    
    <section>
    <h3>Contact</h3>
        <p><b>9755-178521</b></p>
    <p>PIYUSH DHAKAD</p>
    <p>32,nalyabhakal ujjain</p>
    </section>
    
    <section>
    <h3>connect with us!</h3>
    <ul class="social">
        <li> <a href="#"><img src="img/th%20(3).jpg"  alt="fbicon"> </a> </li>
        <li> <a href="#"><img src="img/th.jpg"  alt="googleicon"> </a> </li>
        <li> <a href="#"><img src="img/th%20(2).jpg"  alt="instaicon"> </a> </li>
        <li> <a href="#"><img src="img/play-button-vector-9417870.jpg" alt="allicon"> </a> </li>
        </ul>
        
    </section>
    </footer>  
  <footer class="second">
    <p>Devloped by Piyush Dhakad</p>
    </footer>
</body>
</html>
