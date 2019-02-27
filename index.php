<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Complete Bootstrap 4 Website Layout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.JQery || document.write('<script src="js/jquery-3.3.1.min.js"><\/script>');</script> 
        <script src= "js/main.js"></script> 
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link href="css/main.css" rel="stylesheet" />          
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Connect</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/bg_1.jpg">
        <div class="carousel-caption">
        <form action="" id="form">
                <input name="name" placeholder="Name" data-validation="length" data-validation-length="min2" data-validation-error-msg="Слишком короткое имя"><br>
                <input name="email" placeholder="Email" data-validation="email" data-validation-error-msg="Введите верный Email"><br>
                <input name="subqect" placeholder="Subqect" data-validation="length" data-validation-length="min4" data-validation-error-msg="Слишком короткая тема"><br>
                <textarea name="message" placeholder="Message" data-validation="length" data-validation-length="min20" data-validation-error-msg="Слишком короткое сообщение"></textarea><br>
                <input type="button" value="Отправить сообщение">
            </form>
                <div class="result"></div>

        </div>
    </div>
    <div class="carousel-item">
        <img src="img/bg_2.jpg">
    </div>
    <div class="carousel-item">
        <img src="img/bg_3.jpg">
    </div>
</div>
</div>

<div class="containet-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">A web hosting service allows idividuals and
                organization to make theit website accessible via the World Wide
                Web.
            </p>
        </div>    
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="img/test.jpg" class="item__P" width="400" height="400" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>HTML5</h3>
                <p>Build with the latest version of HTML, HTML 5.</p>           
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>BOOTSTRAP</h3>
                <p>Build with the latest version of Bootstrap, Bootstrap 4.</p>           
         </div>
        <div class= "col-sm-12 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>CSS</h3>
                <p>Build with the latest version of CSS, CSS 3.</p>           
        </div>
        <div class= "col-sm-12 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>CSS</h3>
                <p>Build with the latest version of CSS, CSS 3.</p>           
        </div>
    </div>
    <hr class="my-4">
</div>

<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>HTML5</h3>
                <p>Build with the latest version of HTML, HTML 5.</p>           
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>BOOTSTRAP</h3>
                <p>Build with the latest version of Bootstrap, Bootstrap 4.</p>           
         </div>
        <div class= "col-sm-12 col-md-3">
                <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>CSS</h3>
                <p>Build with the latest version of CSS, CSS 3.</p>           
        </div>
        <div class= "col-sm-12 col-md-3">
        <a href="img/test.jpg" class="item__P" width="300" height="200" alt="dfgdfggh"><img src="img/test.jpg" class="portfolio" width="300" height="200"></a>
                <h3>CSS</h3>
                <p>Build with the latest version of CSS, CSS 3.</p>           
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you build it...</h2>
            <p>The colums will automatically stack on top of each other
                when the screen is less than 576px wide.
            </p>
            <p>
                Reside the browser window to see the affect. Responsive web
                desing has become more impotant as the amount of mobile traffic
                now accounts for more than half of total internet traffic.
            </p>
            <p>
                It can also display the web page differently depending on the 
                screen size or viewing device.
            </p><br>
        </div>
        <div class="col-lg-6">
            <img src="img/desk.png" class="img-fluid">
        </div>
    </div>
</div>
<!---Фиксированый фон-->
<hr class="my-4">
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
    </div>
</figure>


<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Команда</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John is an Internet entrepreneur with
                        almost 20 years of experience.
                    </p>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">Mary Jo</h4>
                    <p class="card-text">Mary is a designer with almost 10 years 
                        of degetal design experience.
                    </p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team3.png">
                <div class="card-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is a developer with over 5 years od web development
                        experience.
                    </p>
                 
                </div>
            </div>
        </div>
    </div>  
</div>
<div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <h2>Our Pholosophy</h2>
                <p>The colums will automatically stack on top of each other
                    when the screen is less than 576px wide.
                </p>
                <p>
                    Reside the browser window to see the affect. Responsive web
                    desing has become more impotant as the amount of mobile traffic
                    now accounts for more than half of total internet traffic.
                </p><br>
            </div>
            <div class="col-lg-6">
                <img src="img/bootstrap2.png" class="img-fluid">
            </div>
        </div>
        <hr class="my-4">
    </div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="img/w3newbie.png">
                <hr class="light">
                <p>555-55555-55555</p>
                <p>email@gmail.com</p>
                <p>100 Street Name</p>
                <p>City, State, 00000</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our hours</h5>
                <hr class="light">
                <p>Monday: 9am - 5pm</p>
                <p>Saturday: 10am - 4pm</p>
                <p>Sanday: closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area</h5>
                <hr class="light">
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                <p>City, State, 00000</p>
                </div>
                <div class="col-12">
                    <hr class="light-100">
                    <h5>&copy; w3newbie.com</h5>
                </div>
        </div>
    </div>
</footer>

               
    
        <script src="js/jquery.form-validator.min.js"></script>
        <script src= "js/main1.js"></script>
        
</body>
</html>
