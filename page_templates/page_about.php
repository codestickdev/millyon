<?php
    /**
     * Template name: O nas
     */
get_header(); ?>

<main class="millyon millyon--about">
    <div class="backgroundWrapper backgroundWrapper--two" style="background-image: url(<?php echo get_template_directory_uri() . '/images/realization_bg.png' ?>);">
        <section class="aboutList">
            <div class="aboutList__wrap container">
                <?php
                $count = 0;
                while(have_rows('aboutList')): the_row();
                    $title = get_sub_field('aboutList_title');
                    $content = get_sub_field('aboutList_content');
                    $image = get_sub_field('aboutList_image');
                    $count++;
                ?>
                <div class="aboutBox<?php if($count % 2 == 0): ?> aboutBox--reverse<?php endif; ?>">
                    <div class="aboutBox__content">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                    </div>
                    <div class="aboutBox__image">
                        <div class="image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <section class="aboutUSP">
            <div class="aboutUSP__wrap container">
                <?php while(have_rows('aboutUSP')): the_row();
                    $icon = get_sub_field('aboutUSP_icon');
                    $content = get_sub_field('aboutUSP_content');
                ?>
                <div class="usp">
                    <div class="usp__icon">
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
                    </div>
                    <p><?php echo $content; ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </section>

        <section class="aboutAwards">
            <div class="aboutAwards__wrap container">
                <h2><?php pll_e('Nagrody i wyróżnienia'); ?></h2>
                <?php echo get_field('aboutAwards'); ?>
            </div>
        </section>

        <?php if(get_field('homeTeam', 7)): ?>
        <section class="homeTeam">
            <div class="homeTeam__wrap container">
                <div class="homeTeam__heading">
                    <h2><?php pll_e('Nasi doradcy'); ?></h2>
                </div>
                <div class="homeTeam__list">
                    <?php while(have_rows('homeTeam', 7)): the_row();
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