<?php 
$polyclinics = ['Ang Mo Kio', 'Hougang', 'Geylang', 'Toa Payoh', 'Woodlands', 'Yishun'];
$services = ['Dental Services', 'Diagnostics Services', 'General Medical Services', 'Pharmacy Services', 'Other Services'];
$contactOptions = ['For Attachment Opportunities', 'Enquiry/Feedback', 'For Corporate / Overseas Visitors', 'FAQs', 'Update Your Particulars'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Health Care Group Polyclinics</title>
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://kit.fontawesome.com/8c119e2bdf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <nav id="sideBar" class="active">
            <div id="dismiss">
                <i onclick="toggleSideBar()" class="fas fa-arrow-left fa-lg"></i>
            </div>
            <div class="sidebar-header">
                
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a> </li>
                <li><a href="#">Our Clinics</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Be a Volunteer</a></li>
                <li><a href="#">Know Your Medication</a> </li>
                <li><a href="#">Our Care Team</a></li>
                <li><a href="#">Newsroom</a></li>
                <li><a href="#">PCA</a></li>
                <li>
                    <form action="">
                        <input type="text" placeholder="SEARCH THE SITE">
                        <button href='#'><i class="fas fa-search"></i></button>
                    </form>
                </li>
                <li><a href="#">Medisave Matters</a></li>
                <li><a href="#">RFQ/RFP</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Join Us</a></li>
            </ul>
        </nav>

        <div class="content">
            <button id="toggleSideBar" onclick="toggleSideBar()" class="btn btn-info ">Menu</button>
            <div class="mainNavSection">
                <a href="#"><img id="mainLogo1" src="./images/logo.png"></a>
                <nav class="mainNav">
                    <a href="#"><img id="mainLogo2" src="./images/logo.png"></a>
                    <div class="navLinks">
                        <a class="navLink" href="#">About Us</a> 
                        <a class="navLink" href="#">Our Clinics</a>
                        <a class="navLink" href="#">Our Services</a>
                        <div class='dropdown navLink'>
                            <a class="navLink" href="#">Contact Us</a>
                            <div class="dropdown-menu">
                                <?php 
                                foreach($contactOptions as $option){
                                    echo "<a href='#' class='dropdown-item'>$option</a>";
                                }
                            ?>
                            </div>
                        </div>
                  
                        <a class="navLink" href="#">Be a Volunteer</a>
                        <a class="navLink" href="#">Know Your Medication</a>
                        <a class="navLink" href="#">Our Care Team</a>
                        <a class="navLink" href="#">Newsroom</a>
                        <a class="navLink" href="#">PCA</a>
                    </div>
                    
                    
                </nav>
            </div>

            <div class="heroSection">
                <div class="heroLinks">
                    <h4>Visit Us</h4>
                    <button id="oas" class="btn btn-primary appointment">Online Appointment System</button>
                    <button id="chas" class="btn btn-primary appointment">List of CHAS Clinics</button>
                    <div class='dropdown'>
                        <button id="findClinic" type='button' class="btn btn-primary appointment dropdown-toggle" data-toggle="dropdown">Find a polyclinic near you</button>
                        <div class="dropdown-menu">
                            <?php 
                                foreach($polyclinics as $clinic){
                                    echo "<a href='#' class='dropdown-item'>$clinic</a>";
                                }
                            ?>
                        </div>
                    </div>
                    <div class='dropdown'>
                        <button id="services" type='button' class="btn btn-primary appointment dropdown-toggle" data-toggle="dropdown">Our Services</button>
                        <div class="dropdown-menu">
                        <?php 
                                foreach($services as $service){
                                    echo "<a href='#' class='dropdown-item'>$service</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="slideShowSection">
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/slide1.JPG" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slide2.JPG" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slide3.JPG" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/slide4.JPG" alt="Third slide">
                            </div>   
                        </div>
                </div>
            </div>
        </div>

        <div class="subContent">
            <div class="generalInfo">
                <div id="announcement" class="generalBox">
                    <h4>Announcements</h4>
                    <div class="generalContent">
                        <ul>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                            <li><a href="#"><i class="far fa-plus-square"></i> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero tempora harum accusamus, sequi unde tenet!</a></li>
                        </ul>
                    </div>
                   
                </div>
                <div id="events" class="generalBox">
                    <h4>Upcoming Events</h4>
                    <div class="generalContent">
                    <ol>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate velit doloribus aliquam.</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate velit doloribus aliquam.</li>
                    </ol>
                    <p>Click <a href="#">here</a> to find out more</p>
                    </div>
                    
                </div>
                <div id="eCards" class="generalBox">
                    <h4>Send E-Cards</h4>
                    <div class="generalContent">
                        <a href="#"><img src="images/heart.png" alt=""></a>
                        <div>
                            <p>Send an e-card to the staff member who made your visit pleasant.</p>
                            <p>Click <a href="#">here</a> to find out more</p>
                        </div>
                       
                    </div>
                    
                </div>
                <div id="links" class="generalBox">
                    <h4>Quick Links</h4>
                    <div class="generalContent">
                        <div>
                            <i class="fas fa-align-justify"></i><a href="#"> Losartas Recall Advisory</a><br>
                            <i class="far fa-question-circle"></i><a href="#"> Information for GPs</a>
                        </div>
                        <div class="links">
                            <div class="linkContent">
                                <img src="images/report.JPG" alt="">
                                <a href="#">Annual Report FY2018</a>
                            </div>
                            <div class="linkContent">
                                <img src="images/magazine.JPG" alt="">
                                <a href="#">Latest Issue</a><br>
                                <a href="#">Click Here for Past Issues</a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="health" class="generalBox">
                    <h4>Know Your Health</h4>
                    <div class="generalContent">
                        <div class="box">
                            <a href="#"><img src="images/quiz.png" alt="">
                                <p>Health <br> Quizzes</p></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="images/weight.png" alt="">
                                <p>BMI <br> Calculator</p></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="images/smoke.png" alt="">
                                <p>Quit Smoking <br> Calculator</p></a>
                        </div>
                    </div>
                </div>
                <div id="video" class="generalBox">
                    <h4>Video</h4>
                    <iframe width="90%" height="80%"  src="https://www.youtube.com/embed/MzdIcV0PJDc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="partnersContent">
            <div id="health" class="generalBox">
                <h4>Our Affiliated Partners:</h4>
                <div class="partnerLogos">
                    <a class="large" href="#"><img src="images/pca.jpg"></a>
                    <a href="#"><img src="images/fma.png"></a>
                    <a class="large" href="#"><img src="images/healthhub.png"></a>
                    <a href="#"><img src="images/chas.png"></a>
                    <a href="#"> <img src="images/tuv.png" alt=""></a>
                    <a class="large" href="#"><img src="images/group.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <footer>
            <div class="footerText">
                <p>2010-2017 National Healthcare Group Polyclinics. All Rights Reserved.</p>
                <div class="links">
                    <a href="#">Personal Data Protection Notification</a>
                    <a href="#">Disclaimer</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </footer>
        </div>
    
    </div>
</body>
<script src="jquery.js"></script>
<script src="bootstrap.bundle.js"></script>
<script src="myScript.js"></script>
</html>
