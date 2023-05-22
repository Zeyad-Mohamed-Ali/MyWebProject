<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>zeyad</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="icons/site_icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body >
    <div class="background">
   <section class="Home"  id="Home">
    <nav>
       <h2 id="logo">Online <span>Programming</span></h2>
       <ul id="action">
        <li><a href="#Home"><em class="fa-solid fa-house"></em> Home</a></li>
        <li><a href="#About"><em class="fa-solid fa-user-tie"></em> About Me</a></li>
        <li><a href="#skills"><em class="fa-solid fa-laptop-code"></em> Skills</a></li>
        <li><a href="#services">services</a></li>
        <li><a href="#Contact"><em class="fa-solid fa-comments"></em> Contact me</a></li>

       </ul>
       <button type="button" class="btn" id="form_open" ><em class="fa-solid fa-user-plus"></em></button>
       
       </nav>
       <div class="Home_content">
        <div class="Home_text_continer">
            <h4>Hellow , my name is</h4>
            <h1>zeyad <span>Alansi</span></h1>
            <h3>I'm a <span> Full-stack</span> Devloper</h3>
            <a href="MyCV.txt" class="btn" download="MyCV.txt">Download CV</a>
            <div class="Home_social_photo">
                <a href="https://www.facebook.com/tecnou001" target="_blank"><img src="icons/facebook.png" alt=""></a>
                <a href="https://www.youtube.com/@tecnou" target="_blank"><img src="icons/youtube.png" alt=""></a>
                <a href=""><img src="icons/imo.png" alt=""></a>
                <a href="https://t.me/Zeyad_Alansi" target="_blank"><img src="icons/telegram.png" alt=""></a>
            </div>
            
        </div>
        <div class="Home_photo_continer">
            <img src="img/home_photo.jpg" alt="">
        </div>
       </div>
   </section>
   <?php if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
    echo '
   <section class="lessons_img" id="lessons_section">
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="img/img-7.png" alt="img" draggable="false"></div>
            <h2>C# languge</h2>
           <a style=" text-decoration: none;" href="https://www.youtube.com/watch?v=IRJo_iVi5BI&list=PLhiFu-f80eo-tcwk0nYsehyPErEhw9scm&pp=iAQB" target="_blank"> <span>Click here</span></a>
          </li>
          <li class="card">
            <div class="img"><img src="img/img-8.png" alt="img" draggable="false"></div>
            <h2>C++ languge</h2>
            <a style=" text-decoration: none;" href="https://www.youtube.com/watch?v=aE-RYqxxwgg&list=PLhiFu-f80eo8NC8-hZIPrGrs0GkbG31Bl&pp=iAQB" target="_blank"><span>Click here</span></a>
          </li>
          <li class="card">
            <div class="img"><img src="img/img-10.png" alt="img" draggable="false"></div>
            <h2>Html & Css</h2>
           <a style=" text-decoration: none;" href="https://www.youtube.com/watch?v=qJ5bs_m10CI&list=PLhiFu-f80eo8ITusvbdcvmYkJi7CkOfjW&pp=iAQB" target="_blank"> <span>Click here</span></a>
          </li>
          <li class="card">
            <div class="img"><img src="img/img-6.png" alt="img" draggable="false"></div>
            <h2>Python languge</h2>
            <a style=" text-decoration: none;"  href="https://www.youtube.com/watch?v=fJEC8UeThRw&list=PLhiFu-f80eo_0U-kiWl-Dj4XckzlhI2QK&pp=iAQB" target="_blank"><span>Click here</span></a>
          </li>
          <li class="card">
            <div class="img"><img src="img/img-4.png" alt="img" draggable="false"></div>
            <h2>Java Languge</h2>
            <a style=" text-decoration: none;"  href="https://www.youtube.com/watch?v=eOFLAKFDRRg&list=PLhiFu-f80eo8YdehCst-VFpRDQcIjODNO&pp=iAQB" target="_blank"><span>Click here</span></a>
          </li>
          <li class="card">
            <div class="img"><img src="img/img-5.png" alt="img" draggable="false"></div>
            <h2>php Languge</h2>
            <a style=" text-decoration: none;"   href="https://www.youtube.com/watch?v=NjmOUVXZkx8&list=PLhiFu-f80eo9iOjY07fJzDe9HKSvgRlXc&pp=iAQB" target="_blank"><span>Click here</span></a>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
   </section>';}?>
    <section class="About" id="About">
    <div class="About_content">
        <div class="About_img_continer">
            <img src="img/Code typing.png" alt="">
        </div>
        <div class="About_text_continer">
            <h1>About <span>Me</span></h1>
            
            <h5><span>Full-stack </span> devloper</h5>
            <p> I am a skilled professional who specializes in the development, 
                implementation, and maintenance of computer systems and software. My work involves
                 designing, testing, and deploying various IT solutions that help organizations 
                 streamline their operations, increase efficiency, and enhance productivity.

              My expertise in programming languages,
               database management, network infrastructure, cybersecurity,
                and cloud computing allows me to develop customized solutions
                 that meet the unique needs of my clients. I am also responsible
                  for ensuring that these systems are up-to-date, secure, and functioning properly.  </p>
        </div>
    </div>
   
   </section>
   <section class="services" id="services">
    <h1 class="text_center">Our <span>services</span></h1>
    <div class="Services_content">
        <div class="card_service">
        <i class="fa-solid fa-mobile message"></i>
            <h5>Mobile Dev</h5>
            <p>Mobile applications can be native, 
                web-based, or hybrid. Native applications
                 are built specifically for a particular 
                 mobile platform using the platform's
                  native programming languages and tools.
            </p>
        </div>
        <div class="card_service">
            <i class="fa-solid fa-laptop-code message"></i>
            <h5>Descktop Dev</h5>
            <p>Desktop development requires 
                a deep understanding of the platform's 
                operating system and hardware, 
                as well as knowledge of various 
                APIs and frameworks.
            </p>
        </div>
        <div class="card_service">
            <i class="fa-solid fa-file-code message"></i>
            <h5>Web Dev</h5>
            <p>Every web site should be 
                built with two primery
                goals,firstly it needs 
                to work with all devises
                secondly,it needs to be 
                fast as possible
            </p>
        </div>
        <div class="card_service">
            <i class="fa-solid fa-network-wired message"></i>
            <h5>Architect Dev</h5>
            <p>Architects use various tools and
                 techniques to design and implement 
                 the software architecture, such as 
                 Unified Modeling Language (UML),
                  domain-driven design, 
                  and service-oriented architecture.
            </p>
        </div>
    </div>

   </section>
   <div class="form_continer">
    <i class="fa-solid fa-xmark form_close message"></i>
    <!--login_form-->
    <div class="login_form">
        <h2>Login</h2>
        <form action="login.php" method="post" >
            <div class="input_box">
                <input type="email" name="email" id="" placeholder="Enter your email">
            </div>
            <div class="input_box">
                <input type="password" name="password" id="" placeholder="Enter your password">
            </div>
            <button class="button btn">Login now</button>
            <div class="ask">Don't have an account ? <a href="#" id="signUp">signUp</a></div>
        </form>
    </div>
    <!--signUp_form-->
    <div class="signUp_form">
        <h2>signUp</h2>
        <form action="signUp.php" method="post" id="form" >
            <div class="input_box">
                <input type="text" name="name" id="name" placeholder="Enter your name" oninput="check_name()">
                <i  id="name_result"></i>
            </div>
            <div class="input_box">
                <input type="email" name="email" id="email" placeholder="Enter your email" oninput="check_email()">
                <i  id="email_result"></i>
            </div>

            <div class="input_box">
                <input type="password" name="password" id="password" placeholder="Create  your password" oninput="check_password()">
                <i  id="password_result"></i>
            </div>
            <div class="input_box">
                <input type="number" name="phone" id="phone" placeholder="Enter your phone number" oninput="check_phone_number()">
                <i  id="result_phone"></i>
            </div>

            <button type="button" class="button btn" onclick="submitinfo()">signUp now</button>
            <i id="submitErorr"></i>
            <div class="ask">Already have an account ? <a href="#" id="login">Login</a></div>
        </form>
    </div>
   
   </div>
   <section class="skills" id="skills">
    <div class="skills_content">
        <div class="skills_continer">
            <h1><span>My  </span>Skills</h1>
            <div class="skills_imgs_continer">
                <a href=""><img src="icons/Html.png" alt=""></a>
                <a href=""><img src="icons/Css.png" alt=""></a>
                <a href=""><img src="icons/java.png" alt=""></a>
                <a href=""><img src="icons/VS_code.png" alt=""></a>
                <a href=""><img src="icons/visual_studio.png" alt=""></a>
                <a href=""><img src="icons/c.png" alt=""></a>
                <a href=""><img src="icons/c++.png" alt=""></a>
                <a href=""><img src="icons/matlab.png" alt=""></a>
                <a href=""><img src="icons/netbeans.png" alt=""></a>
                <a href=""><img src="icons/github.png" alt=""></a>
                <a href=""><img src="icons/Visio.png" alt=""></a>
                <a href=""><img src="icons/oracle.png" alt=""></a>
                <a href=""><img src="icons/mysql.png" alt=""></a>
                <a href=""><img src="icons/android.png" alt=""></a>
                <a href=""><img src="icons/draw.png" alt=""></a>

            </div>
        </div>
        <div class="skills_img_continer">
            <img src="img/Pair programming-amico.png" alt="">
        </div>

    </div>
    
   </section>
   <footer class="footing" id="Contact">
    <h2>Zeyad <span>Alansi</span></h2>
    <p>For more inquiries, contact us via the following link or phone number.</p>
    <a href="ae154978@gmail.com" class="footer_link">ae154978@gmail.com</a>
    <p>+976 779-834-227</p>
    <div class="footing_social">
        <i class="fa-brands fa-instagram " ></i>
        <i class="fa-brands fa-facebook "></i>
        <i class="fa-brands fa-twitter "></i>
        <i class="fa-brands fa-youtube "></i>
    </div>
    
   </footer>
   <script src="js/javascript.js"></script>
</div>
</body>
</html>