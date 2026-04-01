@include('layouts.frontheader')

<section id="projects" class="projects-section">

    <!-- Desktop Split View (Accordion) -->
    <div class="projects-desktop hidden lg-flex">

        <!-- Project 1 -->
        <div class="project-card" data-index="0">
            <div class="project-bg">
                <img src="{{ asset('public/front/images/Bellevue-Vieraaa.webp') }}" alt="Bellevue Viera">
                <div class="overlay"></div>
            </div>
            <div class="project-content">
                <div class="project-top">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('public/front/images/head-logo-1.svg') }}" alt="Bungalow" class="img-fluid" height="48" width="48">
                        <span class="project-cat" style="flex:1;">Bungalow & Plots - (200 to 1000sq yard)</span>
                    </div>
                </div>
                <div class="project-center">
                    <h3 class="project-name">Bellevue Vieraaa</h3>
                    <div class="ym-project">
                        <h6 class="project_subtitle">Bellevue Vieraaa</h6>
                        <h2 class="project_title">Premium 3 & 4 BHK Villas <br> Designed for Refined Living</h2>
                        <p class="project-details">World-class amenities set within a thoughtfully planned residential enclave that blends comfort, space, and everyday elegance.</p>
                        <p class="start">Starting from</p>
                        <p class="price">₹53 Lakhs*</p>
                        <a href="{{ url('https://bellevue.co.in/') }}" target="_blank" class="btn-explore">Explore Residences</a>
                    </div>
                </div>
            </div>
            <div class="hover-border"></div>
        </div>

        <!-- Project 2 -->
        <div class="project-card" data-index="1">
            <div class="project-bg">
                <img src="{{ asset('public/front/images/Bellevue-Luxuria.webp') }}" alt="BV 2">
                <div class="overlay"></div>
            </div>
            <div class="project-content">
                <div class="project-top">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('public/front/images/head-logo-2.svg') }}" alt="" class="img-fluid">
                        <span class="project-cat">Your Own Farm House</span>
                    </div>
                </div>
                <div class="project-center">
                    <h3 class="project-name">Bellevue Luxuria</h3>
                    <div class="ym-project">
                        <h6 class="project_subtitle">Bellevue Luxuria</h6>
                        <h2 class="project_title">Exclusive Luxury Farmhouses <br> Crafted for Elevated Living</h2>
                        <p class="project-details">Expansive private farmhouses designed for those who value space, serenity, and a lifestyle rooted in nature with modern comforts.</p>
                        <p class="start">Starting from</p>
                        <p class="price">₹1.71 Cr*</p>
                        <a href="javascript:viod(0)"  class="btn-explore">Explore Farmhouses</a>
                    </div>
                </div>
            </div>
            <div class="hover-border"></div>
        </div>

        <!-- Project 3 -->
        <div class="project-card" data-index="2">
            <div class="project-bg">
                <img src="{{ asset('public/front/images/Bellevue-club.webp') }}" alt="The Club">
                <div class="overlay"></div>
            </div>
            <div class="project-content">
                <div class="project-top">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('public/front/images/head-logo-3.svg') }}" alt="" class="img-fluid">
                        <span class="project-cat">Resort & Destination Club</span>
                    </div>
                </div>
                <div class="project-center">
                    <h3 class="project-name">Bellevue The Club</h3>
                    <div class="ym-project">
                        <h6 class="project_subtitle">Bellevue The Club</h6>
                        <h2 class="project_title">Resort Living & Experiences <br> For Leisure and Celebration</h2>
                        <p class="project-details">A premium lifestyle destination offering curated hospitality, refined experiences, and world-class leisure amenities.</p>
                        <p class="start" style=" margin-bottom: 10px; ">Memberships Start from 1.50 Cr*</p>
                        {{-- <p class="price">₹53 Lakhs*</p> --}}
                        <a href="{{ url('https://www.bellevuetheclub.com') }}" target="_blank" class="btn-explore">Explore The Club</a>
                    </div>
                </div>
            </div>
            <div class="hover-border"></div>
        </div>

    </div>

    <!-- Mobile List View -->
    <div class="projects-mobile lg-hidden">
        <!-- Project 1 -->
        <div class="mobile-project-card">
            <div class="mobile-project-img">
                <img src="{{ asset('public/front/images/Bellevue-Vieraaa.webp') }}" alt="Bellevue Viera">
                <div class="mobile-project-overlay"></div>
                <div class="mobile-tag bg-green">Bungalow & Plots - (200 to 1000sq yard)</div>
            </div>
            <div class="mobile-project-body">
                <div class="flex items-center gap-3 mb-2">
                    <img src="{{ asset('public/front/images/head-logo-1.svg') }}" alt="">
                </div>
                <!-- <h3 class="mobile-project-title">Bellevue Viera</h3> -->
                <div class="ym-project">
                    <h6 class="project_subtitle">Bellevue Vieraaa</h6>
                    <h2 class="project_title">Premium 3 & 4 BHK Villas <br>  Designed for Refined Living</h2>
                    <p class="project-details">World-class amenities set within a thoughtfully planned residential enclave that blends comfort, space, and everyday elegance.</p>
                    <p class="start">Starting from</p>
                    <p class="price">₹53 Lakhs*</p>
                    <a href="{{ url('https://bellevue.co.in/') }}" target="_blank" class="btn-explore">Explore Residences</a>
                </div>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="mobile-project-card">
            <div class="mobile-project-img">
                <img src="{{ asset('public/front/images/Bellevue-Luxuria.webp') }}" alt="Bellevue Luxuria">
                <div class="mobile-project-overlay"></div>
                <div class="mobile-tag bg-accent">Your Own Farm House</div>
            </div>
            <div class="mobile-project-body">
                <div class="flex items-center gap-3 mb-2">
                    <img src="{{ asset('public/front/images/head-logo-2.svg') }}" alt="">
                </div>
                <!-- <h3 class="mobile-project-title">Bellevue Luxuria</h3> -->
                <div class="ym-project">
                    <h6 class="project_subtitle">Bellevue Luxuria</h6>
                    <h2 class="project_title">Exclusive Luxury Farmhouses <br> Crafted for Elevated Living</h2>
                    <p class="project-details">Expansive private farmhouses designed for those who value space, serenity, and a lifestyle rooted in nature with modern comforts.</p>
                    <p class="start">Starting from</p>
                    <p class="price">₹1.71 Cr*</p>
                    <a href="javascript:viod(0)"  class="btn-explore">Explore Farmhouses</a>
                </div>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="mobile-project-card">
            <div class="mobile-project-img">
                <img src="{{ asset('public/front/images/Bellevue-club.webp') }}" alt="Bellevue The Club">
                <div class="mobile-project-overlay"></div>
                <div class="mobile-tag bg-primary">Resort & Destination Club</div>
            </div>
            <div class="mobile-project-body">
                <div class="flex items-center gap-3 mb-2">
                    <img src="{{ asset('public/front/images/head-logo-3.svg') }}" alt="">
                </div>
                <!-- <h3 class="mobile-project-title">Bellevue The Club</h3> -->
                <div class="ym-project">
                    <h6 class="project_subtitle">Bellevue The Club</h6>
                    <h2 class="project_title">Resort Living & Destination Experiences <br>  Created for Leisure and Celebration</h2>
                    <p class="project-details">A landmark lifestyle destination featuring premium hospitality, curated experiences, and world-class leisure amenities.</p>
                    <p class="start">Memberships Available</p>
                    {{-- <p class="price">₹53 Lakhs*</p> --}}
                    <a href="{{ url('https://www.bellevuetheclub.com/') }}" target="_blank" class="btn-explore">Explore The Club</a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Manifesto Section -->
