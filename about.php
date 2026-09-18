<?php
$page_title = "About Us";
$meta_description = "Learn more about PHE Luxwood and our leadership team.";

include 'inc/header.php';
?>
<link rel="stylesheet" href="css/about.css">

<main class="about-page">

    <!-- Hero -->
    <section class="home-hero-section">
        <div class="hero-section-bg hero-section-bg-overlay">
            <img src="img/about/banner_about.jpg" alt="PHE Hero" class="hero-section-bg-img">
        </div>

        <div class="building-system-hero-section-wrap">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-9">
                        <h2 class="mb-0">ABOUT US</h2>
                    </div>
                    <div class="col-lg-3">
                        <h6>Get to know the people and purpose behind Luxwood's modular building systems.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsible Living -->
    <section class="responsible-living-section py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h3
                        data-gsap="fade-up"
                        class="section-title">
                        More than just houses
                    </h3>
                </div>
                <div class="col-lg-7">
                    <div
                        class="responsible-living-content"
                        data-gsap="fade-up">
                        <p>
                            Our goal at Luxwood is to bring more than just
                            houses to people, instilling a sense of security,
                            comfort and peacefulness that we believe every
                            human being deserves — leaving a lasting impact
                            and legacy in the construction industry.
                        </p>
                        <p>
                            Luxwood Global is an Australian-based engineering
                            company specialising in the manufacture and
                            distribution of Composite Polymer Extruded Panels,
                            produced in a state-of-the-art facility in China
                            using world-class extrusion techniques. We are
                            constantly striving to improve our products and
                            undergo extensive testing to ensure their quality.
                        </p>
                    </div>
                </div>
            </div>

            <div class="certifications-grid">
                <div
                    class="certification-item"
                    data-gsap="fade-up">
                    <img
                        src="img/about/certification_1.jpg"
                        alt="Certificate">
                </div>
                <div
                    class="certification-item"
                    data-gsap="fade-up"
                    data-aos-delay="150">
                    <img
                        src="img/about/certification_2.jpg"
                        alt="Certificate">
                </div>
                <div
                    class="certification-item"
                    data-gsap="fade-up"
                    data-aos-delay="300">
                    <img
                        src="img/about/certification_3.jpg"
                        alt="Certificate">
                </div>
            </div>
        </div>
    </section>

    <!-- Quote -->
    <section class="about-quote-section">
        <div class="container">
            <div class="quote-wrap">

                <div id="quote-carousel" class="splide quote-carousel">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide">
                                <blockquote class="about-quote">
                                    “I had the privilege of working alongside
                                    this company and delivering housing solutions
                                    in Australia and overseas. I can highly
                                    recommend this product if you are looking for
                                    a sound alternative building solution.”
                                </blockquote>

                                <div class="quote-author">
                                    <strong>Jacques De Bedout</strong>
                                    <span>Design Manager</span>
                                    <span>IBSI - Intelligent Building Systems International</span>
                                </div>
                            </li>

                            <li class="splide__slide">
                                <blockquote class="about-quote">
                                    “I have had the pleasure of working with this
                                    company in Africa on a subsidized project for
                                    the Municipality. In trying circumstances and
                                    with mostly unskilled local labour, their
                                    level of this company’s professionalism has
                                    been exceptional, moreover their practical and
                                    hands on approach meant that everyone involved
                                    in the build of the house was fully committed
                                    and engaged. First to arrive on site and last
                                    to leave, no issue too big and willing to
                                    overcome any problem there and then. Highly
                                    recommended.”
                                </blockquote>

                                <div class="quote-author">
                                    <strong>Francois Bruyns</strong>
                                    <span>Director</span>
                                    <span>IBSI - the African subsidiary of ISBI</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="luxwood-family-section py-120">
        <div class="container">
            <div class="family-header">
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <h2 class="family-title">
                            THE LUXWOOD FAMILY
                        </h2>
                    </div>
                </div>

                <div class="family-tabs">
                    <button
                        class="family-tab active"
                        data-target="core-members">
                        Core Members
                    </button>
                    <button
                        class="family-tab"
                        data-target="stakeholders">
                        Luxwood Stakeholders
                    </button>
                    <button
                        class="family-tab"
                        data-target="facilitators">
                        Luxwood Facilitators
                    </button>
                </div>
            </div>

            <!-- Core Members -->
            <div
                class="family-panel active"
                id="core-members">

                <div class="team-grid">

                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-core-1.jpg" alt="Mark">
                        </div>
                        <div class="team-card-content">
                            <h4>MARK</h4>
                            <span>Director / Owner</span>
                            <p>
                                Mark is the owner and creator of the whole
                                operation. With over 20 years of experience,
                                there is very little Mark cannot do.
                            </p>
                        </div>
                    </div>

                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-core-2.jpg" alt="Claire">
                        </div>
                        <div class="team-card-content">
                            <h4>CLAIRE</h4>
                            <span>Manager</span>
                            <p>
                                Claire is hard-working, dedicated and kind;
                                the glue that keeps our Cape Town branch
                                going.
                            </p>
                        </div>
                    </div>

                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-core-3.jpg" alt="Annie">
                        </div>
                        <div class="team-card-content">
                            <h4>ANNIE</h4>
                            <span>General Manager</span>
                            <p>
                                Annie is an enthusiastic, diligent woman who
                                keeps our China factory together.
                            </p>
                        </div>
                    </div>

                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-core-4.jpg" alt="Petra">
                        </div>
                        <div class="team-card-content">
                            <h4>PETRA</h4>
                            <span>General Manager</span>
                            <p>
                                Petra is an enterprising, dedicated woman
                                with many years of international experience.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <!-- Stakeholders -->
            <div
                class="family-panel"
                id="stakeholders">
                <div class="team-grid">
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-stakeholder-1.jpg" alt="Chong">
                        </div>
                        <div class="team-card-content">
                            <h4>CHONG</h4>
                            <p>
                                Chong currently sits on the board of Trust
                                Waikato and is quite active in the local
                                community. Chong is the main facilitator in
                                New Zealand for Luxwood Homes.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-stakeholder-2.jpg" alt="Pieter">
                        </div>
                        <div class="team-card-content">
                            <h4>PIETER</h4>
                            <p>
                                Pieter is chairman of the Law Alliance NZ
                                (LANZ), with member firms located throughout
                                New Zealand providing specialist legal
                                services in almost every aspect of the law.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Facilitators -->
            <div
                class="family-panel"
                id="facilitators">
                <div class="team-grid">
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-1.jpg" alt="Amber-Leigh">
                        </div>
                        <div class="team-card-content">
                            <h4>AMBER-LEIGH</h4>
                            <p>
                                Amber-Leigh&rsquo;s big smile is probably the
                                first thing you will see walking through our
                                door, and with her enthusiastic nature she
                                handles our web development.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-2.jpg" alt="Mokhele">
                        </div>
                        <div class="team-card-content">
                            <h4>MOKHELE</h4>
                            <p>
                                Mokhele is a passionate, tireless
                                perfectionist with a great eye for detail
                                and is always ready for any task he may
                                encounter.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-3.jpg" alt="Michael">
                        </div>
                        <div class="team-card-content">
                            <h4>MICHAEL</h4>
                            <p>
                                Michael is a dedicated, optimistic young man,
                                whose forklift driving skills leave us in
                                awe.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-4.jpg" alt="Guy">
                        </div>
                        <div class="team-card-content">
                            <h4>GUY</h4>
                            <p>
                                Guy is a member of our Luxwood USA Advisory
                                Board. He holds many years of international
                                experience in leading large organizations.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-5.jpg" alt="Jody">
                        </div>
                        <div class="team-card-content">
                            <h4>JODY</h4>
                            <p>
                                Jody is an intuitive, hard-working young lady
                                who we are proud to say is one of our
                                technologists. She attained her National
                                Diploma through the Cape Peninsula University
                                of Technology.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-6.jpg" alt="Nicholas">
                        </div>
                        <div class="team-card-content">
                            <h4>NICHOLAS</h4>
                            <p>
                                Nicholas is our local engineer. He studied
                                Civil Engineering and has a wide range of
                                experience. We are proud to say that he is
                                part of the Luxwood family.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-7.jpg" alt="Graeme">
                        </div>
                        <div class="team-card-content">
                            <h4>GRAEME</h4>
                            <p>
                                Graeme is a certified APEC member. He is our
                                global engineer and attained his Bachelor of
                                Engineering at the NSW Institute of
                                Technology.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-8.jpg" alt="John">
                        </div>
                        <div class="team-card-content">
                            <h4>JOHN</h4>
                            <p>
                                John works with the Luxwood team in a sales
                                capacity. He has a wealth of experience
                                working with college campuses, hospitals and
                                B&amp;I.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-9.jpg" alt="Amy">
                        </div>
                        <div class="team-card-content">
                            <h4>AMY</h4>
                            <p>
                                Amy is an innovative, diligent and
                                enthusiastic young lady who we are proud to
                                say is one of our architectural draughtsmen.
                                She has attained years of invaluable
                                experience in the area.
                            </p>
                        </div>
                    </div>
                    <div class="team-card featured">
                        <div class="team-card-image">
                            <img src="img/about/family-facilitator-10.jpg" alt="Paul">
                        </div>
                        <div class="team-card-content">
                            <h4>PAUL</h4>
                            <p>
                                With an education in Computer Science,
                                Business Administration and Project
                                Management, Paul&rsquo;s entrepreneurial
                                vision founded Intelli Group, a diversified
                                international business with global partners.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Banner -->
</main>

<?php include 'inc/footer.php'; ?>