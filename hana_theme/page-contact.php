<?php
/**
 * Template Name: Contact
 */
get_header();

$address = '2nd Floor, Plot no 729, Road No. 36, CBI Colony, Jubilee Hills, Hyderabad, Telangana 500033';
$sent    = isset( $_GET['sent'] ) ? sanitize_text_field( wp_unslash( $_GET['sent'] ) ) : '';
?>

<section class="page-hero">
    <div class="container">
        <h1>Apply Now</h1>
        <p>Take the first step towards your future in Japan. Consultation is completely free.</p>
    </div>
</section>

<!-- QUICK CONTACT STRIP -->
<section class="ct-strip">
    <div class="container">
        <div class="ct-strip__grid">
            <a class="ct-strip__item reveal" style="--d:0s" href="tel:+919967592704">
                <span class="ct-strip__ico">📞</span>
                <span><small>Call us</small><strong>+91-9967592704</strong></span>
            </a>
            <a class="ct-strip__item reveal" style="--d:.12s" href="mailto:hello@hanaglobal-japan.com">
                <span class="ct-strip__ico">✉️</span>
                <span><small>Email us</small><strong>hello@hanaglobal-japan.com</strong></span>
            </a>
            <a class="ct-strip__item reveal" style="--d:.24s" href="https://www.google.com/maps/dir/?api=1&destination=<?php echo rawurlencode( $address ); ?>" target="_blank" rel="noopener noreferrer">
                <span class="ct-strip__ico">📍</span>
                <span><small>Visit us</small><strong>Jubilee Hills, Hyderabad</strong></span>
            </a>
        </div>
    </div>
</section>

<!-- INFO + FORM PANEL -->
<section class="ct-main" id="contact-form">
    <div class="container">
        <div class="ct-panel reveal">
            <span class="ct-panel__petal ct-panel__petal--1" aria-hidden="true">🌸</span>
            <span class="ct-panel__petal ct-panel__petal--2" aria-hidden="true">🌸</span>

            <div class="ct-heading">
                <p class="about-hana__label ct-heading__label">Get in touch</p>
                <h2>We'd Love To Hear From You</h2>
                <p>Contact us for inquiries, support, or more information about our programs.</p>
            </div>

            <div class="ct-split">

                <!-- LEFT: OFFICE DETAILS -->
                <div class="ct-office">
                    <div class="ct-office__head">
                        <span class="ct-office__flag">🇮🇳</span>
                        <div>
                            <h3>Hana Global Edutech</h3>
                            <span>Hyderabad, India</span>
                        </div>
                    </div>

                    <a class="ct-line" href="tel:+919967592704"><span class="ct-line__ico">📞</span>+91-9967592704</a>
                    <a class="ct-line" href="mailto:hello@hanaglobal-japan.com"><span class="ct-line__ico">✉️</span>hello@hanaglobal-japan.com</a>
                    <div class="ct-line"><span class="ct-line__ico">📍</span><span>2nd Floor, Plot no 729, Road No. 36, CBI Colony,<br>Jubilee Hills, Hyderabad, Telangana 500033</span></div>
                    <a class="ct-line" href="https://www.hanaglobaledutech.com" target="_blank" rel="noopener noreferrer"><span class="ct-line__ico">🌐</span>hanaglobaledutech.com</a>

                    <iframe
                        src="https://www.google.com/maps?q=<?php echo rawurlencode( $address ); ?>&output=embed"
                        width="100%" height="210" style="border:0;border-radius:16px;margin-top:10px;"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="<?php esc_attr_e( 'Hana Global Edutech location map', 'hana-theme' ); ?>"></iframe>

                    <?php /* JAPAN OFFICE: remove this comment and fill in if you have one
                    <div class="ct-office__head" style="margin-top:28px;">
                        <span class="ct-office__flag">🇯🇵</span>
                        <div><h3>Name of Japan office</h3><span>Japan</span></div>
                    </div>
                    <a class="ct-line" href="tel:+81XXXXXXXXXX"><span class="ct-line__ico">📞</span>+81 ...</a>
                    <div class="ct-line"><span class="ct-line__ico">📍</span><span>Address in Japan</span></div>
                    */ ?>
                </div>

                <!-- RIGHT: FORM -->
                <div class="ct-form">
                    <?php if ( '1' === $sent ) : ?>
                        <div class="ct-alert ct-alert--ok">Thank you! We received your message and will contact you within 24 hours.</div>
                    <?php elseif ( 'error' === $sent ) : ?>
                        <div class="ct-alert ct-alert--bad">Sorry, something went wrong. Please check every field and try again, or call us.</div>
                    <?php endif; ?>

                    <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" novalidate>
                        <input type="hidden" name="action" value="hana_contact">
                        <?php wp_nonce_field( 'hana_contact', 'hana_contact_nonce' ); ?>

                        <div class="ct-hp" aria-hidden="true">
                            <label>Website <input type="text" name="hana_website" tabindex="-1" autocomplete="off"></label>
                        </div>

                        <label class="ct-field"><span>Full Name</span>
                            <input type="text" name="full_name" placeholder="Name" required></label>

                        <label class="ct-field"><span>Email</span>
                            <input type="email" name="email" placeholder="example@gmail.com" required></label>

                        <label class="ct-field"><span>Phone Number</span>
                            <input type="tel" name="phone" placeholder="+91 9xxxx xxxxx" required></label>

                        <label class="ct-field"><span>I'm interested in</span>
                            <select name="interest">
                                <option>Caregiving (SSW)</option>
                                <option>Construction (SSW)</option>
                                <option>Study in Japan</option>
                                <option>Not sure yet</option>
                            </select></label>

                        <label class="ct-field"><span>Message</span>
                            <textarea name="message" rows="3" placeholder="Enter your message here" required></textarea></label>

                        <button type="submit" class="ct-submit">Send Message →</button>
                        <p class="ct-note">Free consultation. No obligation. We reply within 24 hours.</p>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- WHAT HAPPENS NEXT -->