<section id="manifesto" class="manifesto-section">
    <!-- Header -->
    <div class="container" id="about">
        <div class="about_header flex">
            <h2 class="about_title">Developing with Purpose. <br>  Delivering with Integrity.</h2>
            <p>
                Each development by Davda Infrastructure is guided by thoughtful planning, disciplined execution, and a long-term vision. We focus on creating well-designed communities that support modern living while delivering enduring value for homeowners and investors alike.

            </p>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="container">
        <div class="stats-grid">
            <!-- Stat 1 -->
            <div class="stat-card">
                <div class="stat-value">
                    15+
                </div>
                <div class="stat-label">Years of Real Estate Expertise</div>
            </div>
            <!-- Stat 2 -->
            <div class="stat-card">
                <div class="stat-value">3+
                </div>
                <div class="stat-label">Large-Scale Residential Developments</div>
            </div>
            <!-- Stat 3 -->
            <div class="stat-card">
                <div class="stat-value">
                    100+ Acres
                </div>
                <div class="stat-label">Planned & Developed Land</div>
            </div>
            <!-- Stat 4 -->
            <div class="stat-card">
                <div class="stat-value">
                    100%
                </div>
                <div class="stat-label">Transparent & Approved Projects</div>
            </div>
        </div>
    </div>

    <!-- Values -->
    <div class="container">
        <div class="values-grid">
            <!-- Value 1 -->
            <div class="value-card group">
                <span class="value-index">01</span>
                <h3 class="value-title">Thoughtful Architecture</h3>
                <p class="value-desc">Every project is designed with careful attention to space planning, natural light, ventilation, and everyday functionality.</p>
                <div class="value-border">
                    <div class="value-border-active"></div>
                </div>
            </div>
            <!-- Value 2 -->
            <div class="value-card group">
                <span class="value-index">02</span>
                <h3 class="value-title">Quality Construction</h3>
                <p class="value-desc">We follow proven construction practices, quality materials, and strict supervision to ensure long-term durability and peace of mind.</p>
                <div class="value-border">
                    <div class="value-border-active"></div>
                </div>
            </div>
            <!-- Value 3 -->
            <div class="value-card group">
                <span class="value-index">03</span>
                <h3 class="value-title">Community-Centric Living</h3>
                <p class="value-desc">Our developments are planned to encourage security, greenery, shared amenities, and a balanced lifestyle for families.</p>
                <div class="value-border">
                    <div class="value-border-active"></div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Lifestyle Section -->
