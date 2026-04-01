<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davda Infrastructure Pvt. Ltd. | Crafting Legacies</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('public/favicon.png') }}">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css') }}">
</head>

<body>
    <!-- Header -->
    <header id="main-header">
        <div class="container">
            <div class="flex items-center justify-between" style="width: 100%;">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('public/front/images/davda-logo.png') }}" alt="davda" class="img-fluid">
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md-flex items-center gap-8">
                    <a href="{{ url('/#projects') }}" class="nav-link">Our Projects</a>
                    <a href="{{ url('/#about') }}" class="nav-link">About</a>
                    <a href="{{ url('/#aminities') }}" class="nav-link">Amenities</a>
                </nav>
                <a href="{{ url('/#contact') }}" class="btn-enquire deskbtn">
    <span>ENQUIRE NOW</span>
</a>
                <!--<button onclick="document.querySelector('#contact').scrollIntoView()" class="btn-enquire deskbtn">-->
                <!--    <span>ENQUIRE</span>-->
                <!--</button>-->

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-btn md-hidden" id="menu-toggle">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <div style="padding: 1.5rem 0;">
                <a href="{{ url('/#projects') }}" class="nav-link">Our Projects</a>
                    <a href="{{ url('/#about') }}" class="nav-link">About</a>
                    <a href="{{ url('/#aminities') }}" class="nav-link">Amenities</a>
                <button onclick="document.querySelector('#contact').scrollIntoView()"
                    class="mobile-nav-link text-primary" style="color: var(--color-primary); font-weight: 600;">
                   ENQUIRE NOW
                </button>
            </div>
        </div>
    </header>
    <main>