<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>York Cooling & Heating Solutions | Chillers, Heat Pumps & VRF</title>
    <meta name="description"
        content="Explore York's high-efficiency Mini Chillers, Air-to-Water Heat Pumps, and VRF Indoor Units. Engineered for decarbonization and smart connectivity." />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="https://www.aadiushmaa.com/york-air-cooled-scroll-chiller" />

    <?php include("common-section/header-link.php"); ?>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    /* --- Global Variables --- */
    :root {
        --york-blue: #003b70;
        /* Official York Blue */
        --york-dark: #002a50;
        --york-accent: #0091d2;
        /* Lighter Blue accent */
        --text-gray: #555;
        --light-bg: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        color: #333;
        overflow-x: hidden;
    }

    h1,
    h2,
    h3,
    h4 {
        font-weight: 700;
        color: var(--york-blue);
    }

    /* --- Hero Section Redesign --- */
    .york-hero {
        position: relative;
        height: 600px;
        /* Temp URL: User should replace with ./img/york/banner.jpg */
        background: url('https://placehold.co/1920x800/003b70/ffffff?text=York+Cooling+Solutions') center/cover no-repeat;
        display: flex;
        align-items: center;
        color: white;
        margin-bottom: 50px;
    }

    /* Overlay Fix for Header Text Conflict */
    .york-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, rgba(0, 59, 112, 0.95) 0%, rgba(0, 59, 112, 0.7) 60%, rgba(0, 59, 112, 0.4) 100%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 0 15px;
    }

    .hero-subtitle {
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        color: #4dc3ff;
        margin-bottom: 10px;
        display: block;
    }

    .hero-title {
        font-size: 3.5rem;
        line-height: 1.2;
        margin-bottom: 20px;
        color: white;
    }

    .hero-breadcrumb {
        background: rgba(255, 255, 255, 0.1);
        display: inline-block;
        padding: 8px 20px;
        border-radius: 50px;
        backdrop-filter: blur(5px);
    }

    .hero-breadcrumb a {
        color: #ddd;
        text-decoration: none;
        transition: 0.3s;
    }

    .hero-breadcrumb a:hover {
        color: white;
    }

    /* --- Feature Cards --- */
    .section-padding {
        padding: 80px 0;
    }

    .card-york {
        border: none;
        border-radius: 12px;
        background: white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .card-york:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 59, 112, 0.15);
    }

    .card-york .card-img-top {
        height: 260px;
        object-fit: cover;
        background: #eee;
    }

    .card-york .card-body {
        padding: 30px;
    }

    .card-york h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .feature-list {
        padding-left: 0;
        list-style: none;
        margin-bottom: 20px;
    }

    .feature-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        color: var(--text-gray);
        font-size: 0.95rem;
    }

    .feature-list li::before {
        content: "\f00c";
        /* FontAwesome Check */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--york-accent);
        position: absolute;
        left: 0;
        top: 2px;
    }

    /* --- Tech Specs / Deep Dive --- */
    .tech-section {
        background-color: #fff;
        overflow: hidden;
    }

    .tech-img-box {
        position: relative;
        height: 100%;
        min-height: 400px;
    }

    .tech-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    .badge-york {
        background: var(--york-blue);
        color: white;
        padding: 5px 12px;
        border-radius: 4px;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        display: inline-block;
    }

    /* --- Stats Grid --- */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .stat-item {
        text-align: center;
        padding: 20px;
        background: var(--light-bg);
        border-radius: 8px;
        border-bottom: 3px solid var(--york-accent);
    }

    .stat-item strong {
        display: block;
        font-size: 1.8rem;
        color: var(--york-blue);
    }

    .stat-item span {
        font-size: 0.9rem;
        color: #666;
    }

    /* --- Form Section --- */
    .contact-area {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
    }

    .contact-box {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .custom-input {
        height: 50px;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 0 20px;
        width: 100%;
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .custom-input:focus {
        border-color: var(--york-blue);
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 59, 112, 0.1);
    }

    .btn-theme {
        background: var(--york-blue);
        color: white;
        padding: 15px 40px;
        border: none;
        border-radius: 5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 0.3s;
        display: inline-block;
    }

    .btn-theme:hover {
        background: var(--york-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 59, 112, 0.2);
    }

    /* Mobile Adjustments */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }

        .york-hero {
            height: auto;
            padding: 100px 0;
        }
    }
    </style>
