<?php
include 'layout/header.php';

$query = "SELECT * FROM slider ORDER BY id DESC";
$result = mysqli_query($con,$query);

if(!$result){
    die("Query Error: " . mysqli_error($con));
}
?>
<section class="hero-slider">

    <div class="slider-arrows">
        <div class="arrow prev" id="prevBtn">&#10094;</div>
        <div class="arrow next" id="nextBtn">&#10095;</div>
    </div>

    <div class="slides">
       
            <div class="slide active">
                <div class="left">
                    <h1>No one has <br> ever become poor<br> by giving</h1>

                    
                        <p>Giving enriches hearts, spreads kindness, and creates lasting positive change.</p>
                   

                    <div class="btn-group">
                        <a href="Donate.php" class="btn yellow">Donate Now</a>
                        <a href="Join.php" class="btn green">Join Us Now</a>
                    </div>
                </div>

                <div class="right">
                    <img src="image/c1.jpg" alt="Slider Image">
                </div>
            </div>
        
         
        
    </div>
     
      <div class="slides">
       
            <div class="slide active">
                <div class="left">
                    <h1>No one has <br> ever become poor<br> by giving</h1>

                    
                        <p>Giving enriches hearts, spreads kindness, and creates lasting positive change.</p>
                   

                    <div class="btn-group">
                        <a href="Donate.php" class="btn yellow">Donate Now</a>
                        <a href="Join.php" class="btn green">Join Us Now</a>
                    </div>
                </div>

                <div class="right">
                    <img src="image/c2.jpg" alt="Slider Image">
                </div>
            </div>
        
         
        
    </div>
</section>

<!-- Banner Section -->
<div class="banner">
    <div class="play-box">
        <div class="play-inner"></div>
    </div>
    <div class="banner-text">Together, we create opportunities for everyone to thrive.</div>
    <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
</div>

<!-- About Section -->
<section class="about-section">
    <div class="about-image">
        <img src="image/abo.jpg" alt="About.jpg" />
    </div>
    <div class="about-content">
        <div class="sub-title">ABOUT US</div>
        <h1>Join Hands, Change the World</h1>
        <p>Every hand extended in kindness brings us closer to a world free from suffering.
            Every hand extended in kindness brings us closer to a world free from suffering.
            Every hand extended in kindness brings us closer to a world free from suffering.
            Every hand extended in kindness brings us closer to a world free from suffering.
            Every hand extended in kindness brings us closer to a world free from suffering.</p>
        <h3 class="mission-title">Our Mission</h3>
        <ul class="mission-list">
            <li>No one should go to bed hungry.</li>
            <li>We spread kindness and support.</li>
            <li>We can change someone’s life.</li>
            <li>We can change someone’s life.</li>
            <li>We can change someone’s life.</li>
            <li>We can change someone’s life.</li>
            <li>We can change someone’s life.</li>
        </ul>
        <div class="donate-box">
            Through your donations, we spread kindness and support.
            <br>
            <button><a href="Donate.php">Donate Now</a></button>
        </div>
    </div>
</section>


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
<!--Donation Section Start-->

<section class="donation-section">
    <div class="section-header">
        <span class="subtitle">DONATION</span>
        <h2 class="title">Our Donation Causes <br> Around the World</h2>
    </div>

    <div class="causes-container">


        <div class="cause-card">
            <div class="progress-sidebar">
                <div class="amount-top">
                    <span class="label">Raised</span>
                    <span class="value">$8000</span>
                </div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" data-percentage="85">
                        <span class="percent-text counter" data-target="85">0</span>%
                    </div>
                </div>
                <div class="amount-bottom">
                    <span class="label">Goal</span>
                    <span class="value">$10000</span>
                </div>
            </div>
            <div class="card-content">
                <div class="image-wrapper">
                    <img src="image/donation-1.jpg" alt="Healthy Food">
                    <span class="category-badge" style="background-color: #0a5eb2;">Food</span>
                </div>
                <div class="text-content">
                    <h3>Healthy Food</h3>
                    <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                    <a class="donate-btn" href="donate.html">
                        <span>+</span> Donate Now
                    </a>
                </div>
            </div>
        </div>


        <div class="cause-card">
            <div class="progress-sidebar">
                <div class="amount-top">
                    <span class="label">Raised</span>
                    <span class="value">$8000</span>
                </div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" data-percentage="95">
                        <span class="percent-text counter" data-target="95">0</span>%
                    </div>
                </div>
                <div class="amount-bottom">
                    <span class="label">Goal</span>
                    <span class="value">$10000</span>
                </div>
            </div>
            <div class="card-content">
                <div class="image-wrapper">
                    <img src="image/donation-2.jpg" alt="Water Treatment">
                    <span class="category-badge" style="background-color: #055397;">Health</span>
                </div>
                <div class="text-content">
                    <h3>Water Treatment</h3>
                    <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                    <a class="donate-btn" href="donate.html">
                        <span>+</span> Donate Now
                    </a>
                </div>
            </div>
        </div>


        <div class="cause-card">
            <div class="progress-sidebar">
                <div class="amount-top">
                    <span class="label">Raised</span>
                    <span class="value">$8000</span>
                </div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" data-percentage="75">
                        <span class="percent-text counter" data-target="75">0</span>%
                    </div>
                </div>
                <div class="amount-bottom">
                    <span class="label">Goal</span>
                    <span class="value">$10000</span>
                </div>
            </div>
            <div class="card-content">
                <div class="image-wrapper">
                    <img src="image/donation-3.jpg" alt="Education Support">
                    <span class="category-badge" style="background-color: #155abb;">Education</span>
                </div>
                <div class="text-content">
                    <h3>Education Support</h3>
                    <p>Through your donations and volunteer work, we spread kindness and support to children.</p>
                    <a class="donate-btn" href="donate.html">
                        <span>+</span> Donate Now
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Donation Section End-->
<?php

