 <?php
    include 'layout/header.php';
    ?>
 <!-- Banner Section Start -->
 <div class="banner">
     <div class="play-box">
         <div class="play-inner"></div>
     </div>

     <div class="banner-text">
         Together, we create opportunities for everyone to thrive.
     </div>

     <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
 </div>
 <!-- Banner Section End -->


 <!-- Health Section Start-->
 <div class="wrapper">
     <section class="services" aria-label="our services">


         <aside class="panel" id="panel">
             <h2>What We<br>Do for<br>Those in<br>Need.</h2>
             <p>We work to bring smiles, hope, and a brighter future to those in need.</p>
         </aside>


         <div class="cards" id="cards">
             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-droplet" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Pure Water</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-hospital" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Health Care</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-hands-holding-child" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Social Care</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-bowl-food" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Healthy Food</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-school-flag" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Primary Education</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


             <article class="card">
                 <div class="icon-wrap">
                     <i class="fa-solid fa-house" style="font-size:30px;color:rgb(246, 246, 246)"></i>
                 </div>
                 <h3>Residence Facilities</h3>
                 <p>We’re creating programs that address urgent needs while fostering long-term solutions for sustainable change.</p>
                 <div class="read-more">
                     <span>Read more</span>
                     <div class="line"></div>
                 </div>
             </article>


         </div>


     </section>
 </div>
 <!-- Health Section End-->

 <!-- newsletter section start -->

 <div class="donation-wrapper">
     <div class="donation-container">


         <div class="left-content" id="left-panel">
             <div class="text-content">
                 <h2 class="te">
                     Let's Donate to Needy People for <br>Better Lives
                 </h2>
                 <p class="para">
                     Through your donations, we spread kindness and support to children, families, and communities struggling to find stability.
                 </p>
             </div>
         </div>


         <div class="right-form">
             <form id="donation-form">

                 <input type="text" name="name" placeholder="Your Name" required>


                 <input type="email" name="email" placeholder="Your Email" required>


                 <input type="hidden" name="donation_amount" id="selected-amount" value="10">


                 <div class="donation-amounts">
                     <div class="amount-btn active" data-amount="10">$10</div>
                     <div class="amount-btn" data-amount="20">$20</div>
                     <div class="amount-btn" data-amount="30">$30</div>
                     <div class="amount-btn" data-amount="40">$40</div>
                     <div class="amount-btn" data-amount="50">$50</div>
                 </div>


                 <button type="submit" class="donate-btn">Donate Now</button>
             </form>
         </div>
     </div>
 </div>

 <!-- newsletter section end -->

 <!--Support Section Start-->

 <section class="cta-section">

     <div class="corner-shape top-left1"></div>
     <div class="corner-shape bottom-right"></div>

     <div class="cta-container">
         <h2 class="cta-title">
             Our Door Are Always Open to More <br>
             People Who Want to Support Each <br>
             Others!
         </h2>
         <p class="cta-description">
             Through your donations and volunteer work, we spread kindness and support to children,
             families, and communities struggling to find stability.
         </p>
         <div class="cta-buttons">
             <a href="#" class="btn btn-yellow">Donate Now</a>
             <a href="#" class="btn btn-teal">Join Us Now</a>
         </div>
     </div>
 </section>
 <!--Support Section End-->
 <!-- News Section Start -->
 <section class="newsletter-section1">
     <h2>Subscribe the Newsletter</h2>

     <form class="subscription-form" action="#" method="post">
         <div class="input-group">
             <input type="email" class="email-input" placeholder="Enter Your Email" required>
             <button type="submit" class="submit-button">
                 <span class="send-icon">&#x27A4;</span>
             </button>
         </div>
         <p class="spam-warning">Don't worry, we won't spam you with emails.</p>
     </form>
 </section>

 <!-- News SEction End-->
 <?php
    include 'layout/footer.php'
    ?>