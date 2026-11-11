
<x-layout>
    <!-- About Hero Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-5 text-center">
            <h1 class="display-4 fw-bold">About Us</h1>
            <p class="lead mt-3">
                Learn more about who we are, what we do, and our mission.
            </p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img
                        src="https://placehold.co/600x400"
                        alt="About our company"
                        class="img-fluid rounded shadow"
                    >
                </div>

                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">Who We Are</h2>

                    <p class="text-muted">
                        We are a passionate team dedicated to delivering
                        innovative solutions and quality services.
                        Our goal is to help individuals and businesses
                        achieve their objectives through technology.
                    </p>

                    <p class="text-muted">
                        With creativity, dedication, and a commitment
                        to excellence, we continuously work to create
                        meaningful experiences for our customers.
                    </p>

                    <a href="{{ url('/contact') }}"
                       class="btn btn-primary mt-3">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="bg-white p-4 rounded shadow-sm h-100">
                        <h3 class="fw-bold mb-3">Our Mission</h3>
                        <p class="text-muted mb-0">
                            To provide reliable, innovative, and
                            high-quality solutions that make a
                            positive difference in people's lives.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bg-white p-4 rounded shadow-sm h-100">
                        <h3 class="fw-bold mb-3">Our Vision</h3>
                        <p class="text-muted mb-0">
                            To become a trusted name through innovation,
                            customer satisfaction, and continuous growth.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call To Action -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold">Let's Work Together</h2>
            <p class="text-muted mt-3">
                Have an idea or project? We'd love to hear from you.
            </p>

            <a href="{{ url('/contact') }}"
               class="btn btn-primary btn-lg mt-2">
                Get In Touch
            </a>
        </div>
    </section>
</x-layout>