// Fetch events from database
$events_result = mysqli_query($con, "SELECT * FROM category ORDER BY id DESC");
?>



<!-- Event Section Start -->
<div class="container">
    <header class="event-header">
        <p class="event-tag">EVENTS</p>
        <h2 class="h">Be a Part of a Global Movement</h2>
    </header>

    <section class="events-grid">
        <?php while ($event = mysqli_fetch_assoc($events_result)) :
            $images = json_decode($event['cover_image'], true); // decode JSON
            $first_image = !empty($images[0]) ? 'ad/' . $images[0] : 'ad/uploads/default.jpg';
        ?>
            <div class="event-card">
                <!-- MAIN IMAGE -->
                <img src="<?= $first_image ?>" alt="<?= htmlspecialchars($event['event_title']); ?>" style="width:100%; height:250px; object-fit:cover; margin-bottom:10px; border-radius:5px;">

                <div class="card-content">
                    <h2><?= htmlspecialchars($event['event_title']); ?></h2>
                    <p><?= htmlspecialchars($event['description']); ?></p>

                    <div class="event-details">

                        <div class="detail-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span><?= $event['date']; ?></span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?= htmlspecialchars($event['location']); ?></span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-rupee-sign"></i>
                            <span><?= number_format($event['fundraising_goal']); ?></span>
                        </div>
                    </div>

                    <!-- THUMBNAILS -->
                    <?php if (!empty($images)) : ?>
                        <div class="event-thumbnails" style="
    height: 75px;
    width: 75px;
    padding-top: 30px;
">
                            <?php
                            foreach ($images as $img) {
                                $img_path = 'ad/uploads/' . $img;
                                // Skip the first image to avoid duplicate
                                if ($img_path !== $first_image && file_exists($img_path)) {
                                    echo '<img src="' . $img_path . '" width="50" height="50" style="object-fit:cover; margin:3px; border-radius:5px;">';
                                }
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </section>

</div>
<!-- Event Section End -->
<!-- newsletter section start -->

<?php if (!empty($success)) { ?>
    <div class="alert <?= $msg_type ?> alert-dismissible fade show">
        <?= $success ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php }
?>

<div class="donation-wrapper ">

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
            <form id="donationform" method="POST">

                <input type="text" name="name" placeholder="Your Name">


                <input type="email" name="email" placeholder="Your Email">

                <input type="text" name="phone" placeholder="Phone Number">


                <textarea name="message" rows="5" placeholder="Full Address"></textarea>


                <select name="Choose_Donation">
                    <option>-- Choose Donation category --</option>
                    <option>Food Donation</option>
                    <option>Clothes Donation</option>
                    <option>Book / Educational Material Donation</option>
                    <option>Medicine / Health Supplies Donation</option>
                    <option>Volunteering / Service Donation</option>
                    <option>Sponsorship / Scholarship</option>
                    <option>Religious / Zakat Donations</option>
                </select>

                <!-- 🔥 FIXED: DEFAULT AMOUNT -->
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
<!-- Progress Section -->
<section class="impact-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item yellow">
                <i class="fas fa-users"></i>
                <div class="number" data-target="500">0</div>
                <p class="label">Team Members</p>
            </div>
            <div class="stat-item green">
                <i class="fas fa-trophy"></i>
                <div class="number" data-target="70">0</div>
                <p class="label">Award Winning</p>
            </div>
            <div class="stat-item green">
                <i class="fas fa-list-ul"></i>
                <div class="number" data-target="3000">0</div>
                <p class="label">Total Projects</p>
            </div>
            <div class="stat-item yellow">
                <i class="fas fa-comment-dots"></i>
                <div class="number" data-target="7000">0</div>
                <p class="label">Client's Review</p>
            </div>
        </div>
        <div class="content-side">
            <span class="sub-heading">WHY US!</span>
            <h2>Few Reasons Why People Choosing Us!</h2>
            <p>We believe in creating opportunities and empowering communities.</p>
            <div class="buttons">
                <a href="Donate.php" class="btn btn-donate">Donate Now</a>
                <a href="Join.php" class="btn btn-join">Join Us Now</a>
            </div>
        </div>
    </div>
</section>
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


<!-- Footer Include -->
<?php
include 'layout/footer.php';
?>