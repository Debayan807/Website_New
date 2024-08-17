<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/DebayanGhosh_Pic.jpeg">

</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg bg-body-tertiary ml-auto">
<div class="win" id="c">
<img src="https://t3.ftcdn.net/jpg/01/21/65/70/360_F_121657098_YvxONbFlEukCVGNun6vokx4Q6EcqVw0u.jpg" alt="" srcset=""></div>
  <div class="container-fluid">
   <!-- <a class="navbar-brand" href="#"><b style="color:crimson";>Debayan </b> Ghosh</a>    -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" #About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" #Project">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Technology">Technology</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#More" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="history.php">History</a></li>
           
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="education.php">Education</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</section>


<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img12.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img15.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img18.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img31.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5" id="About">
    <div class="py-5">
        <h2 class="text-center">About</h2>
        </div>
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="img/img32.jpg" class="img-fluid aboutimg" >
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-8">Debayan Ghosh</h2>
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta corrupti harum ab eum doloremque nesciunt alias quisquam sapiente! Veniam inventore dolore tempora cumque maxime magnam officiis nisi, possimus cum aliquid, alias debitis fuga iste dolorum rerum consequatur nam odit at soluta quisquam expedita commodi. Explicabo minus sapiente quis nulla molestiae praesentium nisi atque consequuntur omnis.</p>
                <div class="accordion" id="accordionExample my-3 py-3">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item my-3 py-3">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        </div>
        
    
   
</section>
<section class="my-5" id="Project">
    <div class="py-5">
        <h2 class="text-center">Projects</h2>
        </div>
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/img31.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample11">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample11">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/img23.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample12">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample12">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/img15.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample13">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample13">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
        </div>
        </div>
      
   
</section>

<section class="my-5" id="Technology">
    <div class="py-5">
        <h2 class="text-center">Technology</h2>
        </div>
       <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/html.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HTML</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/css-3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CSS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="img/js.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JavaScript</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample1">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 my-3 py-3">
            <div class="card" >
  <img src="img/php.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PHP</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample4">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 my-3 py-3" >
            <div class="card" >
  <img src="img/java.png"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JAVA</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample5">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 my-3 py-3">
            <div class="card" >
  <img src="img/mysql.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MySQL</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
    Link with href
  </a>

</p>
<div class="collapse" id="collapseExample6">
  <div class="card card-body">
 
 
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
 
  </div>
  <a href="http://localhost/newPHP/attendenceApp/login.php" class="btn btn-outline-warning p-2 m-3  text-center" target="_blank" style="width: 75px;" type="button">Login</a>
</div>
  </div>
</div>
            </div>
        </div>
        </div>

</section>

<section class="my-5" id="resume">
<div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">You can download my resume from here</h3> 
        
    </div>
    <div class="w-30 m-auto text-center" >
      <div class="my-2 py-2">
<a  href="img/resume.pdf" download ><button type="button" class="btn btn-outline-warning m-4 p-2">Download</button></a>
<a  href="img/resume.pdf" preview target="_blank" ><button type="button" class="btn btn-outline-warning m-4 p-2">Preview</button></a>
      </div>
     
    </div>
</section>

<section class="my-5" id="contact"> <!-- margin 5 -->
    <div class="py-5"> <!-- padding 5 -->
        <h3 class="text-center">Contact</h3> 
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label >Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Email Id</label>
                <input type="email" name="email" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control mb-3">
            </div>
            <div class="form-group">
                <label >Comment</label>
                <textarea class="form-control mb-3" name="comment"> </textarea>
            </div>
            <div>
 
            <button type="submit" class="btn btn-primary mb-3 " >Submit</button>
        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@debayantechnical</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>