<section class="ct-next">
    <div class="container">
        <h2 class="ct-next__title reveal">What happens next?</h2>
        <ol class="ct-next__grid">
            <li class="reveal" style="--d:0s"><span>1</span><p><?php esc_html_e( 'We receive your application', 'hana-theme' ); ?></p></li>
            <li class="reveal" style="--d:.1s"><span>2</span><p><?php esc_html_e( 'Our team contacts you within 24 hours', 'hana-theme' ); ?></p></li>
            <li class="reveal" style="--d:.2s"><span>3</span><p><?php esc_html_e( 'Free consultation to discuss your goals', 'hana-theme' ); ?></p></li>
            <li class="reveal" style="--d:.3s"><span>4</span><p><?php esc_html_e( 'Enrollment & program kickoff', 'hana-theme' ); ?></p></li>
            <li class="reveal" style="--d:.4s"><span>5</span><p><?php esc_html_e( 'Begin your journey to Japan', 'hana-theme' ); ?></p></li>
        </ol>
    </div>
</section>

<!-- FAQ -->
<section class="ct-faq">
    <div class="container">
        <p class="about-hana__label ct-eyebrow--c reveal">Questions</p>
        <h2 class="ct-faq__title reveal">Before you apply</h2>

        <div class="ct-faq__list">
            <details class="reveal"><summary>Is the consultation really free?</summary><p>Yes. Consultation with our team is free and comes with no obligation.</p></details>
            <details class="reveal"><summary>How soon will you contact me?</summary><p>Our team contacts you within 24 hours of receiving your application.</p></details>
            <details class="reveal"><summary>Do I need to know Japanese before I apply?</summary><p>No. We train you from the beginning at our Hyderabad center.</p></details>
            <details class="reveal"><summary>Where is your training center?</summary><p><?php echo esc_html( $address ); ?>.</p></details>
        </div>
    </div>
</section>

<script>
(function () {
    var items = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || !items.length) return;
    document.documentElement.classList.add('reveal-ready');
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
        });
    }, { threshold: 0.1 });
    items.forEach(function (el) { io.observe(el); });
})();
</script>

<?php get_template_part( 'template-parts/section', 'cta' ); ?>

<?php get_footer(); ?>