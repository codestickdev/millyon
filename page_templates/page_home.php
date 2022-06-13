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
        <section class="homeInfo">
            <div class="homeInfo__wrap container">
                <div class="homeInfo__heading">
                    <h2><span>Mill-yon</span>w liczbach</h2>
                </div>
                <div class="homeInfo__list">
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_01.svg'; ?>"/>
                        </div>
                        <h3>16 lat</h3>
                        <p>na polskim rynku</p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_02.svg'; ?>"/>
                        </div>
                        <h3>3967</h3>
                        <p>sprzedanych mieszkań</p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_03.svg'; ?>"/>
                        </div>
                        <h3>21</h3>
                        <p>zrealizowanych inwestycji</p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_04.svg'; ?>"/>
                        </div>
                        <h3>239 000 m²</h3>
                        <p>powierzchni inwestycji</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="homeRealizations">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2>W sprzedaży</h2>
            </div>
            <div class="homeRealizations__content">
                <div class="content">
                    <div class="content__slide">
                        <h3 class="name">Aura40</h3>
                        <h4 class="localization">Gdańsk | Śródmieście</h4>
                        <div class="desc">
                            <p>Lokalizacja tuż przy historycznym centrum miasta w cichej, zielonej okolicy, zapewnia fantastyczne warunki niezależnie od tego czy chcesz tu zamieszkać z rodziną czy zainwestować w apartament na wynajem.</p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                    <div class="content__slide">
                        <h3 class="name">Aura40</h3>
                        <h4 class="localization">Gdańsk | Śródmieście</h4>
                        <div class="desc">
                            <p>Lokalizacja tuż przy historycznym centrum miasta w cichej, zielonej okolicy, zapewnia fantastyczne warunki niezależnie od tego czy chcesz tu zamieszkać z rodziną czy zainwestować w apartament na wynajem.</p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                </div>
                <div class="images">
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_01.png'; ?>"/>
                    </div>
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_01.png'; ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homeRealizations homeRealizations--white">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2>W przygotowaniu</h2>
            </div>
            <div class="homeRealizations__content">
                <div class="content">
                    <div class="content__slide">
                        <h3 class="name">Aura Nova</h3>
                        <h4 class="localization">Ożarów Mazowiecki</h4>
                        <div class="desc">
                            <p>Aura Nova to wyjątkowa inwestycja zlokalizowana w doskonale skomunikowanej z Warszawą, spokojnej części Ożarowa Mazowieckiego. Znajdziesz tutaj wszystko, czego potrzebujesz do wygodnego życia.</p>
                            <p>Kameralna, niska zabudowa, funkcjonalne mieszkania, bliskość usług, terenów zielonych oraz rekreacyjnych, a także wygodny dostęp do stolicy – to wszystko masz na wyciągnięcie ręki. </p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                    <div class="content__slide">
                        <h3 class="name">Aura Nova</h3>
                        <h4 class="localization">Ożarów Mazowiecki</h4>
                        <div class="desc">
                            <p>Aura Nova to wyjątkowa inwestycja zlokalizowana w doskonale skomunikowanej z Warszawą, spokojnej części Ożarowa Mazowieckiego. Znajdziesz tutaj wszystko, czego potrzebujesz do wygodnego życia.</p>
                            <p>Kameralna, niska zabudowa, funkcjonalne mieszkania, bliskość usług, terenów zielonych oraz rekreacyjnych, a także wygodny dostęp do stolicy – to wszystko masz na wyciągnięcie ręki. </p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                </div>
                <div class="images">
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_01.png'; ?>"/>
                    </div>
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_01.png'; ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homeRealizations">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2>Zakończone</h2>
            </div>
            <div class="homeRealizations__content">
                <div class="content">
                    <div class="content__slide">
                        <h3 class="name">Aura Park</h3>
                        <h4 class="localization">Warszawa | Wilanów</h4>
                        <div class="desc">
                            <p>Lokalizacja tuż przy historycznym centrum miasta w cichej, zielonej okolicy, zapewnia fantastyczne warunki niezależnie od tego czy chcesz tu zamieszkać z rodziną czy zainwestować w apartament na wynajem.</p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                    <div class="content__slide">
                        <h3 class="name">Aura Park</h3>
                        <h4 class="localization">Warszawa | Wilanów</h4>
                        <div class="desc">
                            <p>Lokalizacja tuż przy historycznym centrum miasta w cichej, zielonej okolicy, zapewnia fantastyczne warunki niezależnie od tego czy chcesz tu zamieszkać z rodziną czy zainwestować w apartament na wynajem.</p>
                        </div>
                        <div class="actions">
                            <a href="#" class="btn"><span>Strona inwestycji</span></a>
                            <a href="#" class="btn video"><span>Zobacz film</span></a>
                        </div>
                    </div>
                </div>
                <div class="images">
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_03.png'; ?>"/>
                    </div>
                    <div class="images__image">
                        <img src="<?php echo get_template_directory_uri() . '/images/realization_03.png'; ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>