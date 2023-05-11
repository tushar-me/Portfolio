
<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tushar Imran - Web Developer</title>
    <link rel="shortcut icon" href="/assets/imgs/fav.png" type="image/x-icon">
    <!--------- CSS Links--------->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!---------- Fonts ----------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700;800&display=swap" rel="stylesheet">
    <!--------- wow js cn-------->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>
<body>
    <section id="home">

    <div id="preloader">
        <div id="loader"></div>
    </div>
        <div class="header-content">
            <!----- Nav links  ------>
            <div class="left-content">
                <a href="index.html"><h1>T</h1></a>
                <ul id="nav-links">
                    <li>
                        <a href="#home" class="home active">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        <span class="h-home">Home</span>
                    </li>
                    <li>
                        <a href="#about" class="about ">
                            <i class="fa-solid fa-user"></i>
                        </a>
                        <span class="h-about">About</span>
                    </li>
                    <li>
                        <a href="#resume" class="resume ">
                            <i class="fa-solid fa-gear"></i>
                        </a>
                        <span class="h-resume">Resume</span>
                    </li>
                    <li>
                        <a href="#portfolio" class="port ">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <span class="h-port">Portfolio</span>
                    </li>
                    <li>
                        <a href="#contact" class="contact ">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                        <span class="h-contact">Contact</span>
                    </li>
                </ul>
                <!--------- Social links---->
                <div class="s-links">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/tusharimran.fb" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/TusharImran-Dev" target="_blank">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/tushar.imran.me/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="right-content">
                <h3> Loading background . . . </h3>
                <!----- Using php configuration file number----->
                <a class="chat" href="https://wa.me/<?php echo $config['phone'] ?>" target="_blank">
                    <i class="fa-brands fa-rocketchat"></i>Message Me
                </a>
                <a href="/assets/imgs/resume.pdf" download class="fxd-d-btn">
                    <i class="fa-solid fa-download"></i>Download CV
                </a>
                <a href="#home" class="scroll-top">
                    <i class="fa-solid fa-circle-up"></i>Scroll Top
                </a>
                <video autoplay muted loop id="video">
                    <source src="/assets/imgs/background.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <div class="text">
                    <h1>Tushar Imran</h1>
                    <p>
                        <span class="text_1">I am a <span class="color-text">Web Developer</span></span>
                        <span class="text_2">I am a <span class="color-text">Web Designer</span></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="about-content">
                <div class="text wow animate__animated animate__fadeInUp">
                    <h1>ABOUT ME</h1>
                    <p><span>Hello, I’m  Tushar</span> , from <span>Bangladesh</span>. I have rich experience in web site design & building and customization.  Also I am good at <span>html, css,js, wordpress, php, laravel, mysql.</span> </p>
                    <div class="btns">
                        <a class="cv-btn" href="/assets/imgs/resume.pdf" download><i class="fa-solid fa-download"></i>Download CV</a>
                        <span class="links">
                            <a href="https://github.com/TusharImran-Dev" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.facebook.com/tusharimran.fb" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/tushar.imran.me/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </span>
                    </div>
                </div>
                <div class="service-cards ">
                    <h2><span>My</span> Services</h2>
                    <div class="row  mt-5 d-flex justify-content-evenly">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md service-card">
                                    <div class="icon">
                                        <i class="fa-solid fa-code"></i>
                                    </div>
                                    <h3>Web Development</h3>
                                    <p>Modern and mobile-ready website that will help of your marketing.</p>
                                </div>
                                <div class="col-md service-card ">
                                    <div class="icon">
                                        <i class="fa-solid fa-laptop-code"></i>
                                    </div>
                                    <h3>Web Application</h3>
                                    <p>Developing memorable and unique big screen, mobile web application.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md-6 service-card">
                                    <div class="icon">
                                        <i class="fa-solid fa-database"></i>
                                    </div>
                                    <h3>Database Design</h3>
                                    <p>Database design, deployment, and management for your website.</p>
                                </div>
                                <div class="col-md"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-table wow animate__animated animate__fadeInUp">
                    <h2><span>Pricing</span> Tables</h2>
                    <div class="row mt-5 d-flex  justify-content-evenly">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class=" col-md pricing-card">
                                    <h4>Hourly payment</h4>
                                    <h3><i class="fa-solid fa-dollar-sign"></i>29<span>/h</span></h3>
                                    <p>Web Development</p>
                                    <p>Web Application</p>
                                    <p>Database Design & Deployment</p>
                                    <p>Wordpress Development</p>
                                    <div class="order-btn">
                                        <a href="#contact">Order Now<i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class=" col-md pricing-card">
                                    <h4>Full Time</h4>
                                    <h3><i class="fa-solid fa-dollar-sign"></i>999<span>/m</span></h3>
                                    <p>Web Development</p>
                                    <p>Web Application</p>
                                    <p>Database Design & Deployment</p>
                                    <p>Wordpress Development</p>
                                    <div class="order-btn">
                                        <a href="#contact">Order Now<i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="resume">
        <div class="container">
            <div class="resume-content wow animate__animated animate__fadeInUp">
                <h1>RESUME</h1>
                <div class="row justify-content-evenly">
                    <div class="col-xl-6">
                        <div class="row mt-5">
                            <div class="col-md">
                                <h2><span>My</span> Experience</h2>
                                <div class="resume-card">
                                    <div class="top">
                                        <h3>Web Development</h3>
                                        <p>Collaborate with creative and development teams on the execution of ideas.</p>
                                    </div>
                                    <div class="middle">
                                        <h3>Front-end Developer</h3>
                                        <p>Monitored technical aspects of the front-end delivery for several projects.</p>
                                    </div>
                                    <div class="bottom">
                                        <h3>Senior Developer</h3>
                                        <p>Optimize website performance using latest technology.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <h2><span>My</span> Education</h2>
                                <div class="resume-card">
                                    <div class="top">
                                        <h3>Programming Course</h3>
                                        <p>Web Development with PHP & Laravel Batch 1.</p>
                                        <span><a href="https://ostad.app/course/laravel" target="_blank">Ostad</a> Dhaka, Bangladesh</span>
                                    </div>
                                    <div class="middle">
                                        <h3>Web Design Course</h3>
                                        <p>Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills-content">
                <div class="row justify-content-evenly">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md">
                                <h3><span>Personal</span> Skills</h3>
                                <div class="skill-card">
                                    <div class="skill-values">
                                        <p>Communication</p>
                                        <div class="percent">
                                            <div class="comm-value"></div>
                                        </div>
                                    </div>
                                    <div class="skill-values">
                                        <p>Team Work</p>
                                        <div class="percent">
                                            <div class="team-value"></div>
                                        </div>
                                    </div>
                                    <div class="skill-values">
                                        <p>Language</p>
                                        <div class="percent">
                                            <div class="lang-value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <h3><span>Professional</span> Skills</h3>
                                <div class="skill-card">
                                    <div class="skill-values">
                                        <p>PHP/LARAVEL/MYSQL</p>
                                        <div class="percent">
                                            <div class="plm-value"></div>
                                        </div>
                                    </div>
                                    <div class="skill-values">
                                        <p>Wordpress</p>
                                        <div class="percent">
                                            <div class="wp-value"></div>
                                        </div>
                                    </div>
                                    <div class="skill-values">
                                        <p>HTML/CSS/JS</p>
                                        <div class="percent">
                                            <div class="hcj-value"></div>
                                        </div>
                                    </div>
                                    <div class="skill-values">
                                        <p>Bootstrap/Tailwind</p>
                                        <div class="percent">
                                            <div class="bt-value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="container">
            <div class="portfolio-content">
                <h1>PORTFOLIO</h1>
                <h3><span>My</span> Portfolio</h3>
                <div class="row justify-content-evenly">
                    <div class="col-lg-6">
                        <div class="portfolio-card wow animate__animated animate__fadeInLeft">
                            <div class="btns">
                                <a href="https://github.com/TusharImran-Dev/Fancy" target="_blank">Source Code</a>
                                <a href="https://lively-concha-a516d2.netlify.app/" target="_blank">Live Preview</a>
                            </div>
                            <div class="sm-sc-btns">
                                <a href="https://github.com/TusharImran-Dev/Fancy" target="_blank"><button class="left-btn">Source Code</button></a>
                                <a href="https://lively-concha-a516d2.netlify.app/" target="_blank"><button class="right-btn">Live Preview</button></a>
                            </div>
                            <div class="card-img">
                                <img src="assets/imgs/port-img-1.png" alt="">
                            </div>  
                            <div class="card-text">
                                <p>Frontend Design</p>
                                <span>HTML, CSS, JS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                <!---- <div class="portfolio-card wow animate__animated animate__fadeInDown">
                            <div class="btns">
                                <a href="">Source Code</a>
                                <a href="">Live Preview</a>
                            </div>
                            <div class="card-img">
                                <img src="assets/imgs/port-img-1.png" alt="">
                            </div>  
                            <div class="card-text">
                                <p>Frontend Design</p>
                                <span>HTML, CSS, JS</span>
                            </div>
                        </div>
                        <div class="portfolio-card wow animate__animated animate__fadeInUp">
                            <div class="btns">
                                <a href="">Source Code</a>
                                <a href="">Live Preview</a>
                            </div>
                            <div class="card-img">
                                <img src="assets/imgs/port-img-1.png" alt="">
                            </div>  
                            <div class="card-text">
                                <p>Frontend Design</p>
                                <span>HTML, CSS, JS</span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="contact-content">
                <h1>CONTACT ME</h1>
                <div class="get-in-touch">
                    <h2><span>Get</span> In Touch</h2>
                    <div class="row">
                        <div class="col-xl-4 add">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Pabna Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="col-xl-4 add">
                            <span><i class="fa-regular fa-at"></i></span>
                            <div class="text">
                                <h3>Email</h3>
                                <p>tusharimran.dev@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 add">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>+880 1648 550599</p>
                            </div>
                        </div>
                        <div class="col-xl-4 add">
                            <span><i class="fa-solid fa-check-to-slot"></i></span>
                            <div class="text">
                                <h3>Freelance</h3>
                                <p>Available</p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="contact-form">
                    <h2><span>Contact</span> Form</h2>
                    <form class="col-xl-8" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <input type="text" name="name" id="" required placeholder="Full Name">
                        <input type="email" name="email" id="" required placeholder="Email Address">
                        <p>
                            <textarea name="message" id="" required placeholder="Your Message"></textarea>
                        </p>
                        <button name="submit"> Send Message<i class="fa-solid fa-arrow-right"></i></button>
                    </form>

                    <?php 
                        if ( isset( $_POST['submit'] ) ) {


                            $to = $config['email'];
                            $subject = 'Contact US Mail From ' . $config['name'];
                            $email = isset( $_POST['email'] ) ? strip_tags( $_POST['email'] ) : '';
                            $name = isset( $_POST['name'] ) ? strip_tags( $_POST['name'] ) : '';
                            $message = isset( $_POST['message'] ) ? strip_tags( $_POST['message'] ) : '';
                        
                        
                            $msg = '
                            <html>
                            <body>
                                <table rules="all" style="border-color: #666;" cellpadding="10">
                                    <tr style="background: #eee;">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                    </tr>
                                    <tr border="1">
                                        <td>
                                            ' . $name . '
                                        </td>
                                        <td>
                                            ' . $email . '
                                        </td>
                                        <td>
                                            ' . $message . '
                                        </td>
                                    </tr>
                                </table>
                            </body>
                            </html>
                            ';
                        
                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            

                            // Sending email
                            if ( mail( $to, $subject, $msg, $headers ) ) {
                                    echo $success ='<div class="sending-email" id="email">
                                    <div class="success">
                                        <img src="/assets/imgs/success.png" alt="">
                                        <p>Your mail has been sent successfully.</p>
                                        <button id="none-btn" onclick="noneFunction()">Done</button>
                                    </div>
                                </div>';
                                } else{
                                    echo $error = "<div class='sending-email' id='email'>
                                    <div class='error'>
                                        <img src='/assets/imgs/error.png' alt=''>
                                        <p>Unable to send email. Please try again.</p>
                                        <button id= 'none-btn' onclick='noneFunction()'>ok</button>
                                    </div>
                                </div>";
                                }?>

                </div>
                    <?php      
                        }
                    ?>
            </div>
        </div>
    </section>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!----------- Icon ----------->
    <script src="https://kit.fontawesome.com/2d20be5f79.js" crossorigin="anonymous"></script>
    <script>
        new WOW().init();
    </script>
    <!----------- Jquery cdn ----------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
</html>