<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Consultation Website</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
      <link rel="stylesheet" href="css/owl.theme.default.min.css" />
      <link rel="stylesheet" href="css/owl.carousel.min.css" />
      <link rel="stylesheet" href="css/styles.css" />
   </head>

   <body>
      <header style="margin: 0">
         <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#">
               <img src="../assets/imgs/logo-8.svg" alt="" class="img-fluid" />
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
                  <i class="fa fa-bars" style="color:#c5d86d; font-size: 2rem;"></i>
               </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link btn btn-secondary" href="book.html">Book</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>


      <?php
         if($message_sent) :
      ?>

         <h1 class="text-center">Thanks, we'll be in touch</h1>

      <?php 
         else:
      ?>         

      <?php include('php/send-email.php') ?>
      <div class="form-wrapper">
         <div class="content">
            <div class="container">
               <div class="row align-items-stretch no-gutters contact-wrap">
                  <div class="col-md-8">
                     <div class="form h-100">
                        <h3>Send me a message</h3>
                        <form class="mb-5" method="post" id="contactForm" action="<?= $_SERVER['PHP_SELF'] ;?>" name="contactForm">
                           <div class="row">
                              <div class="col-md-6 form-group mb-5">
                                 <label for="" class="col-form-label">Name *</label>
                                 <input type="text" class="form-control" name="name" id="name" tabindex="1" value="<?= $name ?>" placeholder="Your name" required />
                                 <span class="error"><?= $name_error;?></span>
                              </div>
                              <div class="col-md-6 form-group mb-5">
                                 <label for="" class="col-form-label">Email *</label>
                                 <input type="text" class="form-control" name="email" id="email" tabindex="2" value="<?= $email ?>" placeholder="Your email" required/>
                                 <span class="error"><?= $email_error;?></span>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-6 form-group mb-5">
                                 <label for="" class="col-form-label">Phone</label>
                                 <input type="text" class="form-control" name="phone" id="phone" tabindex="3" value="<?= $phone ?>" placeholder="Phone #" required/>
                                 <span class="error"><?= $phone_error;?></span>
                              </div>
                              <div class="col-md-6 form-group mb-5">
                                 <label for="" class="col-form-label">Subject</label>
                                 <input type="text" class="form-control" name="subject" id="subject" tabindex="4" value="<?= $subject ?>" placeholder=" Message Subject" required/>
                                 <span class="error"><?= $subject_error;?></span>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-12 form-group mb-5">
                                 <label for="message" class="col-form-label">Message *</label>
                                 <textarea class="form-control" name="message" id="message" tabindex="5" value="<?= $form_message ?>" cols="30" rows="4"  placeholder="Write your message" required></textarea>
                                 <span class="error"><?= $message_error;?></span>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 form-group">
                                 <input type="submit" value="Send Message" tabindex="6" class="btn btn-primary rounded-0 py-2 px-4" />
                                 <span class="submitting"></span>
                              </div>
                           </div>
                           <div class="success"><?= $success ;?></div>
                        </form>
                     </div>
                  </div>
                  <?php 
                  endif;
                  ?>

                  <div class="col-md-4">
                     <div class="contact-info h-100">
                        <h3>Contact Information</h3>
                        <p class="mb-5">
                           Lorem ipsum dolor sit amet, consectetur adipisicing
                           elit. Molestias, magnam!
                        </p>
                        <ul class="list-unstyled">
                           <li class="d-flex">
                              <span class="fa fa-map-marker mr-3"></span>
                              <span class="text">9757 Aspen Lane South Richmond Hill, NY
                                 11419</span>
                           </li>
                           <li class="d-flex">
                              <span class="fa fa-phone mr-3"></span>
                              <span class="text">+1 (291) 939 9321</span>
                           </li>
                           <li class="d-flex">
                              <span class="fa fa-envelope mr-3"></span>
                              <span class="text">info@mywebsite.com</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     

      <!--TESTIMONIALS-->
      <section class="testimony-container">
         <div class="container">
            <div class="row mb-5 pt-5">
               <div class="col-md-12 text-center">
                  <h2 class="testimonial__caption">happy customers</h2>
               </div>
            </div>

            <div class="row">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-25 mx-auto mb-4">
                           <img src="../assets/imgs/person1.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto" />
                        </div>
                        <div>
                           <h2 class="h5 mb-4">Johnson & Johnson</h2>
                           <p>
                              &ldquo;Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Alias accusantium qui optio,
                              possimus necessitatibus voluptate aliquam velit
                              nostrum tempora ipsam!&rdquo;
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-25 mx-auto mb-4">
                           <img src="../assets/imgs/person2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto" />
                        </div>
                        <div>
                           <h2 class="h5 mb-4">Candice Renee</h2>
                           <p>
                              &ldquo;Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Alias accusantium qui optio,
                              possimus necessitatibus voluptate aliquam velit
                              nostrum tempora ipsam!&rdquo;
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-25 mx-auto mb-4">
                           <img src="../assets/imgs/person2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto" />
                        </div>
                        <div>
                           <h2 class="h5 mb-4">Isabella Nova</h2>
                           <p>
                              &ldquo;Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Alias accusantium qui optio,
                              possimus necessitatibus voluptate aliquam velit
                              nostrum tempora ipsam!&rdquo;
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="d-block block-testimony mx-auto text-center">
                        <div class="person w-25 mx-auto mb-4">
                           <img src="../assets/imgs/person1.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto" />
                        </div>
                        <div>
                           <h2 class="h5 mb-4">Julian Gonzales</h2>
                           <p>
                              &ldquo;Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit. Alias accusantium qui optio,
                              possimus necessitatibus voluptate aliquam velit
                              nostrum tempora ipsam!&rdquo;
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <footer>
         <div class="container text-center p-4">
            <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-4">
                  <ul class="nav justify-content-center">
                     <li class="nav-item">
                        <a class="nav-link active" href="index.html">home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">about</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">services</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-4">
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Deserunt voluptate aliquam est saepe debitis animi.
                  </p>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-4">
                  <a class="navbar-brand" href="#">
                     <img src="../assets/imgs/logo-8.svg" alt="" class="img-fluid" />
                  </a>
               </div>
            </div>
            <div class="social-media">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <a href="">
                           <i class="fa fa-facebook p-2"></i>
                        </a>
                        <a href="">
                           <i class="fa fa-instagram p-2"></i>
                        </a>
                        <a href="">
                           <i class="fa fa-twitter p-2"></i>
                        </a>
                        <a href="">
                           <i class="fa fa-snapchat p-2"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-12 text-center text-capitalize">
                  <span>
                     <a href="http://portfolio.learnywebdev.com" style="color: yellowgreen; font-size: 0.8rem">website developed with love by luna</a>
                  </span>
               </div>
            </div>
         </div>
      </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.assets/js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/carousel.js"></script>
   </body>
</html>