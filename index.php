<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ddbb6917b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        
        <div class="container">
            <nav>
                <img src="images/cover.png" class="logo">
                <ul id="sidemenu">
                    <li><a href='#header'>Home</a></li>
                    <li><a href='#about'>About</a></li>
                    <li><a href='#services'>Services</a></li>
                    <li><a href='#portpolio'>Portfolio</a></li>
                    <li><a href='#contact'>Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
        <div class="header-text">
            <p>UI/UX Designer</p>
            <h1>Hi, i am <span>Mahin</span> <br>from Bangladesh</h1>
        </div>


        </div>
    </div>
    <!--about-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/pic1.jpg">
                </div>
                <div class="about-col-2">
                <h1 class="subt">About Me</h1>
                <?php include 'about.php'; ?>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Educations</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                        <li><span>Web Development</span><br>web app Development</li>
                        <li><span>App Development</span><br>Building Android/ios apps</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>UI</span><br>Designing Web/App interfaces</li>
                        <li><span>Web Development</span><br>web app Development</li>
                        <li><span>App Development</span><br>Building Android/ios apps</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>KUET</span><br>Computer Science and Enigineering</li>
                        <li><span>Notre Dame College</span><br>Higher Scecondary Certificate</li>
                        <li><span>Raipur Merchants Academy</span><br>Secondary School Certifiate</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services -->
    <div id="services">
        <div class="container">
            <h1 class="subt">My Sevices</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Design</h2>
                    <p>Craft visually stunning and user-friendly websites that captivate your audience and elevate your brand. Our web design services combine creativity, functionality, and responsiveness to deliver seamless digital experiences across all devices.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Create intuitive and visually appealing user interfaces that enhance user satisfaction and engagement. Our UX/UI design services focus on user research, usability testing, and creative design techniques to deliver exceptional digital experiences that align with your brand and resonate with your target audience.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store-ios"></i>
                    <h2>App Design</h2>
                    <p>Design captivating mobile applications that deliver seamless and engaging user experiences. Our app design services combine user-centric design principles, innovative features, and elegant aesthetics to create intuitive and memorable mobile interfaces that drive user adoption and retention.</p>
                    <a href="#">Learn more</a>
                </div>

            </div>
        </div>
    </div>
    <!-- portfolio -->
    <div id="portpolio">
          <div class="container">
            <h1 class="subt">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png">
                    <div class="layer">
                        <h3>Music App</h3>
                        <p>The MelodyMaster music player app project offers an exciting opportunity to develop a feature-rich and user-friendly mobile application for music enthusiasts. By implementing the key features outlined above and leveraging modern technologies and design principles, the app aims to provide users with an enjoyable and immersive music listening experience on their mobile devices.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-2.png">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>ConnectHub is a social media application designed to connect people, share content, and build communities. The app aims to provide users with a platform to interact with friends, discover new content, and engage with various communities based on their interests.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png">
                    <div class="layer">
                        <h3>Online shopping App</h3>
                        <p>ShopSmart is a mobile shopping application designed to provide users with a convenient and personalized shopping experience. The app aims to offer a wide range of products from various retailers, streamline the purchasing process, and enhance user satisfaction through advanced features and functionalities.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See more</a>
          </div>
    </div>
    <!-- contact -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subt">Contact Me </h1>
                    <p><i class="fa-solid fa-envelope"></i>mahin@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>1234455666</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="submit_message.php" method="post">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                        <button type="submit" class="btn btn2" id="admin-button">Admin</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2008 - 2024 FreePrivacyPolicy</p>
        </div>
    </div>
    <script>
        var tablinks=document.getElementsByClassName("tab-links");
        var tabcontents=document.getElementsByClassName("tab-contents");
        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");

        }
    </script>

    <script>
        document.getElementById("admin-button").onclick = function() {
            window.location.href = "login.php";
        };
        
        var sidemenu=document.getElementById("sidemenu");
        function openmenu(){
            sidemenu.style.right="0";
        }
        function closemenu(){
            sidemenu.style.right="-200px";
        }
    </script>
        
    
</body>
</html>