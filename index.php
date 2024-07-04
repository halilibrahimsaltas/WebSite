<?php
$servername = "localhost";
$username = "halilsal_contact_db";
$password = "u6b47wzCfgcswCLRr5Vv";
$dbname = "halilsal_contact_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $topic = mysqli_real_escape_string($conn, $_POST['topic']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name='$name' AND email='$email' AND topic='$topic' AND message='$message'") or die('Query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'Message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO contact_form (name, email, topic, message) VALUES ('$name', '$email', '$topic', '$message')") or die('Query failed');
        $message[] = 'Message sent successfully!';
    }
}
// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halil İbrahim SALTAŞ </title>

    <!--font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!--custom css file  link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if (isset($$message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>



    <!--jquery cdn  link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--custom js file  link -->

    <script src="js/script.js"></script>





</body>
</html>

<!-- header section starts-->

<header>

    <div class="user">
        <img src="images/profile-pic (19).png" alt="">
        <h3 class="name">Halil İbrahim SALTAŞ</h3>
        <P class="post">Backend Developer</P>

        <div class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>

</header>

<!-- header section ends-->

<div id="menu" class="fas fa-bars"></div>


<!-- home section ends-->

<section class="home" id="home">

    <h3>HI THERE</h3>
    <h1>I'M <span>Halil İbrahim SALTAŞ</span></h1>
    <p>I am a mechanical engineer, currently  trying to be a software developer and working on Stack Overflow Clone project while using Angular, Spring Boot and MySQL.
   </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>


</section>


<!-- home section ends-->

<!--about section startss-->

<section class="about" id="about">

    <h1 class="heading"><span>about </span>me</h1>

    <div class="row">

        <div class="info">
            <h3><span>name: </span>Halil İbrahim SALTAŞ</h3>
            <h3><span>age: </span> 26</h3>
            <h3><span>qualification: </span> BMS</h3>
            <h3><span>post: </span>Backend Developer</h3>
            <h3><span>language: </span>Turkish</h3>
            <a href="https://drive.google.com/file/d/1mL9X3ukStdyygoNDCSoSJuJvdFjNLIBc/view" target="_blank"><button class="btn">dowland CV <i class="fas fa-dowload"> </i></button></a>

        </div>

        

        <div class="skills-section">
            
            <h3 class="skills"><span>skills</span> </h3>
           <div class="counter">
            <div class="box">
                <span><img src="images/icons8-python-96.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-css-96.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-html-96.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-java-100.png" alt="">
                </span>
               
            </div>
            <div class="box">
                <span><img src="images/icons8-mysql-96.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-postgresql-100.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-spring-boot-96.png" alt="">
                </span>
            </div>
            <div class="box">
                <span><img src="images/icons8-js-96.png" alt="">
                </span> 
            </div>
        
          </div>

        </div>

    </div>



</section>
<!--about section ends-->

<!--education section starts-->

<section class="education" id="education">

<h1 class="heading"> my <span>education </span> </h1>

<div class="box-container">

  <div class="box">
    <i class="fas fa-graduation-cap"></i>
    <span>2022</span>
    <h3>yıldız technical university</h3>
    <p>mechanical Engineering (bachelor's degree & 2.80)--İstanbul</p>
  </div>

  <div class="box">
    <i class="fas fa-graduation-cap"></i>
    <span>2017</span>
    <h3>yıldız technical university</h3>
    <p>mechatronics Engineering (Bachelor's Degree)--İstanbul</p>
  </div>

  <div class="box">
    <i class="fas fa-graduation-cap"></i>
    <span>2015</span>
    <h3>çan fen lisesi</h3>
    <p>--Çanakkale</p>
  </div>

</div>

</section>
<!--education section ends-->

<!--portfolio section starts-->


<section class="portfolio" id="portfolio">

    <h1 class="heading"><span>portfolio</span></h1>
   <div class="box-container">
    <div class="box">
        <img src="images/patika.png" alt="">
        <h3>backend web developer</h3>
        <span>(2024)</span>
    </div>
    <div class="box">
        <img src="images/jandarma.png" alt="">
        <h3>mechatronics engineer</h3>
        <span>(2023-2024)</span>
    </div>
    <div class="box">
        <img src="images/turkcell.png" alt="">
        <h3>machine learning(intern)</h3>
        <span>(2022)</span>
    </div>
    <div class="box">
        <img src="images/ozkar.png" alt="">
        <h3>mechatronics engineer(intern)</h3>
        <span>(2022)</span>
    </div>

   </div>

</section>

<!--portfolio section ends-->


<!--Projects section Starts-->


<section class="projects" id="projects">

    <h1 class="heading"> my <span>projects </span> </h1>
    
    <div class="box-container">
    
      <div class="box">
        <img src="images/veterinary.png" alt="">
        <span>2024</span>
        <h3>veterinary management system</h3>
        <p>This project provides a RESTful API to manage daily operations of a veterinary clinic.</p>
        <h4><a href="https://github.com/halilibrahimsaltas/veterinary-management-system" target="_blank">details</a></h4>
      </div>
    
      <div class="box">
        <img src="images/hotel.png" alt="">
        <span>2024</span>
        <h3>tourism agency</h3>
        <p>The main purpose of this project is to help companies operating in the hotel industry.
            enable the company to manage its daily operations more effectively
            to provide and optimize customer reservation processes.
            Java Spring Boot, Postman, PostgreSQL, Maven technologies
            was used.</p>

        <h4><a href="https://github.com/halilibrahimsaltas/TourismAgency" target="_blank">details</a></h4>
      </div>
    
      <div class="box">
        <img src="images/rent.png" alt="">
        <span>2024</span>
        <h3>rent a car</h3>
        <p>A comprehensive car rental application was developed using Java and Swing technologies.</p>
        <h4><a href="https://github.com/halilibrahimsaltas/RentaCar" target="_blank">details</a></h4>
      </div>
    
      <div class="box">
        <img src="images/table.png" alt="">
        <span>2023</span>
        <h3>examination follow-up chart</h3>
        <p>A program that provides up-to-date data tracking of the procurement, tender, inspection and acceptance stages for Inspection and Acceptance Commissions and control of regulation acceptance principles has been developed with Python.</p>
      </div>
    
    </div>
    
    </section>

<!--Projects section ends-->

<!--contant section starts-->
<section class="contact" id="contact">
<h1 class="heading">  <span>contact </span> me </h1>
    <div class="row">

        <div class="content">

            <h3 class="title">contact info</h3>

            <div class="info">
                <h3 class="lower"><i class="fas fa-envelope"></i>h.ibrahimsaltas@gmail.com</h3>
                <h3><i class="fas fa-phone"></i>+90-531-680-8858</h3>
                <h3><i class="fas fa-map-marker-alt"></i>istanbul,Türkiye -34000</h3>
                <h3><a href="https://www.linkedin.com/in/halilibrahimsaltas/" target="_blank" class="fab fa-linkedin" > </a>  <a href="https://www.linkedin.com/in/halilibrahimsaltas/" target="_blank">linkedin</a> </h3>
                <h3><a href="https://github.com/halilibrahimsaltas" target="_blank" class="fab fa-github" > </a> <a class="minor" href="https://github.com/halilibrahimsaltas" target="_blank">github</a>  </h3>

            </div>

        </div>

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="name" class="box" required>
            <input type="email" name="email" placeholder="email" class="box" required>
            <input type="text" name="topic" placeholder="topic" class="box" required>
            <textarea name="message" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <input type="submit" class="btn" value="send"  name="send" > </input>
        </form>
    </div>
</section>

<!--contant section ends-->


<!--scroll section starts-->

<a href="#home" class="top">
    <img src="images/rocket.png" alt="">
</a>



<!--scroll section ends-->

