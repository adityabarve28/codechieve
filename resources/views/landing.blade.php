@extends("includes.welcome")
@section("content")

<!-- Stakes Section -->
<div class="stakes" id="stakes">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-md-4">
                <h1><span class="icon">⚠️</span> What's at Stake</h1>
                <ul class="stakes-list">
                    <li><span class="icon"> 📉</span> Missed digital opportunities</li>
                    <li><span class="icon"> ⚔️</span> Loss of competitive edge</li>
                    <li><span class="icon"> 📉</span> Reduced customer engagement</li>
                    <li><span class="icon"> 🏢</span> Difficulty scaling operations</li>
                    <li><span class="icon"> 🌍</span> Limited Reach</li>
                    <li><span class="icon"> 🥈</span> Competitive Disadvantage</li>
                </ul>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <h1><span class="icon">💡</span> About Us</h1>
                <p>At Codechieve, we specialize in transforming traditional businesses into thriving online enterprises. we combine cutting edge technology with industry insights to build powerful, user friendly websites that drive growth and success</p>
            </div>
        </div>
        <!-- Floating Contact Button and Form -->
        <div id="contact-floating">
            <a href="https://wa.me/919137818209?text=I%20would%20like%20to%20know%20more" target="_blank" id="whatsappButton">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <button id="contactButton">
                <i class="fas fa-envelope"></i> Contact Us
            </button>

            <div id="contactForm">
                <h5>Contact Us</h5>
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <textarea placeholder="Your Message" rows="4" required></textarea>
                    <button type="submit" class="submit-btn">Send</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Benefits Section -->
<div class="benefits" id="benefits">
    <div class="container">
        <div class="row justify-content-center text-white text-center">
            <h1 class="mb-5">Unlock the Benefits</h1>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <div class="benefit-icon mb-3">
                    <i class="fas fa-globe"></i> <!-- Network/Earth Icon -->
                </div>
                <h5>Expanded Reach</h5>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <div class="benefit-icon mb-3">
                    <i class="fas fa-chart-line"></i> <!-- Graph Up Icon -->
                </div>
                <h5>Enhanced Sales</h5>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <div class="benefit-icon mb-3">
                    <i class="fas fa-project-diagram"></i> <!-- Circle Connections Icon -->
                </div>
                <h5>Streamlined Process</h5>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <div class="benefit-icon mb-3">
                    <i class="fas fa-cogs"></i> <!-- Settings Icon -->
                </div>
                <h5>Scalable Solutions</h5>
            </div>
        </div>
    </div>
</div>

@endsection