<!-- Lifestyle Section -->
<section id="aminities" class="lifestyle-section">
    <div class="container">
        <div class="flex lg-flex md-items-end justify-between gap-8 aminities_head">
            <div>
                <span class="section-label">The Lifestyle</span>

                <!-- Dropdown -->
                <div class="custom-dropdown-container">
                    <div class="dropdown-trigger" id="amenityTrigger" onclick="toggleDropdown()">
                        <span class="current-val">All Amenities</span>
                        <i data-lucide="chevron-down" class="arrow-icon"></i>
                    </div>

                    <ul class="dropdown-options" id="amenityOptions">
                        <li onclick="filterAmenities('All Amenities', 'all')">All Amenities</li>
                        @foreach($categories as $cat)
                            <li onclick="filterAmenities('{{ addslashes($cat->category_title) }}', '{{ $cat->url }}')">
                                {{ $cat->category_title }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="aminities_stats flex">
                <div class="text-right">
                    <div class="aminities-count">50+</div>
                    <div class="aminities-label">Amenities Across Projects</div>
                </div>
                <div class="text-right">
                    <div class="aminities-count">5</div>
                    <div class="aminities-label">Integrated Township Infrastructure</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="amenities-grid" id="amenity-grid">
            @if($amenities->isEmpty())
                <p class="text-center py-5">No amenities found.</p>
            @else
                @foreach($amenities as $item)
                    <div class="grid-item" data-category="{{ $item->category_slug }}" style="display:block;">
                        @php
                            $imgPath = '';
                            if (is_string($item->image)) {
                                $imgPath = trim($item->image);
                            } elseif (is_array($item->image) && !empty($item->image)) {
                                $imgPath = trim($item->image[0] ?? '');
                            }

                            $finalImage = '';
                            if ($imgPath) {
                                if (filter_var($imgPath, FILTER_VALIDATE_URL)) {
                                    $finalImage = $imgPath; // external
                                } else {
                                    $finalImage = asset('public/PropertyImage/' . ltrim($imgPath, '/')); // local
                                }
                            }
                        @endphp

                        @if($finalImage)
                            <img src="{{ $finalImage }}" alt="{{ $item->title }}" class="img-fluid">
                        @else
                            <div class="placeholder text-center py-4 bg-light rounded">
                                <p>No image available</p>
                            </div>
                        @endif

                        <div class="step_info">
                            <p class="step_info_p">{{ $item->title }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- company -->
<section class="mt-100">
    <div class="container">
        <div class="company_wrapper">
            <img src="{{ asset('public/front/images/center-logo.png') }}" alt="davda" class="img-fluid">
            <div class="cmpny_content">
                <h3 class="about_title" style="color: #111;">A Trusted Name in <br> Thoughtful Development.</h3>
                <a href="#" class="btn-enquire">
                    <span>CONTACT US</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- dragger -->
<section class="mt-100">
    <div class="container">
        <div class="slider desktop_slider">
            <div class="image old">
                <img src="{{ asset('public/front/images/dragger-new.webp') }}" class="img-fluid" alt="slider-1">
            </div>
            <div class="image new">
                <img src="{{ asset('public/front/images/dragger-old.webp') }}" class="img-fluid" alt="slider-2">
            </div>
            <div class="divider"></div>
        </div>

        <!-- New mobile slider (add this right after the desktop slider) -->
        <div class="mobile_slider">
            <div class="image" id="mobile-image">
                <img src="{{ asset('public/front/images/dragger-new.webp') }}" class="img-fluid" alt="mobile-slider" id="mobile-img">
            </div>
            <button id="toggle-btn" class="btn-enquire" style="margin-top: 20px;">Toggle View</button>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section mt-100">
    <div class="container">
        <div class="contact-grid">
            <!-- Form -->
            <div class="contact-form-wrapper">
                <h2 class="about_title" style="color: #111;margin-bottom:20px;">CONTACT US</h2>
                <form id="contactform" method="POST" action="{{ route('inquiry.submit') }}" novalidate>
                                @csrf

                    <div class="form-group">
                        <label>Full Name <span class="text-primary">*</span></label>
                        <input type="text" id="full_name" name="full_name" maxlength="50"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ');"
                                        placeholder="Enter your Full Name">
                        <span class="error" id="error-full_name"></span>
                    </div>

                    <div class="form-group">
                        <label>Email Address <span class="text-primary">*</span></label>
                        <input type="email" id="email" name="email" maxlength="60"
                                        placeholder="Enter your email">
                                    <span class="error" id="error-email"></span>
                        
                    </div>

                    <div class="form-group">
                        <label>Contact Number <span class="text-primary">*</span></label>
                        <input type="text" id="phone" name="phone" maxlength="15"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                        placeholder="Enter your Mobile Number">
                                    <span class="error" id="error-phone"></span>
                    </div>
                    <div class="form-group">
                        <label>Additional Notes </label>
                        <textarea name="message" id="message" rows="2"></textarea>
                    </div>

                    <div class="">
                        <label style="color:#111;">Area of Interest <span class="text-primary">*</span></label>
                        <div class="interest-grid">
                            <div class="interest-btn flex gap-2">
                                <input type="checkbox" id="Residences" name="interest[]" value="Residences">
                                <label for="Residences"> Residences (Villas)</label>
                            </div>
                            <div class="interest-btn flex gap-2">
                                <input type="checkbox" id="Club" name="interest[]" value="Club">
                                <label for="Club"> Club</label>
                            </div>

                            <div class="interest-btn flex gap-2">
                                <input type="checkbox" id="Plots" name="interest[]" value="Plots">
                                <label for="Plots"> Plots</label>
                            </div>
                            <div class="interest-btn flex gap-2">
                                <input type="checkbox" id="all" name="interest[]" value="all">
                                <label for="all"> All Options</label>
                            </div>
                        </div>
                        <span class="error" id="error-interest"></span>
                        {{-- <input type="hidden" name="interest" value="residences"> --}}
                    </div>
                    <div class="form_group">
                                    

                                    <div style="margin: 12px 0; display: flex; align-items: center; gap: 12px;">
                                        <span id="captcha-text"
                                            style="font-size: 12px; font-weight: bold; letter-spacing:1px; padding: 10px 10px;
                                                background: #f8f8f8; border: 1px solid #aaa; border-radius: 8px;
                                                user-select: none; cursor: pointer; min-width: 100px; text-align: center;">
                                        </span>

                                        <button type="button" id="refresh-captcha"
                                            style="font-size: 22px; width: 30px; height: 30px; border-radius: 50%;
                                                background: #f0f0f0; border: 1px solid #ccc; cursor: pointer;">
                                            ↻
                                        </button>
                                    </div>

                                    <input type="text" id="captcha" name="captcha" maxlength="6" row="2"
                                        placeholder="Enter the number" inputmode="numeric" autocomplete="off"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                        style=" background: transparent; border: none; border-bottom: 1px solid #ddd; padding-bottom: 0.5rem; outline: none; "
                                        >

                                    <span id="error-captcha" class="error"></span>
                                </div>

                    <button type="submit" id="submitBtn" class="btn-enquire">
                        <span>Submit Application</span>
                    </button>
                </form>
            </div>

            <!-- Info -->
            <div class="contact-info">
                <div class="info-block">
                    <h4 class="title_24">Head Office</h4>
                    <address>
                        <a href="https://maps.app.goo.gl/GPNPBiEuQjJDZX9R6" target="_blank">
                            B-302, B-wing, 3rd floor, Gopal Palace,
                            Nr. Nehru Nagar BRTS Road,
                            Satelite, Ahemabadad - 380015
                        </a>
                    </address>
                </div>
                <div class="info-block">
                    <h4 class="title_24">Site Location</h4>
                    <address>
                        <a href="https://maps.app.goo.gl/AfjJR9BUupwvTFNX6" target="_blank">
                            Bellevue Vieraaa, Bavla Nalsarovar Road, Adroda, Bavla, Ahemadabad, Gujarat-India.
                        </a>
                    </address>
                </div>

                <div class="info-block">
                    <h4 class="title_24">Direct Contact</h4>
                    <div class="direct_link">
                        <a href="tel:+91 9909617909" target="_blank">Phone Number :</a>
                        <a href="tel:+91 9909617909" target="_blank">+91 9909617909</a>
                        <a href="mailto:build@dipl.asia" target="_blank">Email Address:</a>
                        <a href="mailto:build@dipl.asia" target="_blank">build@dipl.asia</a>
                        <a href="tel:+91 81412 60600" target="_blank">Site Contact No :</a>
                        <a href="tel:+91 81412 60600" target="_blank">+91 81412 60600</a>
                    </div>
                </div>

                <div class="info-block">
                    <h4 class="title_24">Location</h4>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d235350.44669308738!2d72.295771!3d22.82651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395ebe687edbb60b%3A0x765d78d5832bec27!2sDavda%20Infrastructure%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1768989470064!5m2!1sen!2sus"
                            width="600" height="300" style="border:0; line-height: 0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@include('layouts.frontfooter')

<script>
function toggleDropdown() {
    document.getElementById('amenityOptions').classList.toggle('show');
}

function filterAmenities(name, slug) {
    document.querySelector('.current-val').textContent = name;
    document.getElementById('amenityOptions').classList.remove('show');

    const items = Array.from(document.querySelectorAll('#amenity-grid .grid-item'));
    let firstVisible = true;

    if (slug === 'all') {

        // ✅ Shuffle items randomly
        let shuffled = items.sort(() => 0.5 - Math.random());

        // Hide all first
        items.forEach(item => {
            item.style.display = 'none';
            item.classList.remove('large');
        });

        // ✅ Show only first 5 random items
        shuffled.slice(0, 5).forEach(item => {
            item.style.display = 'block';

            if (firstVisible) {
                item.classList.add('large');
                firstVisible = false;
            }
        });

    } else {

        items.forEach(item => {
            const itemCategory = item.getAttribute('data-category');

            if (itemCategory === slug) {
                item.style.display = 'block';

                if (firstVisible) {
                    item.classList.add('large');
                    firstVisible = false;
                } else {
                    item.classList.remove('large');
                }

            } else {
                item.style.display = 'none';
                item.classList.remove('large');
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', function () {
    filterAmenities('All Amenities', 'all');
});

document.addEventListener('click', function(e) {
    const trigger = document.getElementById('amenityTrigger');
    if (!trigger.contains(e.target)) {
        document.getElementById('amenityOptions').classList.remove('show');
    }
});
</script>
<style>
.error {
    color: #dc3545;
    font-size: 13px;
    display: block;
    margin-top: 5px;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {

    // Disposable emails
    const disposableDomains = [
        'mailinator.com','10minutemail.com','guerrillamail.com','tempmail.com',
        'temp-mail.org','throwawaymail.com','maildrop.cc','dispostable.com',
        'getairmail.com','moakt.com','spamgourmet.com','yopmail.com',
        'sharklasers.com','mailnesia.com','fakemail.net','emailondeck.com',
        'trashmail.com','mintemail.com','mytemp.email'
    ];

    function isDisposableEmail(email) {
        const domain = email.split('@')[1]?.toLowerCase();
        return domain && disposableDomains.includes(domain);
    }

    // CAPTCHA
    let captchaCode = "";
    function generateCaptcha() {
        captchaCode = Math.floor(100000 + Math.random() * 900000).toString();
        $('#captcha-text').text(captchaCode);
    }
    generateCaptcha();

    $('#refresh-captcha, #captcha-text').click(function () {
        generateCaptcha();
        $('#captcha').val('');
        $('#error-captcha').text('');
    });

    // Clear error on input or change
    $('#contactform input, #contactform textarea').on('input change', function () {
        const id = this.id;

        // Normal inputs
        if (id) $('#error-' + id).text('');

        // Checkboxes
        if ($(this).attr('name') === 'interest[]') {
            if ($('input[name="interest[]"]:checked').length > 0) {
                $('#error-interest').text('');
            }
        }
    });

    // Form submit
    $('#contactform').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;
        $('.error').text('');

        // Name
        if (!$('#full_name').val().trim()) {
            $('#error-full_name').text('Please enter your name');
            isValid = false;
        }

        // Email
        let email = $('#email').val().trim();
        if (!email) {
            $('#error-email').text('Please enter your email');
            isValid = false;
        } 
        else if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email)) {
            $('#error-email').text('Please enter a valid email');
            isValid = false;
        }
        else if (isDisposableEmail(email)) {
            $('#error-email').text('Disposable emails not allowed');
            isValid = false;
        }

        // Phone
        let phone = $('#phone').val().trim();
        if (!phone) {
            $('#error-phone').text('Please enter your mobile number');
            isValid = false;
        } 
        else if (phone.length < 10 || phone.length > 15) {
            $('#error-phone').text('Mobile number must be 10–15 digits');
            isValid = false;
        }

        // Interest
        if ($('input[name="interest[]"]:checked').length === 0) {
            $('#error-interest').text('Please select at least one area of interest');
            isValid = false;
        }

        // CAPTCHA
        let enteredCaptcha = $('#captcha').val().trim();
        if (!enteredCaptcha) {
            $('#error-captcha').text('Please enter the captcha');
            isValid = false;
        } 
        else if (enteredCaptcha !== captchaCode) {
            $('#error-captcha').text('Please enter the correct captcha');
            $('#captcha').val('').focus();
            generateCaptcha();
            isValid = false;
        }

        if (!isValid) return;

        // Submit form
        $('#submitBtn').prop('disabled', true).text('Submitting...');
        this.submit();
    });
});
</script>
