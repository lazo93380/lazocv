<!-- Main Content -->
 <div class="container" id="contact">
   <div class="row">
     <div class="col-lg-10 col-md-10 mx-auto">
       <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
       <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
       <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
       <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
       <form name="sentMessage" id="contactForm" novalidate>
         <!--Section: Contact v.2-->
         <section class="mb-4">

           <!--Section heading-->
           <h2 class="h1-responsive font-weight-bold text-center my-4">contact</h2>
           <!--Section description-->
           <p class="text-center w-responsive mx-auto mb-5">
             .</p>

           <div class="row">

             <!--Grid column-->
             <div class="col-md-9 mb-md-0 mb-5">
               <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                 <!--Grid row-->
                 <div class="row">

                   <!--Grid column-->
                   <div class="col-md-6">
                     <div class="md-form mb-0">
                       <input type="text" id="name" name="name" class="form-control">
                       <label for="name" class="">prenom</label>
                     </div>
                   </div>
                   <!--Grid column-->

                   <!--Grid column-->
                   <div class="col-md-6">
                     <div class="md-form mb-0">
                       <input type="text" id="email" name="email" class="form-control">
                       <label for="email" class="">email</label>
                     </div>
                   </div>
                   <!--Grid column-->

                 </div>
                 <!--Grid row-->

                 <!--Grid row-->
                 <div class="row">
                   <div class="col-md-12">
                     <div class="md-form mb-0">
                       <input type="text" id="subject" name="subject" class="form-control">
                       <label for="subject" class="">Sujet</label>
                     </div>
                   </div>
                 </div>
                 <!--Grid row-->

                 <!--Grid row-->
                 <div class="row">

                   <!--Grid column-->
                   <div class="col-md-12">

                     <div class="md-form">
                       <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                       <label for="message">message</label>
                     </div>

                   </div>
                 </div>
                 <!--Grid row-->

               </form>

               <div class="text-center text-md-left">
                 <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
               </div>
               <div class="status"></div>
             </div>
             <!--Grid column-->

             <!--Grid column-->
             <div class="col-md-3 text-center">
               <ul class="list-unstyled mb-0">
                 <li><i class="fas fa-map-marker-alt fa-2x"></i>
                   <p>Pierrefitte-Sur-Seine, Cp 93380, fr</p>
                 </li>

                 <li><i class="fas fa-phone mt-4 fa-2x"></i>
                   <p>06 09 66 11 97</p>
                 </li>

                 <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                   <p>lazeny.konate@gmail.com</p>
                 </li>
               </ul>
             </div>
             <!--Grid column-->

           </div>
           <script>
             function validateForm() {
               var name = document.getElementById('name').value;
               if (name == "") {
                 document.getElementById('status').innerHTML = "Name cannot be empty";
                 return false;
               }

               var email = document.getElementById('email').value;
               if (email == "") {
                 document.getElementById('status').innerHTML = "Email cannot be empty";
                 return false;
               } else {
                 var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                 if (!re.test(email)) {
                   document.getElementById('status').innerHTML = "Email format invalid";
                   return false;
                 }
               }

               var subject = document.getElementById('subject').value;
               if (subject == "") {
                 document.getElementById('status').innerHTML = "Subject cannot be empty";
                 return false;
               }

               var message = document.getElementById('message').value;
               if (message == "") {
                 document.getElementById('status').innerHTML = "Message cannot be empty";
                 return false;
               }

               document.getElementById('status').innerHTML = "Sending...";
               document.getElementById('contact-form').submit();
             }
           </script>
     </div>
   </div>
 </div>

 <hr>
 <!-- Footer -->
 <footer>
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-10 mx-auto">
         <ul class="list-inline text-center">
           <li class="list-inline-item">
             <a href="#">
               <span class="fa-stack fa-lg">
                 <i class="fas fa-circle fa-stack-2x"></i>
                 <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
               </span>
             </a>
           </li>
           <li class="list-inline-item">
             <a href="#">
               <span class="fa-stack fa-lg">
                 <i class="fas fa-circle fa-stack-2x"></i>
                 <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
               </span>
             </a>
           </li>
           <li class="list-inline-item">
             <a href="#">
               <span class="fa-stack fa-lg">
                 <i class="fas fa-circle fa-stack-2x"></i>
                 <i class="fab fa-github fa-stack-1x fa-inverse"></i>
               </span>
             </a>
           </li>
         </ul>
         <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
       </div>
     </div>
   </div>
 </footer>

 <!-- Bootstrap core JavaScript -->
 <script src="public/vendor/jquery/jquery.min.js"></script>
 <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Custom scripts for this template -->
 <script src="public/js/clean-blog.min.js"></script>

 </body>

 </html>