</head>

<body>

    <div class="body-wrapper">

        <?php include("common-section/navbar.php"); ?>

        <div class="ltn__utilize-overlay"></div>
        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bg="img/product-4.png"
            style="height:236px;padding-top: 62px; margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title" style="color:white;">Engineering Excellence: Your Trusted Partner for
                                Quality Manufacturing</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="https://www.aadiushmaa.com/" style="color:white;"><span
                                                class="ltn__secondary-color"><i class="fas fa-home"
                                                    style="color:white;"></i></span> Home</a></li>
                                    <li style="color:white;">York Chillers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <section class="section-padding" style="background: #fff;">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge-york">Our Products</span>
                    <h2>Advanced Cooling & Heating Technology</h2>
                    <p style="max-width: 600px; margin: 0 auto; color: #666;">
                        Explore our range of York air-cooled chillers, modular heat pumps, and VRF indoor units designed
                        for efficiency and decarbonization.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-york">
                            <img src="img/york/york mini chiller.jpg" alt="York Amichi Series Mini Chiller"
                                class="card-img-top">
                            <div class="card-body">
                                <h3><a href="york-mini-chiller.php">York Mini Chillers</a></h3>
                                <p class="text-muted">The Amichi™ Series & YLAA Scroll Chillers provide high performance
                                    in a compact footprint.</p>
                                <ul class="feature-list">
                                    <li><strong>DC Inverter Technology:</strong> Precise capacity control for max
                                        efficiency.</li>
                                    <li><strong>Smart Connected:</strong> Cloud-based analytics & monitoring built-in.
                                    </li>
                                    <li><strong>Brazed Plate Exchanger:</strong> Superior heat transfer & reduced
                                        refrigerant charge.</li>
                                    <li><strong>Silent Operation:</strong> Sound levels as low as 22dB(A).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-york">
                            <img src="img/york/heat pump.jpg" alt="York Commercial Heat Pump" class="card-img-top">
                            <div class="card-body">
                                <h3><a href="york-heat-pump.php">York Heat Pumps</a></h3>
                                <p class="text-muted">YMAE & Commercial Heat Pumps for efficient decarbonization and
                                    boiler replacement.</p>
                                <ul class="feature-list">
                                    <li><strong>High Temp Output:</strong> Hot water up to 60°C (140°F) for heating.
                                    </li>
                                    <li><strong>Dual Function:</strong> Simultaneous heating and cooling (4-pipe
                                        options).</li>
                                    <li><strong>Eco-Friendly:</strong> Uses R454B Low GWP refrigerant.</li>
                                    <li><strong>EVI Compressor:</strong> Operates efficiently even in -25°C ambient.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-york">
                            <img src="img/york/indoor units.png" alt="York VRF Indoor Units" class="card-img-top">
                            <div class="card-body">
                                <h3><a href="york-indoor-units.php">York Indoor Units</a></h3>
                                <p class="text-muted">A wide range of VRF indoor units including Cassettes, Ducted, and
                                    Wall Mounts.</p>
                                <ul class="feature-list">
                                    <li><strong>High Static Pressure:</strong> Ducted units deliver up to 1.16 WG.</li>
                                    <li><strong>Motion Sensors:</strong> Optional occupancy sensors for energy saving.
                                    </li>
                                    <li><strong>Auto-Swing Louvers:</strong> 4-way airflow for uniform distribution.
                                    </li>
                                    <li><strong>Built-in Pump:</strong> Integrated condensate pumps for reliability.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="tech-img-box mb-4">
                            <img src="/img/york/scroll components.png" alt="York Scroll Compressor Technology">
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                        <span class="badge-york">Why Choose York?</span>
                        <h2 class="mb-4">Intelligent Design for Real-World Efficiency</h2>
                        <p class="mb-4">York systems don't just meet standards; they set them. From the <strong>YMAE
                                Inverter Scroll Modular Heat Pump</strong> to our advanced VRF systems, every component
                            is engineered for longevity and performance.</p>

                        <div class="stats-grid">
                            <div class="stat-item">
                                <strong>52°C</strong>
                                <span>Max Cooling Ambient</span>
                            </div>
                            <div class="stat-item">
                                <strong>60°C</strong>
                                <span>Max Heating Output</span>
                            </div>
                            <div class="stat-item">
                                <strong>28</strong>
                                <span>Up to SEER Rating</span>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h4><i class="fas fa-microchip" style="color:var(--york-accent);"></i> Smart Connected
                                Technology</h4>
                            <p class="small text-muted">Cloud-based analytics monitor your equipment 24/7, predicting
                                maintenance needs before they become issues.</p>

                            <h4><i class="fas fa-leaf" style="color:var(--york-accent);"></i> Sustainability Focus</h4>
                            <p class="small text-muted">Committed to low GWP refrigerants (R454B, R-1234ze) to reduce
                                environmental footprint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STRATEGIC BENEFITS SECTION (IMAGE REQUEST) -->
        <section class="section-padding" style="background: #fff; border-top: 1px solid #eee;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                        <h4 style="font-size: 1.35rem; margin-bottom: 20px; color: #333; font-weight: 600;">
                            Electrification</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.7;">Make your decarbonization goals a
                            reality by electrifying your building with the most advanced air-to-water heat pump chiller.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <h4 style="font-size: 1.35rem; margin-bottom: 20px; color: #333; font-weight: 600;">Stock
                            Inventory</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.7;">Manufacturing and kitting in North
                            America allows for shorter lead times and faster project completion.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <h4 style="font-size: 1.35rem; margin-bottom: 20px; color: #333; font-weight: 600;">Lifecycle
                            savings</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.7;">Replace costly boiler operations
                            by combining the YMAE air-to-water heat pump chiller with an efficient YORK&reg;
                            water-to-water heat pump solution.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <h4 style="font-size: 1.35rem; margin-bottom: 20px; color: #333; font-weight: 600;">Modular
                            Design</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.7;">Design modules to your
                            specifications in Selection Navigator for maximum efficiency in the smallest footprint.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ADDITIONAL CONTENT: INDUSTRY APPLICATIONS -->
        <section class="section-padding" style="background-color: #f1f4f8;">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="badge-york">Market Solutions</span>
                    <h2>Versatile Solutions for Every Sector</h2>
                    <p style="max-width: 750px; margin: 0 auto; color: #555;">
                        York's cooling and heating solutions are engineered to meet the unique demands of diverse
                        industries, ensuring optimal performance, comfort, and sustainability.
                    </p>
                </div>

                <div class="row g-4 " style="gap: 3rem; justify-content: center;">
                    <!-- Commercial Real Estate -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-accent);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 145, 210, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-building"
                                        style="color: var(--york-accent); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Commercial Real Estate</h4>
                            </div>
                            <p class="small text-muted mb-0">High-efficiency VRF and chiller systems that maximize
                                leasable space while providing superior comfort and individualized control for tenants.
                            </p>
                        </div>
                    </div>

                    <!-- Healthcare & Labs -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-blue);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 59, 112, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-microscope"
                                        style="color: var(--york-blue); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Healthcare & Laboratories</h4>
                            </div>
                            <p class="small text-muted mb-0">Critical environment solutions that maintain precise
                                temperature, humidity, and air quality standards required for patient safety and
                                sensitive research.</p>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-accent);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 145, 210, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-graduation-cap"
                                        style="color: var(--york-accent); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Education</h4>
                            </div>
                            <p class="small text-muted mb-0">Quiet and energy-efficient HVAC systems that create an
                                optimal learning environment while helping institutions reach their sustainability
                                goals.</p>
                        </div>
                    </div>

                    <!-- Data Centers -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-blue);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 59, 112, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-server" style="color: var(--york-blue); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Data Centers</h4>
                            </div>
                            <p class="small text-muted mb-0">Scaleable cooling solutions designed for 24/7 reliability
                                and high-density heat loads, ensuring maximum uptime for critical digital
                                infrastructure.</p>
                        </div>
                    </div>

                    <!-- Industrial & Manufacturing -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-accent);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 145, 210, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-industry"
                                        style="color: var(--york-accent); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Manufacturing</h4>
                            </div>
                            <p class="small text-muted mb-0">Robust process cooling and heating systems built to
                                withstand harsh industrial environments while delivering consistent thermal performance.
                            </p>
                        </div>
                    </div>

                    <!-- Hospitality -->
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="card-york h-100 p-4" style="border-top: 4px solid var(--york-blue);">
                            <div class="d-flex align-items-center mb-3">
                                <div
                                    style="width: 50px; height: 50px; background: rgba(0, 59, 112, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-concierge-bell"
                                        style="color: var(--york-blue); font-size: 1.5rem;"></i>
                                </div>
                                <h4 class="mb-0" style="font-size: 1.25rem;">Hospitality</h4>
                            </div>
                            <p class="small text-muted mb-0">Sophisticated climate control that balances guest comfort
                                with operational efficiency, featuring smart sensors and low-noise operation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-padding contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-box" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-lg-5 mb-4 mb-lg-0">
                                    <h3>Get a Quote Today</h3>
                                    <p class="text-muted">Fill out the form to request pricing or technical
                                        specifications for York Chillers, Heat Pumps, or Indoor Units.</p>
                                    <img src="img/form-img.png" alt="Contact Us"
                                        style="max-width:100%; border-radius:10px;">
                                </div>
                                <div class="col-lg-7">
                                    <form id="contact-form" action="form-submit.php" method="GET">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" class="custom-input"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" class="custom-input"
                                                    placeholder="Email Address" required>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="custom-input" name="services" required>
                                                    <option value="">Interested In...</option>
                                                    <option value="Mini Chiller">Mini Chillers</option>
                                                    <option value="Heat Pump">Heat Pumps</option>
                                                    <option value="Indoor Unit">VRF Indoor Units</option>
                                                    <option value="Service">Technical Support</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="phone" class="custom-input"
                                                    placeholder="Phone Number" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div
                                                    style="background:#f1f1f1; padding:10px; border-radius:5px; display:flex; align-items:center;">
                                                    <span style="font-weight:bold; margin-right:10px;">Security:</span>
                                                    <span id="captchaQuestion"
                                                        style="font-weight:bold; color:var(--york-blue);"></span>
                                                    <input type="number" id="captchaInput" class="custom-input"
                                                        style="width:80px; margin:0 0 0 10px; height:35px; padding:0 10px;"
                                                        required>
                                                    <input type="hidden" id="captchaResult">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <textarea name="message" class="custom-input" rows="4"
                                                    style="height:auto; padding-top:15px;"
                                                    placeholder="Message or specific model requirement..."></textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn-theme w-100">Submit Request</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/our-clients.php"); ?>
        <?php include("common-section/footer.php"); ?>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    // Init Animations
    AOS.init({
        once: true,
        offset: 120,
        duration: 800,
        easing: 'ease-out-cubic'
    });

    // Simple Math Captcha
    document.addEventListener("DOMContentLoaded", function() {
        const qEl = document.getElementById("captchaQuestion");
        const resEl = document.getElementById("captchaResult");
        const inputEl = document.getElementById("captchaInput");
        const form = document.getElementById("contact-form");

        function setCaptcha() {
            let n1 = Math.floor(Math.random() * 9) + 1;
            let n2 = Math.floor(Math.random() * 9) + 1;
            qEl.innerText = `${n1} + ${n2} = ?`;
            resEl.value = n1 + n2;
        }
        setCaptcha();

        form.addEventListener("submit", function(e) {
            if (parseInt(inputEl.value) !== parseInt(resEl.value)) {
                e.preventDefault();
                alert("Incorrect Security Answer. Please try again.");
                setCaptcha();
                inputEl.value = "";
            }
        });
    });
    </script>
</body>

</html>