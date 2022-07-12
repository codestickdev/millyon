<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mill-Yon
 */

?>

        <?php if(get_field('footerOffices', 7)): ?>
        <footer class="footerOffices">
            <div class="footerOffices__wrap container">
                <div class="footerOffices__heading">
                    <h2><?php pll_e('Biura sprzedaży'); ?></h2>
                </div>
                <div class="footerOffices__list">
                    <?php while(have_rows('footerOffices', 7)): the_row();
                        $name = get_sub_field('footerOffices_name');
                        $address = get_sub_field('footerOffices_address');
                        $phone = get_sub_field('footerOffices_phone');
                        $website = get_sub_field('footerOffices_www');
                        $link = get_sub_field('footerOffices_link');
                    ?>
                    <div class="office">
                        <h3><?php echo $name; ?></h3>
                        <p><?php echo $address; ?><p>
                        <p><b>tel.</b> <?php echo $phone; ?><br/>
                        <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a></p>
                        <p class="btn btn--small to-contact" value="<?php echo $name; ?>"><span><?php pll_e('Kontakt'); ?></span></p>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
		</footer>
        <?php endif; ?>

        <section class="footerForm">
            <div class="footerForm__wrap container">
                <div class="footerForm__heading">
                    <h2><?php pll_e('Skontaktuj się z nami'); ?></h2>
                    <p><?php pll_e('Jeśli zainteresowała Cię któraś z naszych inwestycji, lub masz inne pytania, napisz do nas wiadomość. Skontaktujemy się z tobą.'); ?></p>
                </div>
                <div class="footerForm__form">
                    <form id="contactForm" class="contactForm" method="POST">
                        <div class="contactForm__notice"></div>
                        <div class="contactForm__row contactForm__row--flex">
                            <div class="contactForm__input">
                                <input type="text" name="contactName" placeholder="<?php pll_e('Imię i Nazwisko'); ?>"/>
                            </div>
                            <div class="contactForm__input">
                                <input type="phone" name="contactPhone" placeholder="<?php pll_e('Telefon'); ?>"/>
                            </div>
                            <div class="contactForm__input">
                                <input type="email" name="contactEmail" placeholder="E-mail"/>
                            </div>
                        </div>
                        <div class="contactForm__row">
                            <div class="dropdownSelect" default="<?php pll_e('Która inwestycja Cię interesuje?'); ?>">
                                <div class="selected" value="false">
                                    <p><?php pll_e('Która inwestycja Cię interesuje?'); ?></p>
                                </div>
                                <div class="dropdown">
                                    <?php while(have_rows('footerOffices', 7)): the_row(); ?>
                                    <div class="dropdown__pos" value="<?php echo get_sub_field('footerOffices_name'); ?>" mail="<?php echo get_sub_field('footerOffices_mail'); ?>">
                                        <p><?php echo get_sub_field('footerOffices_name'); ?><p>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <div class="contactForm__row">
                            <div class="contactForm__input">
                                <textarea name="contactMessage" placeholder="<?php pll_e('Twoja wiadomość'); ?>"></textarea>
                            </div>
                        </div>
                        <div class="contactForm__row">
                            <div class="contactForm__acceptance">
                                <input type="checkbox" name="contactAcceptance"/>
                                <div class="checkbox"></div>
                                <label for="contactAcceptance"><?php pll_e('Wyrażam zgodę na przetwarzanie danych osobowych na potrzeby odpowiedzi na moje zgłoszenie. Więcej informacji w <a href="/wp-content/uploads/2022/06/polityka_prywatnosci.pdf" target="_blank">polityce prywatności</a>'); ?></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn--button"><span><?php pll_e('Wyślij zapytanie'); ?></span></button>
                    </form>
                </div>
            </div>
        </section>
        <section id="contact" class="footerContact">
            <div class="footerContact__wrap container">
                <div class="footerContact__logo">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>"/>
                    </div>
                </div>
                <div class="footerContact__content">
                    <h2><?php pll_e('Kontakt'); ?></h2>
                    <p>Mill-Yon Sp. z o.o.<br/>
                    al. J. Ch. Szucha 3 lok.3<br/>
                    00-580 <?php pll_e('Warszawa'); ?></p>
                    <p>tel. +48 22 522 77 50</p>
                </div>
            </div>
        </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
