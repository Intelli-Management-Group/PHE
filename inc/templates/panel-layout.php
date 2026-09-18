<?php 
$hotspots = [
    [
        'label' => '',
        'title' => 'Fire & Smoke Retardant',
        'description' => [
            'The flame retardant and smoke preventative additives in the recipe can effectively stop the wall panel being ignited.',
            'Test reports show fire resistance of the wall panel will exceed two hours and non-combustable Grade-A product under EN standards.'
        ],
        'top' => '32%',
        'left' => '32%',
        'direction' => 'left'
    ],
    [
        'label' => '',
        'title' => 'Environmentally Friendly',
        'description' => [
            'The limits of radio-nuclides formaldehyde content in panel forms no hard to health of humans or animals.',
            'The panel is recyclable and can be granulated back into product many years after used and therefore no construction waste has been created.'
        ],
        'top' => '55%',
        'left' => '50%',
        'direction' => 'left'
    ],
    [
        'label' => '',
        'title' => 'Construction Savings',
        'description' => [
            'Wall construction reduces or even eliminates the need of steel structure.',
            'Reduces the need for heavy lifting equipment for construction.',
            'Wall panels can be installed faster, compared to traditional building processes.',
            'Wall construction is 70% – 80% quicker, results in saving of 80% in labor costs.'
        ],
        'top' => '88%',
        'left' => '30%',
        'direction' => 'left'
    ],

    [
        'label' => '',
        'title' => 'Maximizes Internal Space',
        'description' => [
            'The wall has excellent performance and takes up less space than the traditional wall, enlarging the effective internal space.',
            'Overall of 10% space saved in a 12sqm room'
        ],
        'top' => '35%',
        'left' => '72%',
        'direction' => 'right'
    ],
    [
        'label' => '',
        'title' => 'Energy Savings & Heat Prevention',
        'description' => [
            'Wall panel has a 0.3 [W/(m2.K)] heat index',
            'Compared to: Kiln fired hollow bricks or concrete block construction heat index is 0.5 - 0.6[W/(m2.K)]'
        ],
        'top' => '68%',
        'left' => '83%',
        'direction' => 'right'
    ],
    [
        'label' => '',
        'title' => 'Durability & Light Weight',
        'description' => [
            'Wall panels weight less than 60 kg/m2',
            'Each panel (150*450*2800mm) can withstand a 328KN compressed load vertically.',
            'Low self-weight offers quake-proof property and reduces risk in earthquake zones.',
            'Compared to: Kiln fired hollow bricks or concrete block construction is 3 - 4 times the weight of the Wall panels'
        ],
        'top' => '88%',
        'left' => '50%',
        'direction' => 'right'
    ],
];
?>
<!-- HERO -->
<section class="home-hero-section product-banner-animation">
    <div class="hero-section-bg hero-section-bg-overlay product-banner-bg">
        <img src="<?= $product['banner_image']; ?>"
            alt="<?= $product['title']; ?>"
            class="hero-section-bg-img product-banner-img">
    </div>

    <div class="building-system-hero-section-wrap product-banner-content">
        <div class="ms-3 ms-md-5">
            <div class="row align-items-end">
                <div class="">
                    <h2 class="mb-3 mb-md-5 product-banner-title">
                        <?= $product['title']; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="product-intro product-diagram py-4 py-lg-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <?php if(!empty($product['overview_description'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['overview_description']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_features'])): ?>
                    <div class="key-features mt-4 mt-lg-5">
                        <h3 class="mb-4 product-titles">
                            Key Features
                        </h3>
                        <ul class="feature-list-custom">
                            <?php foreach($product['overview_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_note_title'])): ?>
                    <div class="key-features mt-4 mt-lg-5">
                        <h5 class="mb-3 product-titles">
                            <?= $product['overview_note_title']; ?>
                        </h5>
                        <?php if(!empty($product['overview_note_description'])): ?>
                            <p class="product-description mb-0">
                                <?= nl2br($product['overview_note_description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['overview_image']; ?>"
                    alt="<?= $product['title']; ?>"
                    class="product-feature-image">
            </div>
        </div>
    </div>
</section>

<section class="product-hotspot-section">
    <div class="product-hotspot-wrapper">

        <img src="<?= $product['profile_image']; ?>" class="product-main-image">

        <?php foreach($hotspots as $i => $spot): ?>
            <div class="hotspot hotspot-<?= $spot['direction']; ?>"
                style="--hotspot-top:<?= $spot['top']; ?>;--hotspot-left:<?= $spot['left']; ?>;">

                <button type="button" class="hotspot-dot" data-n="<?= $i + 1; ?>"
                    aria-label="Show <?= htmlspecialchars($spot['title']); ?>"></button>

            <div class="hotspot-card">
                <div class="hotspot-header">
                    <div class="hotspot-content">
                        <span class="hotspot-num"><?= $i + 1; ?></span>
                        <span class="hotspot-label">
                            <?= $spot['label']; ?>
                        </span>
                        <h4><?= $spot['title']; ?></h4>
                    </div>
                    <button class="hotspot-toggle">+</button>
                </div>
                <div class="hotspot-body">
                    <div class="hotspot-body-inner">
                        <?php if(is_array($spot['description'])): ?>
                            <ul class="hotspot-list">
                                <?php foreach($spot['description'] as $line): ?>
                                    <li><?= $line; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p><?= $spot['description']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- SECONDARY SECTION -->
<section class="product-intro py-4 py-lg-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                <?php if(!empty($product['secondary_title'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['secondary_title']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['secondary_description'])): ?>
                    <p class="product-description">
                        <?= nl2br($product['secondary_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if(!empty($product['secondary_features'])): ?>
                    <div class="key-features mt-4 mt-lg-5">
                        <h5 class="mb-4 product-titles">
                            Key Features
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['secondary_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['secondary_image']; ?>"
                    alt=""
                    class="product-feature-image">
            </div>
        </div>
    </div>
</section>

<!-- DOORS & WINDOWS -->
<section class="product-intro py-4 py-lg-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['door_window_image']; ?>"
                    alt=""
                    class="product-feature-image">
            </div>
            <div class="col-lg-5">
                 <?php if(!empty($product['door_window_title'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['door_window_title']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['door_features'])): ?>
                    <div class="key-features mb-4">
                        <h5 class="mb-3 product-sub-titles">
                            <?= $product['door_section_title']; ?>
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['door_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['window_features'])): ?>
                    <div class="key-features">
                        <h5 class="mb-3 product-sub-titles">
                            <?= $product['window_section_title']; ?>
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['window_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="product-diagram py-4 py-lg-5">
  <div class="container">
    <div class="diagram-scroll-wrapper">

      <!-- Left: wider portrait block (60%) — sets the section height -->
      <div class="diagram-left">
        <div class="diagram-left-sticky">
          <img
            src="<?= $product['gallery_image_large']; ?>"
            class="diagram-image-large scroll-reveal reveal-left"
            alt="">
        </div>
      </div>

      <!-- Right: narrower portrait block (40%) — drifts down on scroll -->
      <div class="diagram-right">
        <div class="parallax-small-image scroll-reveal reveal-right">
          <img
            src="<?= $product['gallery_image_small']; ?>"
            class="diagram-image-medium"
            alt="">
        </div>
      </div>

    </div>
  </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.product-titles.reveal-line').forEach(el => {
            const raw = el.innerHTML
            .replace(/<div[^>]*>|<\/div>|<span[^>]*>|<\/span>/gi, '')
            .trim();

            const lines = raw
            .split(/<br\s*\/?>/i)
            .map(line => line.trim())
            .filter(Boolean);

            el.innerHTML = lines.map(line => `
            <span class="reveal-line-wrap">
                <span class="reveal-line-inner">${line}</span>
            </span>
            `).join('');

            const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                entry.target
                .querySelectorAll('.reveal-line-inner')
                .forEach((line, index) => {
                    const delay = index === 0 ? 0 : 150 + (index * 120);
                    setTimeout(() => line.classList.add('visible'), delay);
                });
                observer.unobserve(entry.target);
            });
            }, {
            threshold: 0.15,
            rootMargin: '0px 0px -40px 0px'
            });
            observer.observe(el);
        });

        });

    (function () {
        const wrapper    = document.querySelector('.diagram-scroll-wrapper');
        const rightPanel = document.querySelector('.diagram-right');
        const leftBlock  = document.querySelector('.diagram-left-sticky');
        if (!wrapper || !rightPanel || !leftBlock) return;

        // How late the drift finishes, as a share of the viewport height.
        // 0   = done once the section's bottom reaches the viewport bottom
        // 0.5 = keeps drifting for another half screen of scrolling
        // 1   = only bottom-aligns as the section clears the top of the screen
        const LATENESS = 0.5;

        let ticking = false;

        function update() {
            ticking = false;

            // Both images run at their natural height, so the taller left
            // block gives us exactly how far the right one can drift.
            const travel = leftBlock.offsetHeight - rightPanel.offsetHeight;
            if (travel <= 0) {
                rightPanel.style.transform = '';
                return;
            }

            const rect = wrapper.getBoundingClientRect();
            // 0 when the section's top enters the viewport. The span it runs
            // over decides where it ends — widen it to finish later.
            const span     = rect.height + (LATENESS * window.innerHeight);
            const progress = (window.innerHeight - rect.top) / span;
            const clamped  = Math.min(Math.max(progress, 0), 1);

            rightPanel.style.transform = `translate3d(0, ${(clamped * travel).toFixed(2)}px, 0)`;
        }

        function onScroll() {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(update);
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll);
        // Heights are unknown until the portrait images have loaded.
        window.addEventListener('load', update);
        wrapper.querySelectorAll('img').forEach(img => {
            if (!img.complete) img.addEventListener('load', update);
        });

        update();
    })();

    // Both the "+" button and the dot on the image toggle a hotspot card.
    // On small screens the cards stack below the image, so a dot tap also
    // scrolls its card into view.
    document.querySelectorAll('.hotspot-toggle, .hotspot-dot').forEach(btn => {
        btn.addEventListener('click', function () {
            const current = this.closest('.hotspot');
            const wasActive = current.classList.contains('active');

            document.querySelectorAll('.hotspot').forEach(item => {
                item.classList.remove('active');
                const body = item.querySelector('.hotspot-body');
                if (body) body.style.maxHeight = '';
            });

            if (!wasActive) {
                current.classList.add('active');
                const body = current.querySelector('.hotspot-body');
                if (body) body.style.maxHeight = body.scrollHeight + 'px';

                if (this.classList.contains('hotspot-dot')) {
                    const card = current.querySelector('.hotspot-card');
                    if (card) card.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                }
            }
        });
    });

    // The open card's height was measured at the old width; re-measure when
    // the layout changes (rotation, desktop <-> stacked mobile layout).
    window.addEventListener('resize', function () {
        const body = document.querySelector('.hotspot.active .hotspot-body');
        if (body) body.style.maxHeight = body.scrollHeight + 'px';
    });

    document.addEventListener('DOMContentLoaded', function() {
        const bannerBg = document.querySelector('.product-banner-bg');
        function updateParallax() {
            const scrolled = window.pageYOffset;
            bannerBg.style.transform =
                `translate3d(0, ${scrolled * 0.25}px, 0)`;
            requestAnimationFrame(updateParallax);
        }
        requestAnimationFrame(updateParallax);  

        // Scroll reveal (fade + slide in from left/right)
        const revealEls = document.querySelectorAll('.scroll-reveal');
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
            });
        }, { threshold: 0.15 });
        revealEls.forEach(function(el) { observer.observe(el); });

    });
</script>