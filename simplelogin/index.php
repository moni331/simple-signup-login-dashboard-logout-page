<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand fs-3">Modest.</a>
            <ul class="navbar-nav ms-auto">
				<li><a href="#" class="nav-link">Hello, <?php echo $user_data['first_name']; ?></a></li>
                <li><a href="#" class="nav-link active">HOME</a></li>
                <li><a href="#" class="nav-link">ABOUT</a></li>
                <li><a href="#" class="nav-link">WORK</a></li>
                <li><a href="#" class="nav-link">TEAM</a></li>
                <li><a href="#" class="nav-link">SERVICES</a></li>
                <li><a href="#" class="nav-link">FEATURES</a></li>
                <li><a href="#" class="nav-link">CONTACT</a></li>
				<li><a href="logout.php" class="nav-link">LOGOUT</a></li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="container-fluid m-0 p-0">
            <div class="carousel slide" data-bs-ride="carousel" id="carouselSlider">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/ft_mainbg.jpg" alt="banner" class="w-100">
                        <div class="carousel-caption my-caption">
                            <h1>WELCOME TO OUR MARKETPLACE</h1>
                            <p class="mt-4 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique ndolor non, ornare sagittis dolor. Nulla vestibulu lacus ...</p>
                            <div class="mt-4 carousel-view-button">
                                <a href="#" class="btn btn-outline-info text-white">VIEW MORE</a>
                                <a href="#" class="btn btn-outline-info  text-white">VIDEO TOUR</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/ft_mainbg.jpg" alt="banner" class="w-100">
                        <div class="carousel-caption my-caption">
                            <h1>WELCOME TO OUR MARKETPLACE</h1>
                            <p class="mt-4 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique ndolor non, ornare sagittis dolor. Nulla vestibulu lacus ...</p>
                            <div class="mt-4 carousel-view-button">
                                <a href="#" class="btn btn-outline-primary">VIEW MORE</a>
                                <a href="#" class="btn btn-outline-primary">VIDEO TOUR</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/ft_mainbg.jpg" alt="banner" class="w-100">
                        <div class="carousel-caption my-caption">
                            <h1>WELCOME TO OUR MARKETPLACE</h1>
                            <p class="mt-4 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique ndolor non, ornare sagittis dolor. Nulla vestibulu lacus ...</p>
                            <div class="mt-4 carousel-view-button">
                                <a href="#" class="btn btn-outline-primary">VIEW MORE</a>
                                <a href="#" class="btn btn-outline-primary">VIDEO TOUR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="left-bold-border  ps-2 fs-1">WE ARE MODEST.</h2>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="mt-5 text-muted">
                                <p class="text-justify fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique ndolor non, ornare sagittis dolor. Nulla vestibulu lacus sed molestie gravida. Crferm entum quismagna congue, vel sodales arcu vestibulum. Nunc lobortis dui magna, quis lacusullamcorper at.</p>
                                <p class="text-justify fs-5">asellus sollicitudin ante eros ornare, sit amet luctus lorem semper. Suspendisse posuere, quamdictum consectetur, augue metus pharetra tellus, eu feugiatloreg egetnisi. Cras ornare bibendum ante, ut bibendum odio convallis eget. vel sodales arcu vestibulum</p>
                            </div>
                           <div class="mt-5 text-muted">
                                <div class="Modest-Social-div text-center pt-3 me-3 float-start">
                                    <span class="text-white"><i class="fa-brands fa-facebook-f fa-2x"></i></span>
                                </div>
                                <div class="Modest-Social-div text-center pt-3 me-3 float-start">
                                    <span class="text-white"><i class="fa-brands fa-twitter fa-2x"></i></span>
                                </div>
                                <div class="Modest-Social-div text-center pt-3 me-3 float-start">
                                    <span class="text-white"><i class="fa-brands fa-google-plus-g fa-2x"></i></span>
                                </div>
                                <div class="Modest-Social-div text-center pt-3 me-3 float-start">
                                    <span class="text-white"><i class="fa-brands fa-dribbble fa-2x"></i></span>
                                </div>
                                <div class="Modest-Social-div text-center pt-3 me-3 float-start">
                                    <span class="text-white"><i class="fa-brands fa-behance fa-2x"></i></span>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-5 mt-4">
                            <div class="row  mt-3">
                                <div class="col-md-2">
                                    <div class="number-box text-center">
                                        <h5 class="pt-3 text-white">01</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h5>DEDICATION TO THE CUSTOMERS</h5>
                                    <p class="text-muted">Integer vel lacus non dui ullamcorper venenatis. Aliquam vitae tristique nisi, vitae ullamcorper risus.</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="number-box text-center">
                                        <h5 class="pt-3 text-white">02</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h5>WORKING CLOSELY WITH OUR CLIENTS</h5>
                                    <p class="text-muted">Sed blandit nisi urna, sed pellentesque enim consectetur vitae. Suspendisse ut vehicula nibh</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <div class="number-box text-center">
                                        <h5 class="pt-3 text-white">03</h5>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h5>INCREASE HAPPINESS</h5>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eleifend laoreet euismod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<hr>
<section class="py-5 Team-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="left-bold-border ps-2 fs-2">MEET THE TEAM.</h2>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/gloria.jpg" alt="" class="card-img-top">
                            <div class="card-body bg-body-secondary">
                                <div>
                                    <h6 class="fw-bold">GLORIA BROMLEY</h6>
                                    <p class="text-muted">CEO and Founder</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/paul.jpg" alt="" class="card-img-top">
                            <div class="card-body bg-body-secondary">
                                <div>
                                    <h6 class="fw-bold">PAUL TORRES</h6>
                                    <p class="text-muted">Head of Development</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/judith.jpg" alt="" class="card-img-top">
                            <div class="card-body bg-body-secondary">
                                <div>
                                    <h6 class="fw-bold">JUDITH GILLETTE</h6>
                                    <p class="text-muted">Graphic Desinger</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/delores.jpg" alt="" class="card-img-top">
                            <div class="card-body bg-body-secondary">
                                <div>
                                    <h6 class="fw-bold">DELORES REED</h6>
                                    <p class="text-muted">Client Service Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>

   <section class="py-5 lovely-section">
      <div class="container">
        <h2 class="left-bold-border text-white ps-2 fs-2">LOVELY WORK</h2>
          
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/ft_lovelyimage1.jpg" class="ram">
                            <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                     <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/ft_lovelyimage2.jpg" class="ram">
                            <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/road.jpg" class="ram">
                            <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                </div>
                  
              </div> 

              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/ft_lovelyimage4.jpg" class="ram">
                            <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                     <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/ft_lovelyimage5.jpg" class="ram">
                            <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5">
                        <div class="moni">
                            <img src="assets/img/ft_lovelyimage6.jpg" class="ram">
                             <div class="overlay">PARTNERSHIP GUIDLINES</div>
                        </div>
                    </div>
                </div>
                  
              </div> 

                   <div class="mt-4">
                        <div class="carousel-view-button text-center">
                            <a href="#" class="btn btn-outline-info  text-white">SHOW ME MORE</a>              
                        </div> 
                    </div>
          
      </div> 
   </section>

   <section class="py-5 do-seciton">
       <div class="container">
           <div>
               <h2 class="left-bold-border ps-2 fs-2"> WHAT WE DO</h2>
           </div>
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-gears"></i></span>

                                    <h5 class="p-3">
                                        EASY THEME SETUP
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis,
                                         ut venenatis justo commodo.
                                          Maecenas a justo nec velit
                                           egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-pen"></i></span>

                                    <h5 class="p-3">
                                        PIXEL PERFECT DESIGN
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis,
                                         ut venenatis justo commodo.
                                          Maecenas a justo nec velit
                                           egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-mobile-screen-button"></i></span>

                                    <h5 class="p-3">
                                        RESPONSIVE DISPLAY
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis,
                                         ut venenatis justo commodo.
                                          Maecenas a justo nec velit
                                           egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"> 
                                        <i class="fa-solid fa-clock"></i>
                                   </span>

                                    <h5 class="p-3">
                                        24/7 SUPPORT
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis,
                                         ut venenatis justo commodo.
                                          Maecenas a justo nec velit
                                           egestas fermentum.
                                    </p>
                    
                   </div>
               </div>
           </div>
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-gears"></i></span>

                                    <h5 class="p-3">
                                        EASY THEME SETUP
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis,
                                         ut venenatis justo commodo.
                                          Maecenas a justo nec velit
                                           egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-pen"></i></span>

                                    <h5 class="p-3">
                                        PIXEL PERFECT DESIGN
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis, ut venenatis justo commodo. Maecenas a justo nec velit egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"><i class="fa-solid fa-mobile-screen-button"></i></span>

                                    <h5 class="p-3">
                                        RESPONSIVE DISPLAY
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis, ut venenatis justo commodo. Maecenas a justo nec velit egestas fermentum.
                                    </p>
                    
                   </div>
                   <div class="col-md-3 mt-4 text-center">
                       
                                    
                                    <span class="fw-bold icon-color"> 
                                        <i class="fa-solid fa-clock"></i>
                                   </span>

                                    <h5 class="p-3">
                                        24/7 SUPPORT
                                    </h5>
                                    <p class="text-center text-muted fw-bold">
                                        Nunc mattis lorem in leo lobortis, ut venenatis justo commodo. Maecenas a justo nec velit egestas fermentum.
                                    </p>
                    
                   </div>
               </div>
           </div>

       </div>
   </section>

   <section class="py-5 feature-section">
       <div class="container">
            <div class="row">
                <h2 class="left-bold-border text-white ps-2 fs-2">FEATURES.</h2>
            </div>
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 pt-4">
                   <img src="assets/img/ft_featureimg1.jpg">

                   <h5 class="py-4 text-white">PRODUCT DESIGN:EAMES CHAIRS</h5>
                   <p class="text-white fs-5">Eames designs are certainly iconic. Everyone of us know at least two or three of their famous chairs. I would even risk saying that most of us dream about having a nice Eames.</p>

               </div>
               <div class="col-md-4 pt-4">
                   <img src="assets/img/ft_featureimg2.jpg">

                   <h5 class="py-4 text-white">ELEGANT AND COLORFUL LOGOS</h5>
                   <p class="text-white fs-5">I’ve always found logo design to be one of the most challenging things to get right. There’s so much that a logo can say about a brand without actually saying it.</p>

               </div>
               <div class="col-md-4 pt-4">
                   <img src="assets/img/ft_featureimg3.jpg">

                   <h5 class="py-4 text-white">A SHOWCASE OF CREATIVE</h5>
                   <p class="text-white fs-5 ">It’s always interesting to see another designer’s take on a famous website, app or even physical product. Different designers add their own personality and style.</p>

               </div>
            </div>

           </div>
       </div>
   </section>
   <section class="p-5">
      <div class="container">
        <h4 class="p-3">STAY IN TOUCH</h4>
           <div class="col-md-12">
            
           <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co"></a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:100%;}</style><a href="https://embedgooglemap.2yu.co"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:100%;}</style></div></div>
       </div>
      </div>
      <div class="col-md-12">
          <div class="row">
              <div class="col-md-6">
               <h5>CONTACT INFORMATION</h5>
               <p class="text-muted mt-5 fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi metus, tristique nec dolor non, ornare sagittis dolor. Nulla vestibulum lacus sed molestie gravida.

               Cras fermentum elit quis magna congue, <span style="color: rgb(27, 25, 25); font:  sans-serif;font: size 30px;">vel sodales</span> arcu vestibulum. Nunc lobortis dui magna, quis dapibus lacu</p>

          </div>
          <div class="col-md-6">

            <div class="container">
                <form>
              <div class="row">
         <div class="col-md-6">
           <label for="inputEmail4">Your Name</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Name"> 
        </div>
         <div class="form-group col-md-6">
             <label for="inputEmail4">Your Email</label>
             <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
    </div>
    <div class="">

    <p><label> Write a Message :</label></p>
    
     <textarea id="w3review" name="w3review" rows="4" cols="50">

     </textarea>
    </div>
  
 
  <br>
  
  <button type="submit" class="btn btn-info">Sent Message</button>
</form>
            </div>

          </div>
          </div>
      </div>
   </section>

   <section class="py-5 bottombar">
       <div class="container">
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <p class="text-white">© Copyright 2014 by PSD Booster. All Rights Reserved.</p>
                    <p class="text-white">Free Template by <a href="#" class="">FreeTemplates.pro</a> </p>
                </div>
                <div class="col-md-3 mt-4">
                      
                    <div class="row">
                        <div class="col-md-2">
                            <span class="text-white"><i class="fa-brands fa-facebook-f fa-2x"></i></span>
                        </div>
                        <div class="col-md-2">
                            <span class="text-white"><i class="fa-brands fa-twitter fa-2x"></i></span>
                        </div>
                        <div class="col-md-2">
                            <span class="text-white"><i class="fa-brands fa-google-plus-g fa-2x"></i></span>
                        </div>
                        <div class="col-md-2">
                            <span class="text-white"><i class="fa-brands fa-dribbble fa-2x"></i></span>
                        </div>
                        <div class="col-md-2">
                                <span class="text-white"><i class="fa-brands fa-behance fa-2x"></i></span>
                        </div>
                        
                    </div>

                </div>
            </div>
               
           </div>
       </div>
   </section>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>