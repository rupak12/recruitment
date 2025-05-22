<style>
    :root {
        --primary-color: #101820;
        --secondary-color: #f8c000;
        --text-color: #ffffff;
        --text-muted: #cccccc;
        --hover-color: #ffffff;
    }

    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
    }

    .footer {
        background-color: var(--primary-color);
        color: var(--text-color);
        padding: 70px 20px 30px;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--secondary-color), #ff6b00, var(--secondary-color));
        background-size: 200% auto;
        animation: gradient 3s linear infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 200% center;
        }
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: auto;
        gap: 40px;
        position: relative;
        z-index: 1;
    }

    .footer-logo {
        position: relative;
    }

    .footer-logo img {
        width: 180px;
        transition: transform 0.3s ease;
    }

    .footer-logo:hover img {
        transform: scale(1.05);
    }

    .footer-logo::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--secondary-color);
        transition: width 0.3s ease;
    }

    .footer-logo:hover::after {
        width: 100px;
    }

    .footer-section {
        flex: 1;
        min-width: 250px;
        transition: transform 0.3s ease;
    }

    .footer-section:hover {
        transform: translateY(-5px);
    }

    .footer-section h3 {
        font-size: 18px;
        margin-bottom: 20px;
        color: var(--secondary-color);
        position: relative;
        display: inline-block;
    }

    .footer-section h3::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 2px;
        background-color: var(--secondary-color);
        transition: width 0.3s ease;
    }

    .footer-section:hover h3::after {
        width: 70px;
    }

    .footer-section p,
    .footer-section a {
        font-size: 15px;
        line-height: 1.7;
        color: var(--text-muted);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer-section a:hover {
        color: var(--hover-color);
        padding-left: 5px;
    }

    .footer-icons i {
        margin-right: 15px;
        color: var(--secondary-color);
        width: 20px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .footer-icons a:hover i {
        transform: scale(1.2);
    }

    .footer-bottom {
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 25px;
        margin-top: 50px;
        font-size: 14px;
        color: var(--text-muted);
        position: relative;
    }

    .footer-bottom::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 20px;
        background: radial-gradient(ellipse at center, rgba(248, 192, 0, 0.4) 0%, rgba(248, 192, 0, 0) 70%);
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: var(--text-muted);
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        background-color: var(--secondary-color);
        color: var(--primary-color);
        transform: translateY(-3px);
    }

    .newsletter {
        margin-top: 20px;
    }

    .newsletter input {
        width: 100%;
        padding: 10px 15px;
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        border-radius: 4px;
        color: white;
        margin-bottom: 10px;
    }

    .newsletter button {
        background-color: var(--secondary-color);
        color: var(--primary-color);
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .newsletter button:hover {
        background-color: #ffd700;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(248, 192, 0, 0.3);
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-section {
            margin-bottom: 30px;
            align-items: center;
        }

        .footer-section h3::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .social-links {
            justify-content: center;
        }
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

@extends('layouts.front')

<div class="dashboard">
    <!-- Futuristic Neon Sidebar -->
    <aside class="cyber-sidebar">
        <a href="{{ url('/') }}" class="cyber-logo-link">
            <div class="cyber-logo">
                <img src="{{ asset('front/assets/img/5core white logo.png') }}" alt="5Core Logo"
                    class="holographic-logo" />
                <div class="neon-pulse"></div>
            </div>
        </a>
        <nav class="cyber-menu">
            <a href="https://www.5core.com/pages/career" class="cyber-menu-item" style="--neon-color: #FF2A6D;">
                <span class="menu-icon"><i class="fas fa-briefcase"></i></span>
                <span class="menu-text">Career</span>
                <span class="neon-line"></span>
            </a>
            <a href="#" class="cyber-menu-item active" id="job-opportunity" style="--neon-color: #05D9E8;">
                <span class="menu-icon"><i class="fas fa-search-dollar"></i></span>
                <span class="menu-text">Job Opportunity</span>
                <span class="neon-line"></span>
            </a>
            <a href="https://www.5core.com/pages/why-5-core" class="cyber-menu-item" style="--neon-color: #D300C5;">
                <span class="menu-icon"><i class="fas fa-heart"></i></span>
                <span class="menu-text">Why Join 5Core</span>
                <span class="neon-line"></span>
            </a>
            <a href="https://www.5core.com/pages/5-core-benefits" class="cyber-menu-item"
                style="--neon-color: #FFEE00;">
                <span class="menu-icon"><i class="fas fa-gift"></i></span>
                <span class="menu-text">Explore Benefits</span>
                <span class="neon-line"></span>
            </a>
            <a href="https://www.5core.com/pages/5-core-policy" class="cyber-menu-item" style="--neon-color: #00FF85;">
                <span class="menu-icon"><i class="fas fa-file-alt"></i></span>
                <span class="menu-text">5Core Policies</span>
                <span class="neon-line"></span>
            </a>
            <a href="https://www.5core.com/pages/our-department" class="cyber-menu-item" style="--neon-color: #7B2BFF;">
                <span class="menu-icon"><i class="fas fa-sitemap"></i></span>
                <span class="menu-text">Our Departments</span>
                <span class="neon-line"></span>
            </a>
        </nav>
        <div class="cyber-footer">
            <div class="scanline"></div>
            <p class="cyber-text">SYSTEM NAVIGATION</p>
        </div>
        <div class="cyber-grid"></div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Welcome Section -->
        <div class="content-section welcome-section active-section" id="welcome-section">
            <div class="video-banner">
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('front/assets/img/recruitment video.mp4') }}" type="video/mp4">
                </video>
            </div>

            <!-- Careers Section -->
            <div class="careers-section">
                <div class="careers-container">
                    <h2>Turn Your Passion into a Profession</h2>
                    <p class="careers-intro">
                        If you're looking for more than just a job — a place where passion meets purpose — then 5 Core
                        is the opportunity you've been waiting for.
                        Join a driven, dynamic team at one of the leading names in audio and music equipment, and
                        experience what it's like to truly love where you work.
                    </p>

                    <div class="divider"></div>

                    <h3 class="values-title">Our Core Values</h3>
                    <p class="values-subtitle">Discover what drives us — from innovation to integrity — and learn how we
                        are building more than products;<br>we are building trust and excellence.</p>

                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-heart"></i></div>
                            <h4>A Culture Built on Passion</h4>
                            <p>At 5 Core, we share a deep love for music and technology. Our team thrives in a
                                supportive, collaborative environment where helping others is second nature.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-building"></i></div>
                            <h4>State-of-the-Art Workspace</h4>
                            <p>Work in a space designed for creativity and performance — where cutting-edge resources
                                and comfort come together to fuel your best work.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                            <h4>Grow With Us</h4>
                            <p>We invest in our people. With strong mentorship, learning opportunities, and leadership
                                development, your journey with us is always moving forward.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon"><i class="fas fa-gift"></i></div>
                            <h4>Perks That Matter</h4>
                            <p>From exclusive discounts on gear to health and wellness support, we offer benefits that
                                take care of you both on and off the job.</p>
                        </div>
                    </div>

                    <!-- See All Openings Button -->
                    <button class="see-all-btn" src="http://127.0.0.1:5500/index.html">
                        See All Openings
                    </button>
                </div>
            </div>

            <!-- Our Team Section (now inside welcome-section) -->
            <div class="team-section">
                <div class="team-container">
                    <h2 class="team-title">Our Collaborative Teams</h2>
                    <p class="team-subtitle">Find Your Place in the 5Core Family</p>

                    <div class="team-grid">
                        <div class="team-item">
                            <img src="{{ asset('front/assets/img/Freshers.png') }}" alt="Sales Team">
                            <p class="team-label">Sales</p>
                        </div>

                        <div class="team-item">
                            <img src="{{ asset('front/assets/img/Freshers.png') }}" alt="Technology Team">
                            <p class="team-label">Technology</p>
                        </div>

                        <div class="team-item">
                            <img src="{{ asset('front/assets/img/Freshers.png') }}" alt="Marketing Team">
                            <p class="team-label">Marketing</p>
                        </div>

                        <div class="team-item">
                            <img src="{{ asset('front/assets/img/Freshers.png') }}" alt="Services Team">
                            <p class="team-label">Services</p>
                        </div>

                        <div class="team-item">
                            <img src="{{ asset('front/assets/img/Freshers.png') }}" alt="Services Team">
                            <p class="team-label">Internships</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Awards Section - Images Only -->
            <section class="awards-showcase">
                <div class="careers-container">
                    <h2 class="section-title">Our Recognitions</h2>
                    <p>At 5Core, our commitment to innovation, quality, and excellence has earned us recognition across
                        the audio and electronics industry. From prestigious industry awards to global certifications,
                        our milestones reflect the trust and admiration of customers and partners worldwide.</p>
                    <br>

                    <div class="awards-grid">
                        <!-- Each award item now properly triggers openModal() -->
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 1"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 2"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 3"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 4"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 5"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 6"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 7"
                                class="award-image">
                        </div>
                        <div class="award-item" onclick="openModal(this)">
                            <img src="{{ asset('front/assets/img/ECommerceManager.png') }}" alt="Award 8"
                                class="award-image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal for Award Images -->
            <div id="imageModal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="modalImage">
            </div>

            <!-- Memories Gallery Section (now inside welcome-section) -->
            <section class="memories-section">
                <div class="gallery-container">
                    <h2 class="section-title">Our Memories</h2>
                    <p class="section-subtitle">Capturing moments that define our 5Core journey</p>

                    <div class="gallery-grid">
                        <!-- Gallery Item 1 - Annual Meet 2023 -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Team Event"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Annual Meet 2023</span>
                                </div>
                            </div>
                        </a>

                        <!-- Gallery Item 2 - Festival Celebration -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Office Celebration"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Festival Celebration</span>
                                </div>
                            </div>
                        </a>

                        <!-- Gallery Item 3 - Team Outing -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Team Building"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Team Outing</span>
                                </div>
                            </div>
                        </a>

                        <!-- Gallery Item 4 - Our Workspace -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Workspace"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Our Workspace</span>
                                </div>
                            </div>
                        </a>

                        <!-- Gallery Item 5 - Learning Session -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Training Session"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Learning Session</span>
                                </div>
                            </div>
                        </a>

                        <!-- Gallery Item 6 - Achievement Day -->
                        <a href="https://www.5core.com/pages/awards-achievements" class="gallery-link">
                            <div class="gallery-item">
                                <img src="{{ asset('front/assets/img/Customercare.png') }}" alt="Award Ceremony"
                                    class="gallery-image">
                                <div class="image-overlay">
                                    <span class="image-caption">Achievement Day</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div> <!-- End of welcome-section -->

        <!-- Job Section (standalone - only shows when "Job Opportunity" is clicked) -->
        <div class="content-section" id="job-section">
            <div class="jobs-container">
                @forelse($jobLocations as $location)
                    <div class="job-card">
                        <div class="job-info">
                            <h3>{{ ucwords($location->job->title) }}</h3>
                            <p><strong>Job Type:</strong> {{ ucwords($location->location->location) }}</p>
                            <p><strong>Offered Salary:</strong>
                                {{ $location->show_salary == 1
                                    ? ($location->pay_type == 'Range'
                                        ? round($location->starting_salary / 1000) .
                                            'K - ' .
                                            round($location->maximum_salary / 1000) .
                                            'K / ' .
                                            $location->pay_according
                                        : ($location->pay_type == 'Starting'
                                            ? 'From ' . round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                            : ($location->pay_type == 'Maximum'
                                                ? 'Upto ' . round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                                : ($location->pay_type == 'Exact Amount'
                                                    ? round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                                    : 'Upto 30K'))))
                                    : 'Upto 30K' }}
                            </p>

                            <button
                                onclick="window.location.href='{{ route('jobs.jobDetail', [$location->job->slug, $location->location->id]) }}'">See
                                Details</button>

                        </div>
                        <div class="job-image">
                            <img src="{{ asset($location->image ?? 'images/Freshers.png') }}"
                                alt="{{ $location->title ?? 'Freshers' }}" />
                        </div>
                    </div>
                @empty
                    <h4 id="no-data" class="mx-auto mt-50 mb-40 card-title mb-0">@lang('modules.front.noData')</h4>
                @endforelse


            </div>
        </div>
    </main>
</div>


@section('content')
@endsection
@push('footer-script')
    <script>
        $(document).ready(function() {
            var perPage = '{{ $perPage }}';

            totalCurrentData = perPage;
            var jobCount = {{ $jobCount }};
            if (jobCount > perPage) {
                $('#load_more_button').show();
            } else {
                $('#load_more_button').hide();
            }
            var totalCurrentCount = $(".job-list").length;
            console.log(totalCurrentCount);

            //load more
            $('body').on('click', '#load_more_button', function() {
                var location_id = $('#location_id').val();
                var category = $('#category').val();
                var skill = $('#skill').val();
                var company = $('#company').val();
                console.log("hello");

                var token = '{{ csrf_token() }}';
                $('#load_more_button').html('<b>' + "@lang('app.loading')" + '...</b>');
                $.easyAjax({
                    url: "{{ route('jobs.more-data') }}",
                    type: 'POST',
                    data: {
                        '_token': token,
                        'totalCurrentData': totalCurrentData,
                        'location_id': location_id,
                        'category': category,
                        'skill': skill,
                        'company': company
                    },
                    success: function(response) {
                        $('#jobList').append(response.view);
                        totalCurrentData = response.data.job_current_count;
                        $('#load_more_button').blur();
                        $('#load_more_button').html('@lang('modules.front.loadMore')');
                        if (response.data.hideButton !== 'undefined' && response.data
                            .hideButton === 'yes') {
                            $('#load_more_button').hide();
                        }
                        if (response.data.hideButton !== 'undefined' && response.data
                            .hideButton === 'no') {
                            $('#load_more_button').show();
                        }
                    }
                });
            });

            //search
            $('body').on('click', '#search', function() {
                var location_id = $('#location_id').val();
                var category = $('#category').val();
                var skill = $('#skill').val();
                var company = $('#company').val();
                var token = '{{ csrf_token() }}';
                $.easyAjax({
                    url: "{{ route('jobs.search-job') }}",
                    type: 'POST',
                    data: {
                        '_token': token,
                        location_id: location_id,
                        category: category,
                        skill: skill,
                        company: company
                    },
                    success: function(response) {
                        $('#jobList').html(response.view);
                        totalCurrentData = response.data.job_current_count;
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#applicant-notes").offset().top
                        }, 2000);
                        console.log(response.data.hideButton);
                        if (response.data.hideButton != 'undefined' && response.data
                            .hideButton == 'yes') {
                            $('#load_more_button').hide();
                        }
                        if (response.data.hideButton != 'undefined' && response.data
                            .hideButton == 'no') {
                            $('#load_more_button').show();
                        }
                    }
                });
            });
        });
        // Set default: show welcome section on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Hide all sections first
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active-section');
            });
            // Show only welcome section initially
            document.getElementById('welcome-section').classList.add('active-section');
        });

        // Job Opportunity Click Handler
        document.getElementById('job-opportunity').addEventListener('click', function(e) {
            e.preventDefault();

            // Update active state in sidebar
            document.querySelectorAll('.cyber-menu-item').forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');

            // Hide all sections, show ONLY job section
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active-section');
            });
            document.getElementById('job-section').classList.add('active-section');

            // Scroll to top
            window.scrollTo(0, 0);
        });

        // Other menu items - show welcome section
        document.querySelectorAll('.cyber-menu-item:not(#job-opportunity)').forEach(item => {
            item.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    // Update active state in sidebar
                    document.querySelectorAll('.cyber-menu-item').forEach(menuItem => {
                        menuItem.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Hide all sections, show welcome section
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.classList.remove('active-section');
                    });
                    document.getElementById('welcome-section').classList.add('active-section');
                }
                // External links will work normally
            });
        });

        // ======================
        // MODAL FUNCTIONALITY
        // ======================

        // Open modal with clicked image
        function openModal(element) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');

            // Get the image source from the clicked award item
            const imgSrc = element.querySelector('img').src;

            modal.style.display = "block";
            modalImg.src = imgSrc;

            // Prevent scrolling when modal is open
            document.body.style.overflow = 'hidden';
        }

        // Close modal
        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
            // Restore scrolling
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Initialize award items (alternative to inline onclick)
        document.querySelectorAll('.award-item').forEach(item => {
            item.addEventListener('click', function() {
                openModal(this);
            });
        });
    </script>
