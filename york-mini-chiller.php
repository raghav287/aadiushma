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

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* --- Global Variables --- */
        :root {
            --york-blue: #003b70;
            --york-dark: #002a50;
            --york-accent: #0091d2;
            --text-gray: #555;
            --light-bg: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(0, 59, 112, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 59, 112, 0.15);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: #333;
            background-color: #fbfbfb;
        }

        /* --- Breadcrumb Enhancement --- */
        .ltn__breadcrumb-area {
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
        }

        .ltn__breadcrumb-area::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 59, 112, 0.9) 0%, rgba(0, 145, 210, 0.6) 100%);
            z-index: 1;
        }

        .ltn__breadcrumb-inner {
            position: relative;
            z-index: 2;
        }

        .page-title {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 15px;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .ltn__breadcrumb-list ul li {
            font-weight: 500;
            font-size: 1.1rem;
        }

        /* --- Product Section --- */
        .product-section {
            padding: 100px 0;
        }

        .section-header {
            max-width: 800px;
            margin: 0 auto 60px;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--york-blue);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-header .divider {
            width: 80px;
            height: 4px;
            background: var(--york-accent);
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        .category-label {
            display: inline-block;
            padding: 6px 20px;
            background: var(--york-blue);
            color: white;
            font-weight: 700;
            border-radius: 50px;
            font-size: 0.9rem;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 5px 15px rgba(0, 59, 112, 0.3);
        }

        /* --- Product Card Design --- */
        .product-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .product-image-wrapper {
            position: relative;
            padding: 30px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
            overflow: hidden;
            border-bottom: 1px solid #f0f0f0;
        }

        .product-image-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: var(--transition);
        }

        .product-card:hover .product-image-wrapper img {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0, 145, 210, 0.1);
            color: var(--york-accent);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .product-info {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.4rem;
            color: var(--york-blue);
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.3;
        }

        .product-specs {
            list-style: none;
            padding: 0;
            margin: 0 0 25px;
        }

        .product-specs li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            color: var(--text-gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .product-specs li::before {
            content: "\f058";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--york-accent);
            position: absolute;
            left: 0;
            top: 2px;
        }

        .capacity-box {
            background: var(--light-bg);
            padding: 15px;
            border-radius: 12px;
            margin-top: auto;
            border-left: 4px solid var(--york-blue);
        }

        .capacity-box span {
            display: block;
            font-size: 0.8rem;
            color: var(--text-gray);
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .capacity-box strong {
            font-size: 1.1rem;
            color: var(--york-blue);
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 991px) {
            .page-title {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>

    <div class="body-wrapper">

        <?php include("common-section/navbar.php"); ?>

        <div class="ltn__utilize-overlay"></div>
        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "
            data-bg="img/other-page-banner-img.png" style="height:350px; margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner">
                            <h1 class="page-title" style="color:white;">York Mini Chillers</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="https://www.aadiushmaa.com/" style="color:white;"><span
                                                class="ltn__secondary-color"><i class="fas fa-home"
                                                    style="color:white;"></i></span> Home</a></li>
                                    <li><a href="york-chillers.php" style="color:white;">York Chillers</a></li>
                                    <li style="color:white;">Mini Chillers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->


        <!-- PRODUCT SECTION START -->
        <div class="product-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <div class="divider"></div>
                    <h2>Our Chiller Lineup</h2>
                    <p>Experience the peak of cooling technology with York's high-efficiency chiller solutions,
                        engineered for reliability and performance.</p>
                </div>

                <!-- AIR-COOLED SECTION -->
                <div class="text-center" data-aos="fade-up">
                    <span class="category-label">Air-Cooled Solutions</span>
                </div>

                <div class="row">
                    <!-- YMAE 045 to 065 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-badge">DC Inverter</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ymae_mini_chiller.png" alt="York YMAE 045 to 065">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YMAE 045 to 065</h3>
                                <ul class="product-specs">
                                    <li>Air-cooled DC Inverter Scroll</li>
                                    <li>R410A Refrigerant</li>
                                    <li>High Seasonal Efficiency</li>
                                    <li>Compact Design</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>45 kW to 65 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YMAE 140 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-badge">Gold Fin Option</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ymae_mini_chiller.png" alt="York YMAE 140">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YMAE 140</h3>
                                <ul class="product-specs">
                                    <li>Air-cooled DC Inverter Scroll</li>
                                    <li>R410A Refrigerant</li>
                                    <li>Optional: Factory Coated Gold Fin</li>
                                    <li>Advanced Control System</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>140 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YMPA 0080 to 0260 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-card">
                            <div class="product-badge">Low GWP Ready</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ympa_chiller.png" alt="York YMPA 0080 to 0260">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YMPA 0080 to 0260</h3>
                                <ul class="product-specs">
                                    <li>Air-cooled DC Inverter Scroll</li>
                                    <li>R454B and R410A Options</li>
                                    <li>Precision Capacity Control</li>
                                    <li>Optimized for Sustainability</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>78 kW to 255 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YCAE 065 to 130 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-badge">Scroll Tech</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ycae_chiller.png" alt="York YCAE 065 to 130">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YCAE 065 to 130</h3>
                                <ul class="product-specs">
                                    <li>Air-cooled Scroll Chiller</li>
                                    <li>R410A Refrigerant</li>
                                    <li>Reliable Performance</li>
                                    <li>Modular Configuration</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>65 kW to 130 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YLAA 0195 to 0517 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-badge">Multi-Stage</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ylaa_chiller.png" alt="York YLAA 0195 to 0517">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YLAA 0195 to 0517</h3>
                                <ul class="product-specs">
                                    <li>Air-cooled Scroll Chiller</li>
                                    <li>R410A Refrigerant</li>
                                    <li>High Efficiency Brazed Heat Exchanger</li>
                                    <li>Low Noise Operation</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>199 kW to 520.6 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- WATER-COOLED SECTION -->
                <div class="text-center mt-5" data-aos="fade-up">
                    <span class="category-label">Water-Cooled Solutions</span>
                </div>

                <div class="row">
                    <!-- YCWE 021 to 042 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="product-card">
                            <div class="product-badge">Water-Cooled</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ycwe_chiller.png" alt="York YCWE 021 to 042">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YCWE 021 to 042</h3>
                                <ul class="product-specs">
                                    <li>Water-Cooled Scroll Chiller</li>
                                    <li>R410A Refrigerant</li>
                                    <li>Optional: Factory Built Canopy</li>
                                    <li>Ultra Compact Footprint</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>76.2 kW to 151.9 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- YGWS 100 to 330 -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-card">
                            <div class="product-badge">Screw Compressor</div>
                            <div class="product-image-wrapper">
                                <img src="img/york/york_ygws_chiller.png" alt="York YGWS 100 to 330">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title">YGWS 100 to 330</h3>
                                <ul class="product-specs">
                                    <li>Water-Cooled Screw Chiller</li>
                                    <li>R134a Refrigerant</li>
                                    <li>High Turn-down Ratio</li>
                                    <li>Industrial Grade Reliability</li>
                                </ul>
                                <div class="capacity-box">
                                    <span>Cooling Capacity</span>
                                    <strong>350.4 kW to 1150 kW</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT SECTION END -->


        <?php include("include/our-clients.php"); ?>
        <?php include("common-section/footer.php"); ?>

    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
</body>

</html>