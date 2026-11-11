<x-layout>
     <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welcome to {{ $name }} My Website</h1>
            <p>
                Build something amazing with modern technology.
                We provide solutions to help you grow.
            </p>
            <a href="#about" class="btn btn-light btn-lg">
                Get Started
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">About Us</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                We are dedicated to providing high-quality services
                and innovative solutions to our customers.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Services</h2>

            <div class="row g-4">
                @foreach ( $projects as $project )
                    <div class="col-md-4">
                    <div class="card feature-card shadow-sm p-4 text-center h-100">
                        @if ($project->image_path)
                            <img
                                src="{{ asset('storage/' . $project->image_path) }}"
                                alt="{{ $project->title }}"
                                class="mb-4 aspect-video w-full rounded-xl object-cover"
                            >
                        @endif
                        <h4>{{$project->title}}</h4>
                        <p class="text-muted">
                            {{$project->description}}
                        </p>

                        {{-- GitHub & Live URL Links --}}
                            <div class="mt-4 pt-3 border-top d-flex justify-content-center gap-2">
                                @if ($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank" class="btn btn-outline-dark btn-sm">
                                        GitHub
                                    </a>
                                @endif

                                @if ($project->live_url)
                                    <a href="{{ $project->live_url }}" target="_blank" class="btn btn-primary btn-sm">
                                        Live Demo
                                    </a>
                                @endif
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Contact Us</h2>
            <p class="text-muted">
                Have a project in mind? Let's work together.
            </p>
            <a href="mailto:example@example.com"
                class="btn btn-primary">
                Get In Touch
            </a>
        </div>
    </section>
</x-layout>