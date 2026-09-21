<?php
$page_title = "Projects | PHE";
$meta_description = "PHE is a leading provider of prefabricated homes. We offer a wide range of homes to suit your needs.";

include 'inc/header.php';
?>

<main>
    <section class="home-hero-section">
        <div class="hero-section-bg hero-section-bg-overlay">
            <img src="img/projects/banner_main.jpg" alt="PHE Hero" class="hero-section-bg-img">
        </div>

        <div class="building-system-hero-section-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <h2 class="mb-0">OUR PROJECTS</h2>
                    </div>
                    <div class="col-lg-3">
                        <h6>Proven modular building solutions delivered across diverse environments and
                            global markets
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="slogan-stats-wrapper">
        <section class="home-slogan-section d-flex-center">
            <div class="container home-slogan-container">
                <h2 class="home-slogan-text">Built. Delivered. Proven.</h2>
                <h6 class="text-center mx-auto mt-5 mb-3" style="line-height: 1.5; max-width: 1200px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    PHE Luxwood has successfully delivered modular building solutions across multiple countries, supporting residential, commercial, and community developments. From single-family homes to large-scale modular facilities, our projects demonstrate the speed, flexibility, and performance of our engineered building system.
                </h6>
            </div>
        </section>
    </div>

    <section class="projects-section">
        <div class="container-fluid">
            <div class="projects-section-inner row">
                <div class="col-lg-2 pt-5 px-4" aria-label="Project filters">
                    <form class="projects-filter-form" action="projects.php" method="get">
                        <div class="projects-filter-group">
                            <button class="projects-filter-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projects-filter-field" aria-expanded="false" aria-controls="projects-filter-field">
                                <span>Country</span>
                                <i class="fa-solid fa-chevron-up projects-filter-chevron" aria-hidden="true"></i>
                            </button>
                            <div class="collapse" id="projects-filter-field">
                                <ul class="projects-filter-list list-unstyled mb-0">
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="australia" id="filter-country-australia">
                                            <label class="form-check-label" for="filter-country-australia">Australia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="china" id="filter-country-china">
                                            <label class="form-check-label" for="filter-country-china">China</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="congo" id="filter-country-congo">
                                            <label class="form-check-label" for="filter-country-congo">Congo</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="kenya" id="filter-country-kenya">
                                            <label class="form-check-label" for="filter-country-kenya">Kenya</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="liberia" id="filter-country-liberia">
                                            <label class="form-check-label" for="filter-country-liberia">Liberia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="senegal" id="filter-country-senegal">
                                            <label class="form-check-label" for="filter-country-senegal">Senegal</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="south-africa" id="filter-country-south-africa">
                                            <label class="form-check-label" for="filter-country-south-africa">South Africa</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="projects-filter-group">
                            <button class="projects-filter-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projects-filter-area" aria-expanded="false" aria-controls="projects-filter-area">
                                <span>Types</span>
                                <i class="fa-solid fa-chevron-up projects-filter-chevron" aria-hidden="true"></i>
                            </button>
                            <div class="collapse" id="projects-filter-area">
                                <ul class="projects-filter-list list-unstyled mb-0">
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="residential" id="filter-type-residential">
                                            <label class="form-check-label" for="filter-type-residential">Residential</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="commercial" id="filter-type-commercial">
                                            <label class="form-check-label" for="filter-type-commercial">Commercial</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="amenities" id="filter-type-amenities">
                                            <label class="form-check-label" for="filter-type-amenities">Amenities</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class="projects-filter-empty mt-4 mb-0 d-none" role="status">No projects match your filters.</p>
                    </form>
                </div>

                <div class="col-lg-10 top-padding px-5 text-white" style="background-color: #1a2e25;">
                    <div class="projects-content">
                        <!-- Block 1 -->
                        <div class="projects-block" id="pacific-house" data-country="australia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Pacific House</h2>
                                    <p class="text-uppercase mb-5">3-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modern modular home designed for efficient construction and comfortable living.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/pacific_1.jpg" alt="Project 1" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/pacific_2.jpg" alt="Project 2" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/pacific_3.jpg" alt="Pacific House - Interior 1">
                                <img src="img/projects/australia/pacific_4.jpg" alt="Pacific House - Exterior Detail">
                                <img src="img/projects/australia/pacific_5.jpg" alt="Pacific House - Living Area">
                                <img src="img/projects/australia/pacific_6.jpg" alt="Pacific House - Interior 1">
                                <img src="img/projects/australia/pacific_7.jpg" alt="Pacific House - Exterior Detail">
                            </div>
                        </div>

                        <!-- Block 2 -->
                        <div class="projects-block" id="ballara-house" data-country="australia" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Ballara House</h2>
                                    <p class="text-uppercase mb-5">2-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/australia/ballara_house_1.jpg" alt="Project 3" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A compact residential solution optimized for functionality and cost efficiency.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>

                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/ballara_house_2.jpg" alt="ballara House - Interior 1">
                                <img src="img/projects/australia/ballara_house_3.jpg" alt="ballara House - Exterior Detail">
                                <img src="img/projects/australia/ballara_house_4.jpg" alt="ballara House - Living Area">
                                <img src="img/projects/australia/ballara_house_5.jpg" alt="ballara House - Interior 1">
                                <img src="img/projects/australia/ballara_house_6.jpg" alt="ballara House - Exterior Detail">
                            </div>
                        </div>

                        <!-- Block 3 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/granny_flat_3.jpg" alt="Granny Flats" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Granny Flats</h2>
                                    <p class="text-uppercase mb-5">60 Units | 1-Bedroom Portable Cabins</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A large-scale modular housing project designed for rapid deployment and consistent build quality. </p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/granny_flat_4.jpg" alt="Granny Flats" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/granny_flat_1.jpg" alt="Granny Flats - 3">
                                <img src="img/projects/australia/granny_flat_2.jpg" alt="Granny Flats - 4">
                            </div>
                        </div>

                        <!-- Block 4 -->
                        <div class="projects-block" id="eco-mining-cabins" data-country="australia" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Eco Mining Cabins</h2>
                                    <p class="text-uppercase mb-5">37 Units | Studio Portable Cabins</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">Accommodation units developed for remote mining operations with fast installation capabilities. </p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/australia/moranbah_camp_1.jpg" alt="Eco Mining Cabins" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/moranbah_camp_2.jpg" alt="Eco Mining Cabins - 2">
                                <img src="img/projects/australia/moranbah_camp_3.jpg" alt="Eco Mining Cabins - 3">
                                <img src="img/projects/australia/moranbah_camp_4.jpg" alt="Eco Mining Cabins - 4">
                                <img src="img/projects/australia/moranbah_camp_5.jpg" alt="Eco Mining Cabins - 5">
                                <img src="img/projects/australia/moranbah_camp_6.jpg" alt="Eco Mining Cabins - 6">
                            </div>
                        </div>

                        <!-- Block 5 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Site Office</h2>
                                    <p class="text-uppercase mb-5">Modular Office Facility</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A rapidly deployed modular workspace designed to support on-site operations.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/site_office_1.jpg" alt="Site Office" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/site_office_3.jpg" alt="Site Office" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/site_office_2.jpg" alt="Site Office - 3">
                                <img src="img/projects/australia/site_office_4.jpg" alt="Site Office - 4">
                            </div>
                        </div>

                        <!-- Block 6 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Cafeteria Facility</h2>
                                    <p class="text-uppercase mb-5">Modular Dining Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/australia/Cafeteria_1.jpg" alt="Cafeteria Facility" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A functional modular structure providing dining and communal space for workforce environments.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/Cafeteria_2.jpg" alt="Cafeteria Facility - 2">
                                <img src="img/projects/australia/Cafeteria_3.jpg" alt="Cafeteria Facility - 3">
                                <img src="img/projects/australia/Cafeteria_4.jpg" alt="Cafeteria Facility - 4">
                                <img src="img/projects/australia/Cafeteria_5.jpg" alt="Cafeteria Facility - 5">
                            </div>
                        </div>

                        <!-- Block 7 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/club_canteen_1.jpg" alt="Canteen Facility" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Canteen Facility</h2>
                                    <p class="text-uppercase mb-5">Modular Food Service Unit</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>Designed for efficient food service operations within remote or temporary sites.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/club_canteen_2.jpg" alt="Canteen Facility" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/club_canteen_3.jpg" alt="Canteen Facility - 3">
                                <img src="img/projects/australia/club_canteen_4.jpg" alt="Canteen Facility - 4">
                            </div>
                        </div>

                        <!-- Block 8 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Portable Washrooms</h2>
                                    <p class="text-uppercase mb-5">Sanitation Units</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">Prefabricated modular washroom facilities designed for hygiene, durability, and ease of deployment.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/australia/tamborine_7.jpg" alt="Portable Washrooms" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/tamborine_1.jpg" alt="Portable Washrooms - 1">
                                <!-- <img src="img/projects/australia/tamborine_1-1.jpg" alt="Portable Washrooms - 1-1"> -->
                                <img src="img/projects/australia/tamborine_2.jpg" alt="Portable Washrooms - 2">
                                <!-- <img src="img/projects/australia/tamborine_2-1.jpg" alt="Portable Washrooms - 2-1">    -->
                                <img src="img/projects/australia/tamborine_3.jpg" alt="Portable Washrooms - 3">
                                <img src="img/projects/australia/tamborine_4.jpg" alt="Portable Washrooms - 4">
                                <img src="img/projects/australia/tamborine_5.jpg" alt="Portable Washrooms - 5">
                                <img src="img/projects/australia/tamborine_6.jpg" alt="Portable Washrooms - 6">
                                <img src="img/projects/australia/tamborine_8.jpg" alt="Portable Washrooms - 8">
                                <img src="img/projects/australia/tamborine_9.jpg" alt="Portable Washrooms - 9">
                                <img src="img/projects/australia/tamborine_10.jpg" alt="Portable Washrooms - 10">
                            </div>
                        </div>

                        <!-- Block 9 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Laundry Facilities</h2>
                                    <p class="text-uppercase mb-5">Modular Utility Units</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>Supporting infrastructure units designed for operational convenience in workforce environments.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/moranbah_camp_7.jpg" alt="Laundry Facilities" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/moranbah_camp_8.jpg" alt="Laundry Facilities - 2" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/moranbah_camp_9.jpg" alt="Laundry Facilities - 3">
                            </div>
                        </div>

                        <!-- Block 10 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Warwick Farm Structure</h2>
                                    <p class="text-uppercase mb-5">Agricultural Modular Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/australia/warwick_farm_1.jpg" alt="Warwick Farm Structure" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A modular building solution applied within a farm setting, demonstrating system adaptability beyond residential and commercial use.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/warwick_farm_2.jpg" alt="Warwick Farm Structure - 2">
                                <img src="img/projects/australia/warwick_farm_3.jpg" alt="Warwick Farm Structure - 3">
                                <img src="img/projects/australia/warwick_farm_4.jpg" alt="Warwick Farm Structure - 4">
                                <img src="img/projects/australia/warwick_farm_5.jpg" alt="Warwick Farm Structure - 5">
                                <img src="img/projects/australia/warwick_farm_6.jpg" alt="Warwick Farm Structure - 6">
                            </div>
                        </div>

                        <!-- Coomera Project -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/coomera_1.jpg" alt="Coomera Project" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Coomera Project</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modular kit home built from pre-engineered Luxwood components for fast assembly and dependable everyday living.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/coomera_2.jpg" alt="Coomera Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/coomera_3.jpg" alt="Coomera Project - 3">
                                <img src="img/projects/australia/coomera_4.jpg" alt="Coomera Project - 4">
                                <img src="img/projects/australia/coomera_5.jpg" alt="Coomera Project - 5">
                                <img src="img/projects/australia/coomera_6.jpg" alt="Coomera Project - 6">
                            </div>
                        </div>

                        <!-- Drift House -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Drift House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A contemporary kit home designed for comfortable living, combining quick installation with durable Luxwood construction.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/australia/drift_house_1.jpg" alt="Drift House" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/drift_house_2.jpg" alt="Drift House - 2">
                                <img src="img/projects/australia/drift_house_3.jpg" alt="Drift House - 3">
                                <img src="img/projects/australia/drift_house_4.jpg" alt="Drift House - 4">
                                <img src="img/projects/australia/drift_house_5.jpg" alt="Drift House - 5">
                            </div>
                        </div>

                        <!-- Goonellabah Project -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Goonellabah Project</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A residential home delivered with the Luxwood panel system, balancing efficient construction with lasting performance.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/goonellabah_1.jpg" alt="Goonellabah Project" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/goonellabah_2.jpg" alt="Goonellabah Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/goonellabah_3.jpg" alt="Goonellabah Project - 3">
                                <img src="img/projects/australia/goonellabah_4.jpg" alt="Goonellabah Project - 4">
                                <img src="img/projects/australia/goonellabah_5.jpg" alt="Goonellabah Project - 5">
                                <img src="img/projects/australia/goonellabah_6.jpg" alt="Goonellabah Project - 6">
                                <img src="img/projects/australia/goonellabah_7.jpg" alt="Goonellabah Project - 7">
                            </div>
                        </div>

                        <!-- Granview House -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Granview House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/australia/granview_house_1.jpg" alt="Granview House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A residential home built with pre-engineered Luxwood components, designed for comfort, durability, and efficient construction.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/granview_house_2.jpg" alt="Granview House - 2">
                                <img src="img/projects/australia/granview_house_3.jpg" alt="Granview House - 3">
                                <img src="img/projects/australia/granview_house_4.jpg" alt="Granview House - 4">
                                <img src="img/projects/australia/granview_house_5.jpg" alt="Granview House - 5">
                                <img src="img/projects/australia/granview_house_6.jpg" alt="Granview House - 6">
                            </div>
                        </div>

                        <!-- Helidon Project -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/helidon_1.jpg" alt="Helidon Project" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Helidon Project</h2>
                                    <p class="text-uppercase mb-5">Modular Building Units</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>Prefabricated modular building units engineered for rapid deployment and adaptable use across a range of site requirements.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/helidon_2.jpg" alt="Helidon Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/helidon_3.jpg" alt="Helidon Project - 3">
                                <img src="img/projects/australia/helidon_4.jpg" alt="Helidon Project - 4">
                                <img src="img/projects/australia/helidon_5.jpg" alt="Helidon Project - 5">
                            </div>
                        </div>

                        <!-- Heron House -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Heron House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A residential home that pairs a practical layout with the speed and consistency of factory-prepared Luxwood components.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/australia/heron_house_1.jpg" alt="Heron House" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/heron_house_2.jpg" alt="Heron House - 2">
                                <img src="img/projects/australia/heron_house_3.jpg" alt="Heron House - 3">
                            </div>
                        </div>

                        <!-- Kimberley College -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Kimberley College</h2>
                                    <p class="text-uppercase mb-5">Modular Amenities</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>Purpose-built facilities supporting an educational campus, delivered efficiently with minimal disruption to daily activity.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/kimberley_college_1.jpg" alt="Kimberley College" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/kimberley_college_2.jpg" alt="Kimberley College" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/kimberley_college_3.jpg" alt="Kimberley College - 3">
                                <img src="img/projects/australia/kimberley_college_4.jpg" alt="Kimberley College - 4">
                            </div>
                        </div>

                        <!-- Nerang House -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Nerang House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/australia/nerang_house_1.jpg" alt="Nerang House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A residential home designed for efficient construction, using durable Luxwood materials suited to long-term living.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/nerang_house_2.jpg" alt="Nerang House - 2">
                                <img src="img/projects/australia/nerang_house_3.jpg" alt="Nerang House - 3">
                                <img src="img/projects/australia/nerang_house_4.jpg" alt="Nerang House - 4">
                            </div>
                        </div>

                        <!-- Sydney Project -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/australia/sydney_2.jpg" alt="Sydney Project" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Sydney Project</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modular kit home built from pre-engineered Luxwood components, offering fast installation and dependable long-term performance.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/australia/sydney_1.jpg" alt="Sydney Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/australia/sydney_3.jpg" alt="Sydney Project - 3">
                                <img src="img/projects/australia/sydney_4.jpg" alt="Sydney Project - 4">
                                <img src="img/projects/australia/sydney_5.jpg" alt="Sydney Project - 5">
                                <img src="img/projects/australia/sydney_6.jpg" alt="Sydney Project - 6">
                            </div>
                        </div>

                        <!-- Block 11 -->
                        <!-- <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="" alt="Zambia House" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Zambia House</h2>
                                    <p class="text-uppercase mb-5">2-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modular home built using Luxwood panels, combining structural performance with efficient construction methods.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="" alt="Zambia House" class="img-fluid w-100">
                                </div>
                            </div>
                        </div> -->

                        <!-- Block 12 -->
                        <!-- <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Beijing House</h2>
                                    <p class="text-uppercase mb-5">1-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A compact modular housing solution demonstrating adaptability within urban environments.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="" alt="Beijing House" class="img-fluid w-100">
                                </div>
                            </div>
                        </div> -->

                        <!-- Block 13 -->
                        <div class="projects-block" data-country="south-africa" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Theodor Herzl School</h2>
                                    <p class="text-uppercase mb-5">Educational Facility | 100+ Students</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modular school development designed to accommodate over 100 students, showcasing the scalability and reliability of the Luxwood system in community infrastructure.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/africa/theodor_herzl_school_1.jpg" alt="Theodor Herzl School" class="projects-feature-media-img">
                                </div>
                                <div class="projects-gallery-images d-none">
                                    <img src="img/projects/africa/theodor_herzl_school_3.jpg" alt="Theodor Herzl School - 3">
                                    <img src="img/projects/africa/theodor_herzl_school_4.jpg" alt="Theodor Herzl School - 4">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/africa/theodor_herzl_school_2.jpg" alt="Theodor Herzl School" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 14 -->
                        <div class="projects-block" data-country="south-africa" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Cornubia House</h2>
                                    <p class="text-uppercase mb-5">2-Level | 3-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/africa/cornubia.jpg" alt="Cornubia House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A multi-level residential project demonstrating structural strength and architectural flexibility.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Congo Project -->
                        <div class="projects-block" data-country="congo" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/africa/congo_1.jpg" alt="Congo Project" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Congo Project</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A residential home built for demanding climates, using durable, moisture-resistant Luxwood panels.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/africa/congo_2.jpg" alt="Congo Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/africa/congo_3.jpg" alt="Congo Project - 3">
                            </div>
                        </div>

                        <!-- Kenya Project -->
                        <div class="projects-block" data-country="kenya" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Kenya Project</h2>
                                    <p class="text-uppercase mb-5">Commercial Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A modular commercial facility demonstrating the speed and flexibility of the Luxwood system for business use.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/africa/kenya_1.jpg" alt="Kenya Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/africa/kenya_2.jpg" alt="Kenya Project - 2">
                                <img src="img/projects/africa/kenya_3.jpg" alt="Kenya Project - 3">
                            </div>
                        </div>

                        <!-- Liberia Project -->
                        <div class="projects-block" data-country="liberia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Liberia Project</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A residential home delivered with lightweight, moisture- and pest-resistant Luxwood panels suited to demanding climates.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/africa/liberia_1.jpg" alt="Liberia Project" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/africa/liberia_2.jpg" alt="Liberia Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/africa/liberia_3.jpg" alt="Liberia Project - 3">
                                <img src="img/projects/africa/liberia_4.jpg" alt="Liberia Project - 4">
                                <img src="img/projects/africa/liberia_5.jpg" alt="Liberia Project - 5">
                            </div>
                        </div>

                        <!-- Senegal Project -->
                        <div class="projects-block" data-country="senegal" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Senegal Project</h2>
                                    <p class="text-uppercase mb-5">Commercial Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/africa/senegal_1.jpg" alt="Senegal Project" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A commercial facility built for rapid deployment, showing how the Luxwood system adapts to diverse working environments.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/africa/senegal_2.jpg" alt="Senegal Project - 2">
                                <img src="img/projects/africa/senegal_3.jpg" alt="Senegal Project - 3">
                                <img src="img/projects/africa/senegal_4.jpg" alt="Senegal Project - 4">
                                <img src="img/projects/africa/senegal_5.jpg" alt="Senegal Project - 5">
                            </div>
                        </div>

                        <!-- Accommodation Project -->
                        <div class="projects-block" data-country="china" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/china/accomodation_1.jpg" alt="Accommodation Project" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Accommo&shy;dation Project</h2>
                                    <p class="text-uppercase mb-5">Accommodation Units</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>Modular accommodation units designed for rapid installation, consistent build quality, and dependable everyday comfort.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/china/accomodation_2.jpg" alt="Accommodation Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/china/accomodation_3.jpg" alt="Accommodation Project - 3">
                            </div>
                        </div>

                        <!-- Commercial Building -->
                        <div class="projects-block" data-country="china" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Commercial Building</h2>
                                    <p class="text-uppercase mb-5">Commercial Building</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A commercial building showing how the Luxwood system delivers flexible, professional space with efficient construction.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/china/commercial_1.jpg" alt="Commercial Building" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/china/commercial_2.jpg" alt="Commercial Building - 2">
                            </div>
                        </div>

                        <!-- Luxury House -->
                        <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Luxury House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A high-specification home that pairs refined finishes with the structural strength and efficiency of the Luxwood system.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/china/luxury_house_1.jpg" alt="Luxury House" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/china/luxury_house_2.jpg" alt="Luxury House" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/china/luxury_house_3.jpg" alt="Luxury House - 3">
                            </div>
                        </div>

                        <!-- Tuscany House -->
                        <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Tuscany House</h2>
                                    <p class="text-uppercase mb-5">Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/projects/china/tuscany.jpg" alt="Tuscany House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A residential home combining a distinctive architectural style with the strength and efficiency of the Luxwood system.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Public Facility -->
                        <div class="projects-block" data-country="china" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/projects/china/public_1.jpg" alt="Public Facility" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Public Facility</h2>
                                    <p class="text-uppercase mb-5">Community Facility</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A modular community facility built for public use, delivering durable, low-maintenance space with efficient construction.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/projects/china/public_2.jpg" alt="Public Facility" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/china/public_3.jpg" alt="Public Facility - 3">
                                <img src="img/projects/china/public_4.jpg" alt="Public Facility - 4">
                                <img src="img/projects/china/public_5.jpg" alt="Public Facility - 5">
                                <img src="img/projects/china/public_6.jpg" alt="Public Facility - 6">
                            </div>
                        </div>

                        <!-- Victim Relief Project -->
                        <div class="projects-block" data-country="china" data-type="commercial">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Victim Relief Project</h2>
                                    <p class="text-uppercase mb-5">Emergency Relief Housing</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">Emergency relief housing designed for rapid deployment, providing safe and dependable shelter when speed matters most.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/projects/china/victim_relief_project_1.jpg" alt="Victim Relief Project" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/projects/china/victim_relief_project_2.jpg" alt="Victim Relief Project - 2">
                                <img src="img/projects/china/victim_relief_project_3.jpg" alt="Victim Relief Project - 3">
                                <img src="img/projects/china/victim_relief_project_4.jpg" alt="Victim Relief Project - 4">
                            </div>
                        </div>

                        <!-- Block 15 -->
                        <!-- <div class="projects-block" data-country="south-africa" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="" alt="Britannia Bay Residence" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Britannia Bay Residence</h2>
                                    <p class="text-uppercase mb-5">2-Level | 2-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-xxl-5 offset-xxl-5">
                                            <p>A coastal residential development designed to perform in demanding environmental conditions.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="" alt="Britannia Bay Residence" class="img-fluid w-100">
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Impact Section -->
    <section class="global-impact-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="global-impact-content">
                        <h2 class="global-impact-title" data-aos="fade-up" data-aos-duration="1000">A Proven Global Track Record</h2>
                        <p class="global-impact-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">PHE Luxwood systems have been applied across diverse climates and construction environments, consistently delivering performance, efficiency, and reliability.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="global-impact-stats">
                        <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Years of Experience</div>
                        </div>
                        <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="stat-number">22</div>
                            <div class="stat-label">Countries Served</div>
                        </div>
                        <div class="stat-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="stat-number">200+</div>
                            <div class="stat-label">Completed Projects</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Value & Closing Section -->
    <div class="value-closing-row">
        <section class="project-value-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2 class="project-value-title" data-aos="fade-up" data-aos-duration="1000">Trusted Across Projects of Scale</h2>
                        <p class="project-value-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">With current project values exceeding USD $28 million, PHE Luxwood continues to support residential, commercial, and institutional developments with scalable modular solutions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Closing Section -->
        <section class="closing-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2 class="closing-title" data-aos="fade-up" data-aos-duration="1000">From Concept to Completion</h2>
                        <p class="closing-body" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Whether delivering single-unit homes or multi-unit developments, PHE Luxwood provides a complete modular building system designed for efficiency, durability, and adaptability across global markets.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title" data-aos="fade-up" data-aos-duration="1000">Start Your Project with PHE Luxwood</h2>
            <div class="cta-buttons" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <a href="contact.php" class="cta-button cta-button-primary">Contact Us</a>
                <a href="contact.php" class="cta-button cta-button-secondary">Discuss Your Project</a>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div id="gallery-modal" class="gallery-modal">
        <div class="gallery-modal-overlay"></div>
        <div class="gallery-modal-content">
            <button class="gallery-modal-close">&times;</button>

            <div id="main-carousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+1" alt="Gallery Image 1">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+2" alt="Gallery Image 2">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+3" alt="Gallery Image 3">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+4" alt="Gallery Image 4">
                        </li>
                    </ul>
                </div>
            </div>

            <div id="thumbnail-carousel" class="splide mt-3">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+1" alt="Thumbnail 1">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+2" alt="Thumbnail 2">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+3" alt="Thumbnail 3">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+4" alt="Thumbnail 4">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Gallery Modal - Dynamic Image Loading
    document.addEventListener("DOMContentLoaded", () => {
        const galleryModal = document.getElementById("gallery-modal");
        const viewButtons = document.querySelectorAll(".view-gallery-btn");
        const closeButton = document.querySelector(".gallery-modal-close");
        const overlay = document.querySelector(".gallery-modal-overlay");

        if (!galleryModal || viewButtons.length === 0) return;

        let mainSplide, thumbnailSplide;

        // Initialize Splide instances
        function initializeSplide() {
            // Destroy existing instances if they exist
            if (mainSplide) mainSplide.destroy();
            if (thumbnailSplide) thumbnailSplide.destroy();

            // Initialize Main Splide
            mainSplide = new Splide("#main-carousel", {
                type: "fade",
                rewind: true,
                pagination: false,
                arrows: true,
            });

            // Initialize Thumbnail Splide
            thumbnailSplide = new Splide("#thumbnail-carousel", {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                isNavigation: true,
                pagination: false,
                arrows: false,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });

            // Sync carousels
            mainSplide.sync(thumbnailSplide);
            mainSplide.mount();
            thumbnailSplide.mount();
        }

        // Populate gallery with project images
        function populateGallery(projectBlock) {
            // Get all visible images from the project block
            const visibleImages = projectBlock.querySelectorAll("img:not(.d-none img)");

            // Get hidden gallery images if they exist
            const hiddenGalleryContainer = projectBlock.querySelector(".projects-gallery-images");
            const hiddenImages = hiddenGalleryContainer ? hiddenGalleryContainer.querySelectorAll("img") : [];

            // Combine all images
            const allImages = [...visibleImages, ...hiddenImages];

            if (allImages.length === 0) return;

            // Clear existing slides
            const mainList = document.querySelector("#main-carousel .splide__list");
            const thumbList = document.querySelector("#thumbnail-carousel .splide__list");

            mainList.innerHTML = "";
            thumbList.innerHTML = "";

            // Add each image to both carousels
            allImages.forEach((img, index) => {
                const src = img.src;
                const alt = img.alt || `Gallery Image ${index + 1}`;

                // Main carousel slide
                const mainSlide = document.createElement("li");
                mainSlide.className = "splide__slide";
                mainSlide.innerHTML = `<img src="${src}" alt="${alt}">`;
                mainList.appendChild(mainSlide);

                // Thumbnail carousel slide
                const thumbSlide = document.createElement("li");
                thumbSlide.className = "splide__slide";
                thumbSlide.innerHTML = `<img src="${src}" alt="Thumbnail - ${alt}">`;
                thumbList.appendChild(thumbSlide);
            });

            // Reinitialize Splide with new slides
            initializeSplide();
        }

        // Open modal and populate with project images
        viewButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                // Get the parent project block
                const projectBlock = btn.closest(".projects-block");

                if (projectBlock) {
                    populateGallery(projectBlock);
                }

                galleryModal.classList.add("active");
                document.body.style.overflow = "hidden";
            });
        });

        // Close modal
        const closeModal = () => {
            galleryModal.classList.remove("active");
            document.body.style.overflow = "";
        };

        closeButton.addEventListener("click", closeModal);
        overlay.addEventListener("click", closeModal);

        // Close on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && galleryModal.classList.contains("active")) {
                closeModal();
            }
        });

        // Initialize on page load (with placeholder images)
        initializeSplide();
    });

    // Projects Filter
    (function() {
        const form = document.querySelector('.projects-filter-form');
        if (!form) return;

        const blocks = document.querySelectorAll('.projects-block');
        const emptyMsg = form.querySelector('.projects-filter-empty');

        function getSelected(name) {
            return Array.from(form.querySelectorAll('input[data-filter="' + name + '"]:checked'))
                .map(input => input.value);
        }

        function applyFilters() {
            const countries = getSelected('country');
            const types = getSelected('type');
            let visibleCount = 0;

            blocks.forEach(block => {
                const country = block.dataset.country;
                const type = block.dataset.type;
                const matchCountry = countries.length === 0 || countries.includes(country);
                const matchType = types.length === 0 || types.includes(type);
                const show = matchCountry && matchType;

                block.classList.toggle('d-none', !show);
                if (show) visibleCount++;
            });

            if (emptyMsg) {
                emptyMsg.classList.toggle('d-none', visibleCount > 0);
            }

            // Hiding/showing blocks changes the page height, so the fade-up
            // triggers measured at load are stale and never fire. Re-measure.
            // (ScrollTrigger is undefined on the initial call: script.js loads later.)
            if (typeof ScrollTrigger !== 'undefined') {
                ScrollTrigger.refresh();
            }
        }

        form.addEventListener('change', function(e) {
            if (e.target.matches('.projects-filter-input')) {
                applyFilters();
            }
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            applyFilters();
        });

        applyFilters();
    })();
</script>

<?php include 'inc/footer.php'; ?>