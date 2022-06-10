<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="millyon millyon--home">
    <section class="homeHeader">
        <div class="homeHeader__slider">
            <div class="slide" style="background-image: url(<?php echo get_template_directory_uri() . '/images/sliderImage.png'; ?>);">
                <div class="slide__wrap container">
                    <div class="title">
                        <h2><span>Poznaj</span> nasze inwestycje</h2>
                    </div>
                    <div class="content">
                        <div class="content__wrap">
                            <h2 class="name">Aura Ursynów</h2>
                            <p><span>Warszawa</span> ul. Kurantów</p>
                            <a href="#" class="btn"><span>Zobacz</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(<?php echo get_template_directory_uri() . '/images/sliderImage.png'; ?>);">
                <div class="slide__wrap container">
                    <div class="title">
                        <h2><span>Poznaj</span> nasze inwestycje</h2>
                    </div>
                    <div class="content">
                        <div class="content__wrap">
                            <h2 class="name">Aura Ursynów</h2>
                            <p><span>Warszawa</span> ul. Kurantów</p>
                            <a href="#" class="btn"><span>Zobacz</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="backgroundWrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homeBackground_01.png'; ?>');">
        <section class="homeAbout">
            <div class="homeAbout__wrap container">
                <div class="homeAbout__content">
                    <h2>O nas</h2>
                    <div class="content">
                        <?php echo get_field('homeAbout_content'); ?>
                    </div>
                    <a href="#" class="btn"><span>Dowiedz się więcej</span></a>
                </div>
                <div class="homeAbout__image">
                    <div class="image">
                        <img src="<?php echo get_field('homeAbout_image')['url']; ?>" alt="<?php echo get_field('homeAbout_image')['alt']; ?>"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="homeAbout homeAbout--reverse">
            <div class="homeAbout__wrap container">
                <div class="homeAbout__content">
                    <h2>Działamy z najlepszymi</h2>
                    <div class="content">
                        <?php echo get_field('homeAbout02_content'); ?>
                    </div>
                </div>
                <div class="homeAbout__image">
                    <div class="image">
                        <img src="<?php echo get_field('homeAbout02_image')['url']; ?>" alt="<?php echo get_field('homeAbout02_image')['alt']; ?>"/>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>