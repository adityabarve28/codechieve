@extends("includes.welcome")
@section("content")
<section class="pain-points-section text-white py-5" id="painpoints">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="section-title text-white"><span class="highlight">Why</span> Traditional Businesses Are Failing Fast</h2>
                <p class="lead mb-4">Discover the real challenges businesses face when staying offline.</p>

                <div class="accordion" id="painPointsAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fas fa-arrow-trend-down pain-icon rotate-down"></i> Revenue Shrinks Every Quarter
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#painPointsAccordion">
                            <div class="accordion-body">
                                Offline businesses face declining footfall year after year. As consumer spending shifts online, your revenue quietly shrinks while you struggle to figure out why sales aren't growing like they used to.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-bolt pain-icon"></i> Missed Opportunities Strike Daily
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#painPointsAccordion">
                            <div class="accordion-body">
                                Every customer that Googles a service and doesn't find you chooses someone else. Lost leads, missed partnerships, and silent brand erosion happen behind the scenes — until it’s too late.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-robot pain-icon"></i> Competitors Automate, You Fall Behind
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#painPointsAccordion">
                            <div class="accordion-body">
                                While modern businesses use automation to work faster and cheaper, traditional businesses drown in manual work, errors, and delays — losing not just money, but also client trust and patience.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-user-slash pain-icon"></i> Customers Forget You Exist
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#painPointsAccordion">
                            <div class="accordion-body">
                                Out of sight, out of mind. If you're not constantly visible on platforms where customers spend time — Instagram, Google, Facebook — your brand fades away, leaving loyal customers to forget and move on.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-store-slash pain-icon"></i> One Crisis Can Shut You Down Forever
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#painPointsAccordion">
                            <div class="accordion-body">
                                Physical-only businesses collapse quickly during economic downturns, pandemics, or disasters. Without an online channel, recovery is almost impossible — and rebuilding costs are devastating.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-6">
                <img src="/assets/images/images/pain2.jpg" alt="Pain Points" class="img-fluid rounded neon-border image" style="height: 90vh !important;">
            </div>
        </div>
    </div>
</section>

<!-- WHAT IF YOU HAVE GONE ONLINE -->
<section class="digital-transformation-section text-white py-5" id="digitalTransformation">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="section-title text-white">The Power of<span class="highlight"> Going Digital</span></h2>
                <p class="lead mb-4">When businesses transition from traditional offline models to an online presence, they unlock a world of new opportunities.</p>

                <div class="accordion" id="digitalTransformationAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="fas fa-globe-americas pain-icon"></i> Expand Reach
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#digitalTransformationAccordion">
                            <div class="accordion-body">
                                Access global markets, attract more customers, and break geographical barriers.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-cogs pain-icon"></i> Increase Efficiency
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#digitalTransformationAccordion">
                            <div class="accordion-body">
                                Automate tasks and processes, reducing errors and manual work.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-headset pain-icon"></i> Enhance Customer Experience
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#digitalTransformationAccordion">
                            <div class="accordion-body">
                                Provide better services through personalized interactions, real-time support, and seamless online transactions.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-sync-alt pain-icon"></i> Adapt Faster
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#digitalTransformationAccordion">
                            <div class="accordion-body">
                                Easily pivot in response to changing market demands or crises like the recent pandemic.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed btn-neon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-check-circle pain-icon"></i> Boost Credibility
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#digitalTransformationAccordion">
                            <div class="accordion-body">
                                Being online increases visibility and builds trust with modern consumers who expect businesses to have a digital presence.
                            </div>
                        </div>
                    </div>
                </div>

                <p class="lead mb-4">The impact of a strong online presence goes beyond just survival; it ensures sustainability and growth in a rapidly evolving world.</p>
            </div>

            <!-- Right Side -->
            <div class="col-md-6">
                <img src="/assets/images/images/trial/trial2.jpg" alt="Digital Transformation" class="img-fluid rounded neon-border image">
            </div>
        </div>
    </div>