@endpush

{{-- filepath: /Applications/XAMPP/xamppfiles/htdocs/reqcore/resources/views/front/job-openings.blade.php --}}
{{-- <div class="row gap-y" id="jobList">
    @forelse($jobLocations as $location)
        <div class="col-md-12 col-lg-4 portfolio-2 job-list" data-shuffle="item"
            data-groups="{{ $location->location . ',' . $location->job->category->name }}">
            <a href="{{ route('jobs.jobDetail', [$location->job->slug, $location->location->id]) }}"
                class="job-opening-card">
                <div class="card card-bordered">
                    <div class="card-block">
                        <h5 class="card-title mb-0">{{ ucwords($location->job->title) }}</h5>
                        @if ($location->job->company->show_in_frontend == 'true')
                            @if (
                                $location->job->job_company_id != null &&
                                    $location->job->job_company_id != '' &&
                                    !is_null($location->job->jobCompany))
                                <small class="company-title mb-50">
                                    @lang('app.by') {{ ucwords($location->job->jobCompany->company_name) }}
                                </small>
                            @else
                                <small class="company-title mb-50">
                                    @lang('app.by') {{ ucwords($location->job->company->company_name) }}
                                </small>
                            @endif
                        @endif
                        <div class="d-flex flex-wrap justify-content-between card-location">
                            <span class="fw-400 fs-14">
                                <i class="mr-5 fa fa-map-marker"></i>
                                {{ ucwords($location->location->location) }}
                            </span>
                            <span class="fw-400 fs-14">
                                {{ ucwords($location->job->category->name) }}
                                <i class="ml-5 fa fa-graduation-cap"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <h4 id="no-data" class="mx-auto mt-50 mb-40 card-title mb-0">
            @lang('modules.front.noData')
        </h4>
    @endforelse
</div> --}}

