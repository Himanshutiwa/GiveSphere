<?php
include 'layout/header.php';
 // include your DB connection

// Fetch events from database
$events_result = mysqli_query($con, "SELECT * FROM category ORDER BY id DESC");
?>

<!-- Banner Section -->
<div class="banner">
    <div class="play-box">
        <div class="play-inner"></div>
    </div>
    <div class="banner-text">Together, we create opportunities for everyone to thrive.</div>
    <div class="scroll-bar" id="scrollBtn">Scroll Down</div>
</div>

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
                $img_path = 'ad/' . $img;
                // Skip the first image to avoid duplicate
                if ($img_path !== $first_image && file_exists($img_path)) {
                    echo '<img src="'. $img_path .'" width="50" height="50" style="object-fit:cover; margin:3px; border-radius:5px;">';
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

<!-- Call to Action Section -->
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
            <a href="Donate.php" class="btn btn-yellow">Donate Now</a>
            <a href="Join.php" class="btn btn-teal">Join Us Now</a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
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

<?php include 'layout/footer.php'; ?>
