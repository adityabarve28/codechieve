<footer class="footer-section">
    <div class="container text-white">
        <div class="row align-items-center">
            <!-- Logo and Codechieve Name (Left Aligned) -->
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <a class="d-flex align-items-center" href="#" style="text-decoration: none;">
                    <img src="/assets/images/logo/logonobg.png" alt="Codechieve Logo" width="40" height="40" class="me-3">
                    <h4 class="footer-title mb-0"><span class="highlight">Codechieve</span></h4>
                </a>
            </div>

            <!-- Footer Text (Right or Below) -->
            <div class="col-12 col-md-6 text-md-end">
                <p>We are here to support you through your digital transformation journey. Reach out to us, and let’s create impactful solutions together.</p>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>&copy; 2025 Codechieve. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- Parallax Script -->
<script>
    window.addEventListener('scroll', function() {
        const heroBg = document.querySelector('.hero_bg');
        let scrollPosition = window.pageYOffset;
        heroBg.style.backgroundPositionY = (scrollPosition * 0.5) + "px";
    });
</script>
<script>
    const contactButton = document.getElementById('contactButton');
    const contactForm = document.getElementById('contactForm');

    contactButton.addEventListener('click', () => {
        contactForm.style.display = contactForm.style.display === 'block' ? 'none' : 'block';
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.getElementById('mainNavbar');
        const heroSection = document.getElementById('hero');
        const heroButtonText = document.getElementById('heroButtonText');
        const heroButtonLink = document.getElementById('heroButtonLink');
        const heroButtonIcon = document.getElementById('heroButtonIcon');
        const landingPath = '/'; // landing page path

        if (window.location.pathname === landingPath) {
            navbar.style.display = 'none';
            heroButtonIcon.style.display = 'none'; // Hide WhatsApp icon
        } else {
            // Modify button
            heroButtonText.innerHTML = '<i class="fab fa-whatsapp"></i> Contact Us';
            heroButtonLink.setAttribute('href', 'https://wa.me/919137818209?text=I%20would%20like%20to%20know%20more'); // or WhatsApp link if you want
            heroButtonLink.setAttribute('target', '_blank');
        }

        window.addEventListener('scroll', function() {
            const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
            if (window.scrollY > heroBottom - 80) {
                navbar.style.display = 'block';
            } else {
                navbar.style.display = 'none';
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentPath = window.location.pathname;
        const heroContent = document.querySelector('.hero_content');

        if (currentPath === '/about') {
            if (heroContent) {
                heroContent.innerHTML = `
                    <section class="about-banner d-flex align-items-center justify-content-center" style="background-image: url('/assets/images/about-banner.jpg'); background-size: cover; background-position: center; height: 300px;">
                        <div class="container text-white text-center py-5">
                           
                            <a class="d-flex align-items-center justify-content-center mt-3" href="/" style="text-decoration: none;">
                                <img src="/assets/images/logo/logonobg.png" alt="Codechieve Logo" width="40" height="40" class="me-2">
                                <h4 class="mb-0" style="color: #00DBDF; font-size: 35px;font-weight: 700;">Codechieve</h4>
                            </a>
                             <h1 style="font-size: 3rem; font-weight: 700;">About</h1>
                             <div style="display: inline-block; background-color: #00DBDF; padding: 8px 20px; border-radius: 5px; margin-top: 10px;">
                                <a href="{{ route("index") }}" style="text-decoration:none;"><span style="color: #ffffff; font-weight: 500;">Home</span></a>
                                <span style="color: #ffffff;"> > </span>
                                <span style="color: #111111; font-weight: 500;">About</span>
                            </div>
                        </div>
                    </section>
                `;
            }
        }
    });
</script>
<script>
    const heroSection = document.querySelector('.hero_bg');
    const currentPath = window.location.pathname;

    if (currentPath === '/' || currentPath === '/index.html') {
        heroSection.style.backgroundImage = "url('/assets/images/banner/trial_banner2.jpg')";
    } else {
        heroSection.style.backgroundImage = "url('/assets/images/banner/home_banner2.jpg')";
    }
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.testimonial-swiper', {
        slidesPerView: 1, /* Show 1 slide at a time */
        spaceBetween: 30, /* Space between slides */
        loop: true, /* Infinite loop */
        pagination: {
            el: '.swiper-pagination',
            clickable: true, /* Enable clicking pagination */
        },
        breakpoints: {
            640: {
                slidesPerView: 1, /* 1 slide per view on smaller screens */
            },
            768: {
                slidesPerView: 2, /* 2 slides per view on medium screens */
            },
            1024: {
                slidesPerView: 3, /* 3 slides per view on larger screens */
            },
        },
    });
</script>



</body>

</html>