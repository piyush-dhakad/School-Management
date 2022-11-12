<!DOCTYPE html>
<html>
<head>
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

        <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
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
  <a href="contact.html" style="color: black;" class="active">Contect</a>
    
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card" >
           
        
        
        
        
        
    <!-- Page Content -->
    <div class="container" >

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact</h1>

   
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?   hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
        
            
            
           
          </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            Parag Higher Secondary School
            <br>    Daulatganj, Ujjain
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: 456001
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">Paraghss@Gmail.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Registration</h3>
          <form name="sentMessage" id="contactForm" method="post" action="conactpage.php" name="frm" onsubmit="validate()"  >
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="name">
                <p class="help-block"></p>
              </div>
            </div>
                  
              <div class="control-gsroup form-group">
              <div class="controls">
                <label>DOB:</label>
                <input type="text" class="form-control" id="dob" name="dob">
              </div>
            </div>
            <div class="control-gsroup form-group">
              <div class="controls">
                <label>contact Number:</label>
                <input type="text" class="form-control" id="contact" name="phone">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="text" class="form-control" id="eml" name="email">
              </div>
            </div>
                <div class="control-group form-group">
              <div class="controls">
                <label>City:</label>
                <input type="text" class="form-control" id="city" name="city">
              </div>
            </div>
              
              
              
              
           
            <div id="success"></div>
            <!-- For success/fail messages -->
           <!-- <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>-->
              <input type="submit" value="Submit" class="form-control" id="email" required data-validation-required-message="Please enter your email address." style="background-color: #c0c0c0;">
            </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
        
        
        
        
        
        
        
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
      
      
      
       <div class="card">

<a href="https://www.youtube.com/watch?v=QoL3MSH5EUs" title="Corporate Video">
    <img  src="img/is.jpg" width="100%" alt="CORPORATE VIDEO" class="youtube" >
           </a>
           <P class="youtubep" style="border-top:2px solid #f1f1f1; border-bottom:1px solid #f1f1f1;">CORPORATE VIDEO</P>
      
      </div>
      
    <div class="card" >
      <h3 style=" border: 1px solid #f1f1f1;"><a href="Aboutus.html" style="color:black;text-decoration: none;">About US</a></h3>
        <p style=" border: 1px solid #f1f1f1; "><b><a href="principalmsg.html" style="color:black;text-decoration: none;">Principal's Message</a></b></p>
        <P style=" border: 1px solid #f1f1f1;"><b><a href="Schoolinformation.HTML" style="color:black;text-decoration: none;">School information</a></b></P>
        <p style=" border: 1px solid #f1f1f1;"><b><a href="Facilities.html" style="color:black;text-decoration: none;">Facilities</a></b></p>
           <p style=" border: 1px solid #f1f1f1;"><b><a href="History.html" style="color:black;text-decoration: none;">History</a></b></p>
         
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
