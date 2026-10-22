<?php
/**
 * Template Name: Student Voices
 */
get_header();

$video_id = '4meaWuZqOaQ';

// file = name inside hana_theme/images/, group = students or teachers
$photos = array(
    array( 'file' => 'about-certificates.png', 'caption' => 'Certificate day at our Hyderabad center', 'group' => 'students' ),
    array( 'file' => 'classroom-1.jpg',        'caption' => 'Learning together in class',              'group' => 'students' ),
    array( 'file' => 'classroom-2.jpg',        'caption' => 'Classroom session',                       'group' => 'students' ),
    array( 'file' => 'classroom-3.jpg',        'caption' => 'Practice with our sensei',                'group' => 'teachers' ),
    array( 'file' => 'bilingual-support.jpg',  'caption' => 'Bilingual support, every step',           'group' => 'teachers' ),
    array( 'file' => 'vision-2030.jpg',        'caption' => 'The Hana family',                         'group' => 'students' ),
);
?>

<section class="page-hero">
    <div class="container">
        <h1>Student Life</h1>
        <p>Real stories from students who have walked this path with us.</p>
    </div>
</section>

<section class="vg-section">
    <div class="container">

        <!-- VIDEO + TEXT -->
        <div class="vg-feature">
            <button type="button" class="vg-video reveal" data-video="<?php echo esc_attr( $video_id ); ?>" aria-label="Play student story video">
                <img src="https://i.ytimg.com/vi/<?php echo rawurlencode( $video_id ); ?>/hqdefault.jpg" alt="" loading="lazy">
                <span class="vg-play" aria-hidden="true">▶</span>
            </button>

            <div class="vg-feature__text reveal">
                <p class="about-hana__label">In their words</p>
                <h2>Watch our students' story</h2>
                <p>Every student arrives at Hana Global Edutech with a dream of building a life and career in Japan. Here is how we turn that vision into a clear, structured reality:</p>
                <p>Guided by our bilingual specialists, every candidate receives personalized, step-by-step mentorship from enrollment to employment.</p>
            </div>
        </div>


        <!-- GALLERY -->
        <h2 class="vg-title reveal">Moments at Hana</h2>
        <p class="vg-lead reveal">Classrooms, certificates and celebrations, shared by the people who make Hana what it is.</p>

        <div class="vg-filters reveal">
            <button type="button" class="vg-chip is-active" data-filter="all">All</button>
            <button type="button" class="vg-chip" data-filter="students">Students</button>
            <button type="button" class="vg-chip" data-filter="teachers">Teachers</button>
        </div>

        <div class="vg-masonry">
            <?php foreach ( $photos as $p ) :
                $src = get_template_directory_uri() . '/images/' . $p['file']; ?>
                <figure class="vg-photo" data-group="<?php echo esc_attr( $p['group'] ); ?>">
                    <button type="button" data-photo="<?php echo esc_url( $src ); ?>" data-caption="<?php echo esc_attr( $p['caption'] ); ?>" aria-label="View photo: <?php echo esc_attr( $p['caption'] ); ?>">
                        <img src="<?php echo esc_url( $src ); ?>" alt="<?php echo esc_attr( $p['caption'] ); ?>" loading="lazy">
                        <figcaption><?php echo esc_html( $p['caption'] ); ?></figcaption>
                    </button>
                </figure>
            <?php endforeach; ?>
        </div>

        

    </div>
</section>

<!-- POP-UP -->
<div class="vg-modal" id="vgModal" hidden>
    <button type="button" class="vg-modal__close" aria-label="Close">×</button>
    <button type="button" class="vg-modal__nav vg-modal__nav--prev" aria-label="Previous photo">‹</button>
    <button type="button" class="vg-modal__nav vg-modal__nav--next" aria-label="Next photo">›</button>
    <div class="vg-modal__box" id="vgBox"></div>
    <p class="vg-modal__cap" id="vgCap"></p>
</div>

<script>
(function () {
    var modal = document.getElementById('vgModal');
    var box = document.getElementById('vgBox');
    var cap = document.getElementById('vgCap');
    var prev = modal.querySelector('.vg-modal__nav--prev');
    var next = modal.querySelector('.vg-modal__nav--next');
    var list = [], idx = 0;

    function lock(on) { document.body.style.overflow = on ? 'hidden' : ''; }
    function close() { modal.hidden = true; box.innerHTML = ''; cap.textContent = ''; lock(false); }
    function show(i) {
        idx = (i + list.length) % list.length;
        var b = list[idx];
        box.innerHTML = '';
        var img = document.createElement('img');
        img.src = b.getAttribute('data-photo');
        img.alt = b.getAttribute('data-caption') || '';
        box.appendChild(img);
        cap.textContent = b.getAttribute('data-caption') || '';
        prev.style.display = next.style.display = list.length > 1 ? '' : 'none';
        modal.hidden = false; lock(true);
    }

    document.querySelector('.vg-video').addEventListener('click', function () {
        var id = encodeURIComponent(this.getAttribute('data-video'));
        box.innerHTML = '<iframe src="https://www.youtube-nocookie.com/embed/' + id + '?autoplay=1&rel=0" title="Student story" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
        cap.textContent = '';
        prev.style.display = next.style.display = 'none';
        modal.hidden = false; lock(true);
    });

    document.querySelectorAll('[data-photo]').forEach(function (b) {
        b.addEventListener('click', function () {
            list = Array.prototype.filter.call(document.querySelectorAll('[data-photo]'), function (x) {
                return !x.closest('.vg-photo').hidden;
            });
            show(list.indexOf(b));
        });
    });

    prev.addEventListener('click', function () { show(idx - 1); });
    next.addEventListener('click', function () { show(idx + 1); });
    modal.addEventListener('click', function (e) {
        if (e.target === modal || e.target.className === 'vg-modal__close') close();
    });
    document.addEventListener('keydown', function (e) {
        if (modal.hidden) return;
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft' && list.length > 1 && box.querySelector('img')) show(idx - 1);
        if (e.key === 'ArrowRight' && list.length > 1 && box.querySelector('img')) show(idx + 1);
    });

    /* Filters */
    var chips = document.querySelectorAll('.vg-chip');
    chips.forEach(function (c) {
        c.addEventListener('click', function () {
            var f = c.getAttribute('data-filter');
            chips.forEach(function (x) { x.classList.toggle('is-active', x === c); });
            document.querySelectorAll('.vg-photo').forEach(function (p) {
                p.hidden = !(f === 'all' || p.getAttribute('data-group') === f);
            });
        });
    });

    /* Scroll reveal */
    var items = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || !items.length) return;
    document.documentElement.classList.add('reveal-ready');
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
        });
    }, { threshold: 0.12 });
    items.forEach(function (el) { io.observe(el); });
})();
</script>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>