</section>
<!-- Codechieve Section -->
<!-- Codechieve Benefits Section -->
<section class="codechieve-section">
    <div class="container text-center text-white">
        <h2 class="section-title mb-5">Unlock Opportunities and Transform Your Business with <span class="highlight">Codechieve</span></h2>
        <div class="row align-items-stretch">
            
            <!-- Expand Reach -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-broadcast-tower icon-neon"></i>
                    <h5>Expand Your Reach</h5>
                    <p>Open doors to global markets, breaking geographical barriers to attract more customers.</p>
                </div>
            </div>

            <!-- Boost Operational Efficiency -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-sliders-h icon-neon"></i>
                    <h5>Boost Operational Efficiency</h5>
                    <p>Streamline your operations, automate processes, and eliminate inefficiencies.</p>
                </div>
            </div>

            <!-- Enhance Customer Experience -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-headset icon-neon"></i>
                    <h5>Enhance Customer Experience</h5>
                    <p>Provide personalized, real-time support and services that foster customer loyalty.</p>
                </div>
            </div>

            <!-- Adapt Quickly to Changes -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-sync-alt icon-neon"></i>
                    <h5>Adapt Quickly to Changes</h5>
                    <p>Stay agile and respond quickly to market shifts, ensuring your business thrives.</p>
                </div>
            </div>

            <!-- Build Consumer Trust -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-user-shield icon-neon"></i>
                    <h5>Build Consumer Trust</h5>
                    <p>Gain credibility and trust with a modern, transparent, and visible online presence.</p>
                </div>
            </div>

            <!-- Scale Your Business -->
            <div class="col-md-4 mb-4">
                <div class="icon-box">
                    <i class="fas fa-chart-line icon-neon"></i>
                    <h5>Scale Your Business</h5>
                    <p>Grow your business effortlessly with scalable solutions tailored to your unique needs.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" style="background-color: #121212; padding: 60px 0; color: #fff;">
    <div class="container">
        <h2 class="text-center mb-5" style="color: #ffffff; font-weight: bold;">Our <span class="highlight">Services</span></h2>
        <div class="row">

            <!-- Service Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <!-- <i class="fas fa-code fa-2x text-orange"></i> -->
                        <img src="/assets/images/logo/logonobg.png" alt="Codechieve Logo" width="35" height="35" class="me-2">
                    </div>
                    <h5 class="mb-3">Web Development</h5>
                    <p>Create fast, responsive websites tailored to your brand and goals.</p>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <i class="fas fa-shopping-cart fa-2x text-orange"></i>
                    </div>
                    <h5 class="mb-3">E-Commerce Setup</h5>
                    <p>Launch an online store with seamless shopping and payment experience.</p>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-2x text-orange"></i>
                    </div>
                    <h5 class="mb-3">UI/UX Design</h5>
                    <p>Design stunning interfaces that provide great user experiences.</p>
                </div>
            </div>

            <!-- Service Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <i class="fas fa-server fa-2x text-orange"></i>
                    </div>
                    <h5 class="mb-3">Hosting & Deployment</h5>
                    <p>Deploy websites securely on cloud platforms with custom domains.</p>
                </div>
            </div>

            <!-- Service Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <i class="fas fa-mobile fa-2x text-orange"></i>
                    </div>
                    <h5 class="mb-3">Mobile App Development</h5>
                    <p>Get a mobile app with great User experience.</p>
                </div>
            </div>

            <!-- Service Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="service-card h-100 text-center p-4 rounded">
                    <div class="service-icon mb-3">
                        <i class="fas fa-search fa-2x text-orange"></i>
                    </div>
                    <h5 class="mb-3">SEO Optimization</h5>
                    <p>Improve visibility and rank higher on Google through best practices.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact section -->
<section class="contact-form-section" style="background-color: #111111; height: 100vh;">
    <div class="container text-white d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <!-- Left side Text -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="section-title mb-5">Get in Touch with <span class="highlight">Codechieve</span></h2>
                <p class="contact-text">
                    We are here to help you transform your business digitally. Whether you want to optimize processes,
                    enhance customer engagement, or improve overall efficiency, we're ready to work with you.
                    Reach out to us, and let's create something amazing together.
                </p>
            </div>

            <!-- Right side Contact Form -->
            <div class="col-md-6">
                <div class="contact-form-box">
                    <form id="codechieveContactForm">
                        <div class="form-group">
                            <label for="userName" class="form-label">Your Name</label>
                            <input type="text" id="userName" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail" class="form-label">Your Email</label>
                            <input type="email" id="userEmail" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="userMessage" class="form-label">Your Message</label>
                            <textarea id="userMessage" class="form-control" rows="4" placeholder="Your message..." required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection