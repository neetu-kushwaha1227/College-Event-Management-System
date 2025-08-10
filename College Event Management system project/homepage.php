<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
 
  <!--Custom js links-->

    <script src="main.js"></script>
</head>
<body>

  <header class="home" id="home" >
   <div class="header-scrolled">
    <div class="logo">
        <h1><a href="homepage.php" style="color: white; text-decoration:none;">CEMS</a></h1>
        <div class="navbar fixed-top" >
            <a href="#home">Home</a>
            <a href="#about">About us</a>
            <a href="#events">Event show</a>
            <a href="#contact">Contact</a>
            <a href="studentlogin.php">Login</a>
            
            
        </div>
    </div>
  </div>
  <div class="banner_wraper">
    <div class="banner">
      <div class="slogan">
        <h4>We plan The</h4>
        <p>Best Events</p>
  
      </div>
    </div>
  </div>
   
    
    </header>
  <!--Navbar End-->
 

  <!--About us atart-->
  <section class="about" id="about">
       
    <div class="aboutus">
        <h1>About us</h1>
        <div class="aboutme">
           <div class="left-side">
            <img src="Event2.png" alt="Blood-donation">
            </div>
            <div class="right-side">
            We at CEMS understand the importance of college events in shaping students' academic and extracurricular
            journeys. Our platform provides an easy and efficient way to organize, manage, and track events, ensuring a seamless 
            experience for both participants and organizers. With our digital tools, students can explore upcoming events, register 
            effortlessly, and stay updated with event details. Elevate your college experience with a smarter way to manage events!
            We aim to bridge the gap between students and campus activities by making event management efficient, engaging, and 
            digitally accessible. Our mission is to promote student engagement, enhance event visibility, and reduce manual effort 
            through automation and real-time updates.
            Join us in revolutionizing the way college events are managed. Whether you're a student looking to participate or an 
            organizer planning an event, [Your System Name] ensures an effortless and interactive experience for everyone. Let’s create,
             manage, and celebrate college events like never before!

            </div>
        </div>
    </div>
</section>
  <!--About us end-->

<!--event show-->

<div class="event_show" id="events">
  <div class="events">
    <h1>Event show</h1>
    <div class="container">
      <div class="card">
     
        <img src="fresher_party.jpg" alt="Fresher party">
        <div class="content">
          <h3>
            <?php
            include("db.php");
            $sql="Select * from addevent where eid=104";
            $data=mysqli_query($conn,$sql);
            if(!$data){
              die("Invalid query");
            }
            $a=array('etitle','miniguest','maxguest','dates');

            while($r=mysqli_fetch_assoc($data))
            {
              echo "$r[etitle]<br>
                 <b style='color:Black;'>Minimum guest:- <small style='color:red;'>$r[miniguest]</small><br>
                 maximum guest:- <small style='color:red;'>$r[maxguest]</small><br>
                 Dates:-</b> <small style='color:red;'>$r[dates]</small>";

            }
            
            ?>
             <form action="studentLogin.php">
             <input type="submit" value="Participates" style="padding: 9px; background-color:green; color:white; cursor:pointer;">
            </form>
            

          </h3>
        </div>
      </div>

      <div class="card">
        <img src="Sports_Day.avif" alt="Sports Day">
        <div class="content">
          <h3>     <?php
          include("db.php");

          $sql="SELECT * FROM addevent where eid=102";
          $data= mysqli_query($conn,$sql);

          if(!$data){
            die("Invalid query:");
          }
          $a=array('etitle','miniguest','maxguest','dates');
         //echo "<table border='1' width='100%' style='margin:34px '>";
          ?>
          
        <?php
        while($r=mysqli_fetch_assoc($data))
        {
            echo "$r[etitle]<br>
                 <b style='color:Black;'>Minimum guest:- <small style='color:red;'>$r[miniguest]</small><br>
                 maximum guest:- <small style='color:red;'>$r[maxguest]</small><br>
                 Dates:-</b> <small style='color:red;'>$r[dates]</small>";
        }

        ?>
           <form action="studentLogin.php">
             <input type="submit" value="Participates" style="padding: 9px; background-color:green; color:white; cursor:pointer;">
            </form>
        </h3>
        </div>
      </div>

     

      <div class="card">
        <img src="fresher_party.jpg" alt="Freaher_party">
        <div class="content">
          <h3>
         <?php
          include("db.php");

          $sql="SELECT * FROM addevent where eid=101";
          $data= mysqli_query($conn,$sql);

          if(!$data){
            die("Invalid query:");
          }
          $a=array('etitle','miniguest','maxguest','dates');
         //echo "<table border='1' width='100%' style='margin:34px '>";
          ?>
          
        <?php
        while($r=mysqli_fetch_assoc($data))
        {
            echo "$r[etitle]<br>
                 <b style='color:Black;'>Minimum guest:- <small style='color:red;'>$r[miniguest]</small><br>
                 maximum guest:- <small style='color:red;'>$r[maxguest]</small><br>
                 Dates:- <small style='color:red;'>$r[dates]</small>";
        }

        ?>
         
          </h3>
        </div>
      </div>
    </div>

  </div>

</div>

<!--event show end-->

<!--Contact us-->
<div class="contact_us" id="contact">
   <div class="content">
    <h1>Contact us</h1>
  </div>
  <div class="container">
    <div class="contactInfo">
      <div class="box">
        <div class="icon"><i class="fa-solid fa-location-dot"></i>
          <div class="text">
            <h3>Addresss</h3>
            <p>4671 pataliya faliya,<br>silvassa,dadra nagar haveli<br>xxxxxx</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="icon"><i class="fa-solid fa-square-phone"></i>
          <div class="text">
            <h3>Phone number</h3>
            <p>xxxxxxxxxx</p>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="icon"><i class="fa-solid fa-envelope"></i>
          <div class="text">
            <h3>Email</h3>
            <p>Ssrcollege123@gmail.com</p>
          </div>
        </div>
      </div>
    </div> 
      <div class="contactform">
        <form action="">
          <h2>Send message</h2>
          <div class="inputBox">
             <input type="text" name="name" required="required">
             <span>Full Name</span>
          </div>

          <div class="inputBox">
            <input type="text" name="email" required="required">
            <span>Email</span>
         </div>

         <div class="inputBox">
          <input type="text" name="coursename" required="required">
          <span>course</span>
        </div>
         
        <div class="inputBox">
          <textarea required="required" ></textarea>
          <span>Type your message....</span>
       </div>

       <div class="inputBox">
         <input type="submit" name="submit" value="send">
       </div>


        </form>
      </div>



    
  </div>
</div>
<!--contact us End-->

<!--Footer start-->
<footer>
  <h1>copy right @shwwta college</h1>
</footer>
<!--Footer end-->

   
  
</body>
</html>