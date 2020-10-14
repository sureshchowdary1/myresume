<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Form</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    include 'nav.php'
?>

<main>
        <div class="container">
            <div class="details">
                <div class="details__container">
                    <div class="details__content">
                        <div class="details__content__name">
                            <h1>DUDDUPUDI SURESH VENKAT CHOWDARY</h1>
                        </div>
                        <div class="details__content__detail">
                            <h4>S/0 : D. Satya narayana</h4>
                            <h4>Graduation : <i>B.tech</i></h4>

                            <h4>Intrests & Hobbies :</h4>
                            <ul>
                                <li>Creating Web Pages</li>
                                <li> Learning new Concepts</li>
                                <li> Designing Games</li>
                            </ul>

                            <h4>Fields Intrested :</h4>
                            <ul>
                                <li> Web Development</li>
                            </ul>
                            <h5>Vision</h5>
                                <p>To become a successful professional and to learn the new technologies </p>
                        </div>
                    </div>
                </div>
                <div class="details__men">
                    <img src="./img/men1.svg" alt="">
                </div>
            </div>
        </div>

         <div class="container">
        <div class="qualification">
                <div class="qualification__container">
                    <div class="qualification__content">
                        <div class="qualification__content__detail">
                          <h1>Qualification</h1>

                          <p>Highest qualification is <b>Btech</b></p>
                            
                          <h2>Skills</h2>
                          <h6>Progamming Languages</h6>
                          <ul class="pl">
                                <li>HTML</li>
                                <li>CSS, SCSS</li>
                                <li>BOOTSTRAP</li>
                                <li>JAVASCRIPT</li>
                                <li>JQUERY</li>
                                <li>PHP (Basics)</li>
                                <li>MYSQL (Basics)</li>
                          </ul>

                          <h4>Designing</h4>
                          <ul class="ds">
                            <li>Figma</li>
                            <li>Adobe Photoshop XD</li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="qualification__select">
                    <img src="./img/qualification1.svg" alt="">
                </div>
            </div>
        </div>

        <div class="container">
        <div class="project">
                <div class="project__container">
                    <div class="project__content">
                        <div class="project__content__detail">
                          <h1>Projects<h1>

                          <ul>
                              <li> Designed CRUD operation by using Angular, NodeJS as server and Mysql as Database.</li>
                              <li>  Designed some responsive pages using HTML/CSS/JAVASCRIPT.</li>
                              <li>  Designed CRUD operation by using Php and Mysql as Database on LocalHost & online</li>
                          </ul>

                          <h2>Few Projects are mentioned below for reference</h2>
                          <ul class="list">
                                <li><a href = "">SEOS</a></li>
                                <li><a href = "">Purple Crest</a></li>
                                <li><a href = "">Coach</a></li>
                                <li><a href = "">Rosa</a></li>
                                <li><a href = "">LifeLeck</a></li>
                          </ul>

                          <p>Projects mentioned are taken reference from Google and other platforms</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="contact__container">
                <div class="contact">
                    <h1>Contact</h1>
                </div>
                <div class="contact__details">
                    <div class="contact__mail">
                        <p>Gmail : sureshchowdary210@gmail.com</p>

                        <ul>
                            
                            <li><a href="#facebook" class="fa fa-facebook-official"></a></li>
                            <li><a href="#instagram" class="fa fa-instagram"></a></li>
                            <li><a href="#linkedin" class="fa fa-linkedin"></a></li>
                            <li><a href="#email" class="fa fa-envelope"></a></li>
                        </ul>
                    </div>
                    <div class="contact__num">
                        <p>Contact : +91 - 7288975252</p>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer class="footer">
        <div class="footer__container">
        <div class="footer__logo__content">
            <div class="footer__logo">
                <img src="./img/logo.svg" alt="">
            </div>
            <div class="footer__menu__list">
                <ul>
                    <li><a href="#">Qualification</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__reach">
            <h1>Reach</h1>

            <input type="text" class="reach__input" placeholder="Message">
            <button>Submit</button>
        </div>
        <div class="footer__contact">
            <a href="#">
            <div class="footer__home">
                    <div class="fa fa-caret-up"></div>
               </div>
            </a>

        </div>
        </div>

        <h6>Made with love <i class="fa fa-heart" aria-hidden="true"></i>
 </h6>
    </footer> 



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script src="js/main.js"></script> 
</body>
</html>