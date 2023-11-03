<?php
$temp_uri = get_template_directory_uri();
$home_uri = get_home_url();
?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__item">
                <?php
                $kartinka = get_field('logotip', 44);
                if (!empty($kartinka)) : ?>
                    <div class="footer__logo">
                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                    </div>
                <?php endif; ?>

                <?php if (get_field('nazvanie_knopki-ssylki', 44)) {  ?>
                    <a href="<?php the_field('ssylka_knopki-ssylki', 44) ?>">
                        <div class="btn btn_arrow-yellow"><?php the_field('nazvanie_knopki-ssylki', 44) ?></div>
                    </a>
                <?php } ?>
            </div>

            <div class="footer__item">
                <div class="footer__block">
                    <?php if (get_field('ssylki_nazvanie_lejbla', 44)) {  ?>
                        <div class="footer__label"><?php the_field('ssylki_nazvanie_lejbla', 44) ?></div>
                        <div class="footer__list">
                            <ul>
                                <?php
                                if (have_rows('ssylki_spisok', 44)) :
                                    while (have_rows('ssylki_spisok', 44)) : the_row();
                                ?>
                                        <li>
                                            <a href="<?php the_sub_field('ssylka_punkta', 44); ?>"><?php the_sub_field('nazvanie_punkta', 44); ?></a>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>


            <div class="footer__item">
                <div class="footer__block">
                    <?php if (get_field('uslugi_nazvanie_lejbla', 44)) {  ?>
                        <div class="footer__label"><?php the_field('uslugi_nazvanie_lejbla', 44) ?></div>
                        <div class="footer__list">
                            <ul>
                                <?php
                                if (have_rows('uslugi_spisok', 44)) :
                                    while (have_rows('uslugi_spisok', 44)) : the_row();
                                ?>
                                        <li>
                                            <a href="<?php the_sub_field('ssylka_punkta', 44); ?>"><?php the_sub_field('nazvanie_punkta', 44); ?></a>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="footer__item">

                <div class="footer__block">
                    <?php if (get_field('kontaktnaya_informacziya_nazvanie_lejbla', 44)) {  ?>
                        <div class="footer__label"><?php the_field('kontaktnaya_informacziya_nazvanie_lejbla', 44) ?></div>
                        <div class="footer__list">
                            <ul>
                                <?php
                                if (have_rows('kontaktnaya_informacziya_spisok', 44)) :
                                    while (have_rows('kontaktnaya_informacziya_spisok', 44)) : the_row();
                                ?>
                                        <li>
                                            <?php if (get_sub_field('ssylka_punkta', 44)) { ?>
                                                <a href="<?php the_sub_field('ssylka_punkta', 44); ?>">
                                                    <?php the_sub_field('nazvanie_punkta', 44); ?>
                                                </a>
                                            <?php } else { ?>
                                                <?php the_sub_field('nazvanie_punkta', 44); ?>
                                            <?php } ?>
                                        </li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>

                <div class="footer-social">
                    <?php
                    if (have_rows('soczseti', 44)) :
                        while (have_rows('soczseti', 44)) : the_row();
                    ?>
                            <div class="footer-social__item">
                                <a href="<?php the_sub_field('ssylka', 44); ?>">
                                    <?php
                                    $kartinka = get_sub_field('ikonka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>

        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?php wp_footer(); ?>
<script src="<?php echo $temp_uri ?>/assets/js/main.js"></script>
</body>

</html>