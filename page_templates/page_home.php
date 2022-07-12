<?php
    /**
     * Template name: Strona główna
     */
get_header(); ?>

<main class="millyon millyon--home">
    <section class="homeHeader">
        <div class="homeHeader__slider">
            <?php while(have_rows('mainSlider')): the_row();
                $image = get_sub_field('mainSlider_image');
                $heading_decorate = get_sub_field('mainSlider_text_decorate');
                $heading_normal = get_sub_field('mainSlider_text_normal');
                $name = get_sub_field('mainSlider_name');
                $city = get_sub_field('mainSlider_city');
                $location = get_sub_field('mainSlider_location');
                $link = get_sub_field('mainSlider_url');
            ?>
            <div class="slide" style="background-image: url(<?php echo $image; ?>);">
                <div class="slide__wrap container">
                    <div class="title">
                        <h2><span><?php echo $heading_decorate ?></span> <?php echo $heading_normal; ?></h2>
                    </div>
                    <div class="content">
                        <div class="content__wrap">
                            <h2 class="name"><?php echo $name; ?></h2>
                            <p><span><?php echo $city; ?></span> <?php echo $location; ?></p>
                            <a href="<?php echo $link; ?>" class="btn"><span><?php pll_e('Zobacz'); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <div class="backgroundWrapper" style="background-image: url('<?php echo get_template_directory_uri() . '/images/homeBackground_01.png'; ?>');">
        <section class="homeAbout">
            <div class="homeAbout__wrap container">
                <div class="homeAbout__content">
                    <h2><?php pll_e('O nas'); ?></h2>
                    <div class="content">
                        <?php echo get_field('homeAbout_content'); ?>
                    </div>
                    <a href="<?php echo home_url('/o-nas'); ?>" class="btn"><span><?php pll_e('Dowiedz się więcej'); ?></span></a>
                </div>
                <div class="homeAbout__image">
                    <div class="image">
                        <img src="<?php echo get_field('homeAbout_image')['url']; ?>" alt="<?php echo get_field('homeAbout_image')['alt']; ?>"/>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="homeAbout homeAbout--reverse">
            <div class="homeAbout__wrap container">
                <div class="homeAbout__content">
                    <h2><?php pll_e('Działamy z najlepszymi'); ?></h2>
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
                    <h2><span>Mill-yon</span><?php pll_e('w liczbach'); ?></h2>
                </div>
                <div class="homeInfo__list">
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_01.svg'; ?>"/>
                        </div>
                        <?php if($lang == 'en_US'): ?>
                            <h3>16 years</h3>
                        <?php else: ?>
                            <h3>16 lat</h3>
                        <?php endif; ?>
                        <p><?php pll_e('na polskim rynku'); ?></p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_02.svg'; ?>"/>
                        </div>
                        <h3>3967</h3>
                        <p><?php pll_e('sprzedanych mieszkań'); ?></p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_03.svg'; ?>"/>
                        </div>
                        <h3>21</h3>
                        <p><?php pll_e('zrealizowanych inwestycji'); ?></p>
                    </div>
                    <div class="box">
                        <div class="box__icon">
                            <img src="<?php echo get_template_directory_uri() . '/images/homeInfo_04.svg'; ?>"/>
                        </div>
                        <h3>239 000 m²</h3>
                        <p><?php pll_e('powierzchni inwestycji'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="investsell" class="homeRealizations">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2><?php pll_e('W sprzedaży'); ?></h2>
            </div>
            <div class="homeRealizations__content investSell">
                <div class="content">
                    <?php while(have_rows('investSell')): the_row();
                        $name = get_sub_field('investSell_name');
                        $city = get_sub_field('investSell_city');
                        $location = get_sub_field('investSell_location');
                        $desc = get_sub_field('investSell_desc');
                        $url = get_sub_field('investSell_url');
                        $video = get_sub_field('investSell_video');
                    ?>
                    <div class="content__slide">
                        <h3 class="name"><?php echo $name; ?></h3>
                        <h4 class="localization"><?php echo $city; ?><?php if($location): ?> | <?php echo $location; ?><?php endif; ?></h4>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <div class="actions">
                            <a href="<?php echo $url; ?>" target="_blank" class="btn"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                            <?php if($video): ?>
                            <a href="<?php echo $video; ?>" target="_blank" class="btn video"><span><?php pll_e('Zobacz film'); ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="images">
                    <?php while(have_rows('investSell')): the_row();?>
                    <div class="images__image">
                        <img src="<?php echo get_sub_field('investSell_image')['url']; ?>" alt="<?php echo get_sub_field('investSell_image')['alt']; ?>"/>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="homeRealizations homeRealizations--white">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2><?php pll_e('W przygotowaniu'); ?></h2>
            </div>
            <div class="homeRealizations__content investPrepare">
                <div class="content">
                    <?php while(have_rows('investPrepare')): the_row();
                        $name = get_sub_field('investPrepare_name');
                        $city = get_sub_field('investPrepare_city');
                        $location = get_sub_field('investPrepare_location');
                        $desc = get_sub_field('investPrepare_desc');
                        $url = get_sub_field('investPrepare_url');
                        $video = get_sub_field('investPrepare_video');
                    ?>
                    <div class="content__slide">
                        <h3 class="name"><?php echo $name; ?></h3>
                        <h4 class="localization"><?php echo $city; ?><?php if($location): ?> | <?php echo $location; ?><?php endif; ?></h4>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <div class="actions">
                            <a href="<?php echo $url; ?>" target="_blank" class="btn"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                            <?php if($video): ?>
                            <a href="<?php echo $video; ?>" target="_blank" class="btn video"><span><?php pll_e('Zobacz film'); ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="images">
                    <?php while(have_rows('investPrepare')): the_row();?>
                    <div class="images__image">
                        <img src="<?php echo get_sub_field('investPrepare_image')['url']; ?>" alt="<?php echo get_sub_field('investPrepare_image')['alt']; ?>"/>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section> -->
    <section id="investend" class="homeRealizations homeRealizations--white">
        <div class="homeRealizations__wrap container">
            <div class="homeRealizations__heading">
                <h2><?php pll_e('Zakończone'); ?></h2>
            </div>
            <div class="homeRealizations__content investEnd">
                <div class="content">
                    <?php while(have_rows('investEnd')): the_row();
                        $name = get_sub_field('investEnd_name');
                        $city = get_sub_field('investEnd_city');
                        $location = get_sub_field('investEnd_location');
                        $desc = get_sub_field('investEnd_desc');
                        $url = get_sub_field('investEnd_url');
                        $video = get_sub_field('investEnd_video');
                    ?>
                    <div class="content__slide">
                        <h3 class="name"><?php echo $name; ?></h3>
                        <h4 class="localization"><?php echo $city; ?><?php if($location): ?> | <?php echo $location; ?><?php endif; ?></h4>
                        <div class="desc">
                            <p><?php echo $desc; ?></p>
                        </div>
                        <div class="actions">
                        <a href="<?php echo $url; ?>" target="_blank" class="btn"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                            <?php if($video): ?>
                            <a href="<?php echo $video; ?>" target="_blank" class="btn video"><span><?php pll_e('Zobacz film'); ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="images">
                    <?php while(have_rows('investEnd')): the_row();?>
                    <div class="images__image">
                        <img src="<?php echo get_sub_field('investEnd_image')['url']; ?>" alt="<?php echo get_sub_field('investEnd_image')['alt']; ?>"/>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    
    <div class="backgroundWrapper backgroundWrapper--two" style="background-image: url(<?php echo get_template_directory_uri() . '/images/realization_bg.png' ?>);">
        <section class="homeMap">
            <div class="homeMap__wrap container">
                <div class="mapWrapper">
                    <?php include('_map.php'); ?>
                    <div class="list list--gdansk">
                        <?php while(have_rows('investMap')): the_row();
                            $name = get_sub_field('investMap_name');
                            $city = get_sub_field('investMap_city');
                            $image = get_sub_field('investMap_image');
                        if($city == 'gdansk'): ?>
                            <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?><span class="image"><img src="<?php echo $image; ?>"/></span></a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="list list--ozarow">
                        <?php while(have_rows('investMap')): the_row();
                            $name = get_sub_field('investMap_name');
                            $city = get_sub_field('investMap_city');
                            $image = get_sub_field('investMap_image');
                        if($city == 'ozarow'): ?>
                            <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?><span class="image"><img src="<?php echo $image; ?>"/></span></a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="list list--pruszkow">
                        <?php while(have_rows('investMap')): the_row();
                            $name = get_sub_field('investMap_name');
                            $city = get_sub_field('investMap_city');
                            $image = get_sub_field('investMap_image');
                        if($city == 'pruszkow'): ?>
                            <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?><span class="image"><img src="<?php echo $image; ?>"/></span></a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="list list--warszawa">
                        <?php while(have_rows('investMap')): the_row();
                            $name = get_sub_field('investMap_name');
                            $city = get_sub_field('investMap_city');
                            $image = get_sub_field('investMap_image');
                            $link = get_sub_field('investMap_link');
                        if($city == 'warszawa'): ?>
                            <a href="<?php echo $link; ?>" target="_blank"><?php echo $name; ?><span class="image"><img src="<?php echo $image; ?>"/></span></a>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="mapMobile">
                    <?php include('_map-mobile.php'); ?>
                    <div class="mapMobile__list">
                        <div class="pos">
                            <div class="pos__heading">
                                <h3>Warszawa</h3>
                            </div>
                            <div class="pos__content">
                                <?php while(have_rows('investMap')): the_row();
                                    $name = get_sub_field('investMap_name');
                                    $city = get_sub_field('investMap_city');
                                    $link = get_sub_field('investMap_link');
                                if($city == 'warszawa'): ?>
                                <div class="investment">
                                    <p><?php echo $name; ?></p>
                                    <a href="<?php echo $link; ?>" target="_blank" class="btn btn--small"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                                </div>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="pos">
                            <div class="pos__heading">
                                <h3>Ożarów Mazowiecki</h3>
                            </div>
                            <div class="pos__content">
                                <?php while(have_rows('investMap')): the_row();
                                    $name = get_sub_field('investMap_name');
                                    $city = get_sub_field('investMap_city');
                                    $link = get_sub_field('investMap_link');
                                if($city == 'ozarow'): ?>
                                <div class="investment">
                                    <p><?php echo $name; ?></p>
                                    <a href="<?php echo $link; ?>" target="_blank" class="btn btn--small"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                                </div>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="pos">
                            <div class="pos__heading">
                                <h3>Pruszków</h3>
                            </div>
                            <div class="pos__content">
                                <?php while(have_rows('investMap')): the_row();
                                    $name = get_sub_field('investMap_name');
                                    $city = get_sub_field('investMap_city');
                                    $link = get_sub_field('investMap_link');
                                if($city == 'pruszkow'): ?>
                                <div class="investment">
                                    <p><?php echo $name; ?></p>
                                    <a href="<?php echo $link; ?>" target="_blank" class="btn btn--small"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                                </div>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="pos">
                            <div class="pos__heading">
                                <h3>Gdańsk</h3>
                            </div>
                            <div class="pos__content">
                                <?php while(have_rows('investMap')): the_row();
                                    $name = get_sub_field('investMap_name');
                                    $city = get_sub_field('investMap_city');
                                    $link = get_sub_field('investMap_link');
                                if($city == 'gdansk'): ?>
                                <div class="investment">
                                    <p><?php echo $name; ?></p>
                                    <a href="<?php echo $link; ?>" target="_blank" class="btn btn--small"><span><?php pll_e('Strona inwestycji'); ?></span></a>
                                </div>
                                <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php 
        $args = array(
            'posts_per_page'	=> 4,
            'post_type'		    => 'post',
            'cat'               => '4, 17',
        );
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
        <section id="news" class="homeNews">
            <div class="homeNews__wrap container">
                <div class="homeNews__heading">
                    <h2><?php pll_e('Aktualności'); ?></h2>
                </div>
                <div class="homeNews__list">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article" style="background-image: url(<?php echo get_field('article_image')['url']; ?>);">
                            <div class="article__local">
                                <p><?php echo get_field('article_localization'); ?></p>
                            </div>
                            <div class="article__info">
                                <h3 class="name"><?php the_title(); ?></h3>
                                <p><?php echo get_field('article_leadtext'); ?></p>
                                <a href="<?php echo get_field('article_link'); ?>" class="btn"><span><?php pll_e('Dowiedz się więcej'); ?></span></a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if(get_field('homeTeam')): ?>
        <section class="homeTeam">
            <div class="homeTeam__wrap container">
                <div class="homeTeam__heading">
                    <h2><?php pll_e('Nasz zespół'); ?></h2>
                </div>
                <div class="homeTeam__list">
                    <?php while(have_rows('homeTeam')): the_row();
                        $image = get_sub_field('homeTeam_image');
                        $name = get_sub_field('homeTeam_name');
                        $desc = get_sub_field('homeTeam_desc');
                    ?>
                    <div class="teammate">
                        <div class="teammate__wrap">
                            <div class="teammate__image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </div>
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $desc; ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>