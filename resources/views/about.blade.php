@extends("includes.welcome")
@section("content")
    <!-- About Content Section -->
    <section class="about-content py-5">
        <div class="container text-center">
            <h2 class="section-title mb-4">Who <span class="highlight">We</span>  Are</h2>
            <p class="lead mb-4">We are Codechieve, a digital transformation company dedicated to helping businesses achieve their full potential through innovative web and app solutions.</p>
            <p>Our team of experts works closely with you to create personalized, user-centric products that meet the unique challenges of your business.</p>
        </div>
    </section>

    <!-- Mission and Vision Section -->
    <section class="mission-vision py-5 text-white">
        <div class="container">
            <div class="row">
                <!-- Mission -->
                <div class="col-md-6 mb-4">
                    <h3 class="highlight">Our Mission</h3>
                    <p>To empower businesses through seamless digital solutions that drive growth, enhance efficiency, and create lasting value for our clients.</p>
                </div>
                <!-- Vision -->
                <div class="col-md-6 mb-4">
                    <h3 class="highlight">Our Vision</h3>
                    <p>To be the leading provider of digital transformation services, enabling businesses to thrive in an increasingly competitive, technology-driven world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="values py-5">
    <div class="container text-center">
        <h3 class="mb-5">Our Core <span class="highlight">Values</span></h3>
        <div class="row">
            
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                        <h4 class="card-title mb-2">Collaboration</h4>
                        <p class="card-text">We work hand-in-hand with our clients to achieve mutual success.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-cogs fa-3x mb-3 text-success"></i>
                        <h4 class="card-title mb-2">Innovation</h4>
                        <p class="card-text">We believe in constantly evolving and adapting to new technologies.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <i class="fas fa-heart fa-3x mb-3 text-danger"></i>
                        <h4 class="card-title mb-2">Integrity</h4>
                        <p class="card-text">We maintain transparency and honesty in all our dealings.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection