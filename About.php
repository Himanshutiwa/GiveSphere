<?php
include 'layout/header.php'
?>

<!-- Banner Section Start -->
<div class="banner">
    <div class="play-box">
        <div class="play-inner"></div>
    </div>

    <div class="banner-text">
        Together, we can build a world where everyone has the chance to thrive.
    </div>

    <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
</div>
<!-- Banner Section End -->

<!--About Us Section Start -->
<section class="about-section">


    <div class="about-image">
        <img src="image/about.jpg" alt="About.jpg" />
    </div>


    <div class="about-content">
        <div class="sub-title">ABOUT US</div>

        <h1>Join Hands, Change the World</h1>

        <p>
            Every hand extended in kindness brings us closer to a world free from suffering.
            Be part of a global movement dedicated to building a future where equality and compassion thrive.
        </p>

        <h3 class="mission-title">Our Mission</h3>

        <p>
            Our mission is to uplift underprivileged communities by providing resources,
            education, and tools for growth.
        </p>

        <ul class="mission-list">
            <li>No one should go to bed hungry.</li>
            <li>We spread kindness and support.</li>
            <li>We can change someone’s life.</li>
        </ul>

        <div class="donate-box">
            Through your donations, we spread kindness and support to children and families.
            <br>
            <button><a href="donate.html">Donate Now</a></button>
        </div>

    </div>

</section>

<!--About Us Section End-->

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

<!-- Progress Section Start-->
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
            <p>We believe in creating opportunities and empowering communities through education, healthcare, and sustainable development. Your support helps us bring smiles, hope, and a brighter future to those in need.</p>

            <ul class="reasons-list">
                <li><i class="fas fa-check"></i> Justo magna erat amet</li>
                <li><i class="fas fa-check"></i> Aligu diam amet et eos</li>
                <li><i class="fas fa-check"></i> Cita erat ipsum et lorem et sit</li>
            </ul>

            <div class="buttons">
                <a href="#" class="btn btn-donate">Donate Now</a>
                <a href="#" class="btn btn-join">Join Us Now</a>
            </div>
        </div>
    </div>
</section>
<!-- Progress Section End-->

<!-- Our Team Section Start-->
<section class="team-section">
    <header class="section-header">
        <p>OUR TEAM</p>
        <h2>Meet Our Dedicated Team Members</h2>
    </header>

    <div class="team-members-grid">


        <div class="team-member-card">
            <div class="member-content">
                <div class="member-image-container">

                    <img src="image/team-1.jpg" alt="Profile of Boris Johnson, Founder & CEO">
                </div>
                <h3 class="member-name">Boris Johnson</h3>
                <p class="member-title">Founder & CEO</p>
            </div>
            <div class="social-sidebar">
                <a class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                <a class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="social-icon"><i class="fa-brands fa-youtube"></i></a>

            </div>
        </div>

        <div class="team-member-card">
            <div class="member-content">
                <div class="member-image-container">

                    <img src="image/team-2.jpg" alt="Profile of Donald Pakura, Project Manager">
                </div>
                <h3 class="member-name">Donald Pakura</h3>
                <p class="member-title">Project Manager</p>
            </div>
            <div class="social-sidebar">
                <a class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                <a class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="social-icon"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>


        <div class="team-member-card">
            <div class="member-content">
                <div class="member-image-container">

                    <img src="image/team-3.jpg" alt="Profile of Alexander Bell, Volunteer">
                </div>
                <h3 class="member-name">Alexander Bell</h3>
                <p class="member-title">Volunteer</p>
            </div>
            <div class="social-sidebar">
                <a class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                <a class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="social-icon"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

    </div>
</section>
<!-- Our Team Section End -->

<!-- News SEction Start-->


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
include 'layout/footer.php';
?>