
document.addEventListener("DOMContentLoaded", function () {

    /* ===================================
       1. Navbar / Sidebar Logic (All Pages)
       =================================== */
    const sidebar = document.getElementById("sidebar");
    const menuBtn = document.getElementById("hamburger");
    const closeBtn = document.getElementById("sidebarCloseBtn");
    const sidebarLinks = document.querySelectorAll(".sidebar-link");

    function openSidebar() {
        if (sidebar) {
            sidebar.classList.add("open");
            if (menuBtn) menuBtn.classList.add("is-active");
            document.body.style.overflow = 'hidden';
        }
    }

    function closeSidebar() {
        if (sidebar) {
            sidebar.classList.remove("open");
            if (menuBtn) menuBtn.classList.remove("is-active");
            document.body.style.overflow = '';
        }
    }

    if (menuBtn) menuBtn.addEventListener("click", () => {
        sidebar.classList.contains("open") ? closeSidebar() : openSidebar();
    });

    if (closeBtn) closeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        closeSidebar();
    });

    sidebarLinks.forEach(link => link.addEventListener("click", closeSidebar));

    // Close sidebar on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && sidebar?.classList.contains('open')) closeSidebar();
    });


    /* ===================================
       2. LOGIN & REGISTRATION SLIDER LOGIC
       =================================== */

    /* ===================================
       3. Utility Buttons (Scroll Down / Top)
       =================================== */
    const scrollBtn = document.getElementById("scrollBtn");
    const topBtn = document.getElementById("topBtn");

    if (scrollBtn) {
        scrollBtn.onclick = () => {
            window.scrollBy({ top: 300, behavior: "smooth" });
        };
    }
    if (topBtn) {
        topBtn.onclick = () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        };
    }


    /* ===================================
       4. Hero Slider Logic (Only on Home Page)
       =================================== */
    const slides = document.querySelectorAll('.slide');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    if (slides.length > 0 && nextBtn && prevBtn) {
        let current = 0;
        const total = slides.length;

        function showSlide(i) {
            slides.forEach(s => s.classList.remove('active'));
            slides[i].classList.add('active');
        }
        function nextSlide() { current = (current + 1) % total; showSlide(current); }
        function prevSlide() { current = (current - 1 + total) % total; showSlide(current); }

        nextBtn.addEventListener('click', nextSlide); 
        prevBtn.addEventListener('click', prevSlide); 
        // Auto slide
        let slideInterval = setInterval(nextSlide, 6000);
        const hero = document.querySelector('.hero-slider');
        if (hero) {
            hero.addEventListener('mouseenter', () => clearInterval(slideInterval));
            hero.addEventListener('mouseleave', () => slideInterval = setInterval(nextSlide, 6000));
        }
        showSlide(current);
    }


    /* ===================================
       5. Health/Service Cards Fade-In
       =================================== */
    const cardsContainer = document.getElementById('cards');
    if (cardsContainer) {
        const cards = document.querySelectorAll('.card');
        const observer2 = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    cards.forEach((c, i) => {
                        setTimeout(() => c.classList.add('visible'), i * 90);
                    });
                    observer2.disconnect();
                }
            });
        }, { threshold: 0.12 });
        observer2.observe(cardsContainer);
    }


    /* ===================================
       6. Impact/Stats Counter Animation
       =================================== */
    const statItems = document.querySelectorAll('.stat-item');
    if (statItems.length > 0) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const numberElement = entry.target.querySelector('.number');
                    const target = parseInt(numberElement.getAttribute('data-target'));
                    let start = 0;
                    const duration = 2000;
                    let startTime = null;

                    function animate(timestamp) {
                        if (!startTime) startTime = timestamp;
                        const progress = timestamp - startTime;
                        const percentage = Math.min(progress / duration, 1);
                        current = Math.floor(percentage * target);
                        numberElement.textContent = current;
                        if (percentage < 1) requestAnimationFrame(animate);
                        else numberElement.textContent = target;
                    }
                    requestAnimationFrame(animate);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statItems.forEach(item => observer.observe(item));
    }


    /* ===================================
       7. Donation Progress Bar & Counter
       =================================== */
    const donationSection = document.querySelector('.donation-section');
    if (donationSection) {
        let started = false;
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !started) {
                    // Fill Bars
                    const bars = document.querySelectorAll('.progress-bar-fill');
                    bars.forEach(bar => {
                        bar.style.height = bar.getAttribute('data-percentage') + "%";
                    });

                    // Counters
                    const counters = document.querySelectorAll('.percent-text.counter');
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        let startTime = null;
                        function animate(timestamp) {
                            if (!startTime) startTime = timestamp;
                            const progress = timestamp - startTime;
                            const percentage = Math.min(progress / 2000, 1);
                            counter.textContent = Math.floor(percentage * target);
                            if (percentage < 1) requestAnimationFrame(animate);
                            else counter.textContent = target;
                        }
                        requestAnimationFrame(animate);
                    });

                    started = true;
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        observer.observe(donationSection);
    }


});
