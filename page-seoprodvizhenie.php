<?php
/*
Template Name: Шаблон страницы "SEO-продвижение"
Template Post Type: post, page
*/
?>

<?php get_header(); ?>


<div class="wrapper">

    <!-- pervyj_ekran -->
    <?php if (get_field('pervyj_ekran_zagolovok')) { ?>
        <div class="top">
            <div class="container">
                <div class="top__inner">
                    <div class="top__first">
                        <h1 class="top__title"><?php the_field('pervyj_ekran_zagolovok') ?></h1>
                        <?php the_field('pervyj_ekran_opisanie') ?>
                    </div>
                    <div class="top__second">
                        <?php
                        $pervyj_ekran_zagolovok_kartinka = get_field('pervyj_ekran_kartinka');
                        if (!empty($pervyj_ekran_zagolovok_kartinka)) : ?>
                            <img src="<?php echo $pervyj_ekran_zagolovok_kartinka['url']; ?>" alt="<?php echo $pervyj_ekran_zagolovok_kartinka['alt']; ?>" />
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- czeny -->
    <?php if (get_field('czeny_lejbl')) { ?>
        <!-- START ЦЕНЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('czeny_lejbl'); ?></div>
                <h2 class="block__title mw740"><?php the_field('czeny_zagolovok'); ?></h2>

                <div class="price">

                    <?php
                    if (have_rows('czeny_kartochki')) :
                        $i = 1;
                        while (have_rows('czeny_kartochki')) : the_row();
                    ?>
                            <div class="price__item <?php the_sub_field('css_klass_oformleniya_kartochki'); ?>">
                                <div class="price__header">
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                    <div class="price__header-el">
                                        <a href="<?php the_sub_field('ssylka_knopki'); ?>">
                                            <div class="btn <?php the_sub_field('css_klass_oformleniya_knopki_vverhu'); ?>"><?php the_sub_field('nazvanie_knopki'); ?></div>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="price__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="price__desc"><?php the_sub_field('opisanie'); ?></div>
                                <div class="price__detail">

                                    <div class="price-list">
                                        <div class="price-list__label"><?php the_sub_field('nazvanie_lejbla'); ?></div>
                                        <ul>
                                            <?php
                                            if (have_rows('spisok')) :
                                                while (have_rows('spisok')) : the_row();
                                            ?>
                                                    <li><?php the_sub_field('punkt_spiska'); ?></li>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>

                                </div>
                                <div class="price__price"><?php the_sub_field('tekst_czeny'); ?></div>
                                <div class="price__footer">
                                    <div class="btn"><?php the_sub_field('nazvanie_knopki_vnizu'); ?></div>
                                </div>
                            </div>

                    <?php
                            $i++;
                        endwhile;

                    endif;
                    ?>


                </div>

            </div>
        </div>
        <!-- END ЦЕНЫ -->
    <?php } ?>


    <!-- utp -->
    <?php if (get_field('utp_lejbl')) { ?>
        <!-- START УТП -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('utp_lejbl'); ?></div>
                <h2 class="block__title mw760"><?php the_field('utp_zagolovok'); ?></h2>

                <div class="advant">

                    <?php
                    if (have_rows('utp_kartochki')) :
                        while (have_rows('utp_kartochki')) : the_row();
                    ?>
                            <div class="advant__item">
                                <div class="advant__header">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="advant__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="advant__desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>
        </div>
        <!-- END УТП -->
    <?php } ?>


    <!-- kejsy -->
    <?php if (get_field('kejsy_lejbl')) { ?>
        <!-- START КЕЙСЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('kejsy_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('kejsy_zagolovok'); ?></h2>

                <div class="cases">

                    <?php
                    if (have_rows('kejsy_kartochki')) :
                        $i = 1;
                        while (have_rows('kejsy_kartochki')) : the_row();
                    ?>
                            <div class="cases__item">
                                <div class="cases__inner">
                                    <div class="cases__img">
                                        <?php
                                        $kartinka = get_sub_field('kartinka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="cases__body">
                                        <div class="cases__body-header">
                                            <div class="cases__tags">
                                                <span class="cases__tag"><?php the_sub_field('nazvanie'); ?></span>
                                            </div>
                                            <div class="counter">
                                                <?php if ($i < 10) {
                                                    echo '0' . $i;
                                                } else {
                                                    echo $i;
                                                }; ?>
                                            </div>
                                        </div>

                                        <div class="cases__list">
                                            <?php
                                            if (have_rows('spisok')) :
                                                while (have_rows('spisok')) : the_row();
                                            ?>
                                                    <div class="cases__list-item">
                                                        <span><?php the_sub_field('nazvanie'); ?></span>
                                                        <span><?php the_sub_field('opisanie'); ?></span>
                                                    </div>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>

                                        </div>
                                        <h3 class="cases__title"><?php the_sub_field('zagolovok'); ?></h3>
                                        <div class="cases__desc">
                                            <?php the_sub_field('opisanie'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>

                </div>

            </div>
        </div>
        <!-- END КЕЙСЫ -->
    <?php } ?>


    <!-- etapy_raboty -->
    <?php if (get_field('etapy_raboty_lejbl')) { ?>
        <!-- START ЭТАПЫ РАБОТЫ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('etapy_raboty_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('etapy_raboty_zagolovok'); ?></h2>

                <div class="howwork">
                    <div class="howwork__inner">
                        <div class="howwork__list">
                            <?php
                            if (have_rows('etapy_raboty_punkty')) :
                                while (have_rows('etapy_raboty_punkty')) : the_row();
                            ?>
                                    <div class="howwork__item">
                                        <div class="howwork__body">
                                            <div class="howwork__text">
                                                <h3 class="howwork__title"><?php the_sub_field('zagolovok'); ?></h3>
                                                <div class="howwork__desc"><?php the_sub_field('opisanie'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="howwork__line"></div>
                        <div class="howwork__line_mob"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END ЭТАПЫ РАБОТЫ -->
    <?php } ?>


    <!-- optimizacziya_sajta_v_kanade -->
    <?php if (get_field('optimizacziya_sajta_v_kanade_lejbl')) { ?>
        <!-- START ОПТИМИЗАЦИЯ САЙТА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('optimizacziya_sajta_v_kanade_lejbl'); ?></div>
                <h2 class="block__title mw790"><?php the_field('optimizacziya_sajta_v_kanade_zagolovok'); ?></h2>

                <div class="advant">
                    <?php
                    if (have_rows('optimizacziya_sajta_v_kanade_kartochki')) :
                        while (have_rows('optimizacziya_sajta_v_kanade_kartochki')) : the_row();
                    ?>
                            <div class="advant__item">
                                <div class="advant__header">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="advant__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="advant__desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END ОПТИМИЗАЦИЯ САЙТА -->
    <?php } ?>


    <!-- sravnitelnaya_harakteristika -->
    <?php if (get_field('sravnitelnaya_harakteristika_lejbl')) { ?>
        <!-- START СРАВНИТЕЛЬНАЯ ХАРАКТЕРИСТИКА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('sravnitelnaya_harakteristika_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('sravnitelnaya_harakteristika_zagolovok'); ?></h2>

                <div class="table-char">
                    <div class="table-char__inner">
                        <?php $tablicza = get_field('sravnitelnaya_harakteristika_tablicza'); ?>
                        <?php echo do_shortcode($tablicza); ?>
                    </div>
                    <div class="table-char__info">
                        <div class="table-char__info-icon"></div>
                        <div class="table-char__info-text">
                            <?php the_field('sravnitelnaya_harakteristika_informacziya_pod_tabliczej'); ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END СРАВНИТЕЛЬНАЯ ХАРАКТЕРИСТИКА -->
    <?php } ?>


    <!-- rezultat -->
    <?php if (get_field('rezultat_lejbl')) { ?>
        <!-- START РЕЗУЛЬТАТ -->
        <div class="block block_yellow">
            <div class="container">
                <div class="block__label"><?php the_field('rezultat_lejbl'); ?></div>
                <h2 class="block__title mw790"><?php the_field('rezultat_zagolovok'); ?></h2>

                <div class="seoresult">
                    <?php
                    if (have_rows('rezultat_kartochki')) :
                        while (have_rows('rezultat_kartochki')) : the_row();
                    ?>
                            <div class="seoresult__item">
                                <div class="seoresult__img">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="seoresult__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="seoresult__desc">
                                    <?php the_sub_field('opisanie'); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END РЕЗУЛЬТАТ -->
    <?php } ?>


    <!-- seo_prodvizhenie -->
    <?php if (get_field('seo_prodvizhenie_lejbl')) { ?>
        <!-- START SEO-ПРОДВИЖЕНИЕ -->
        <div class="block ">
            <div class="container">
                <div class="block__label"><?php the_field('seo_prodvizhenie_lejbl'); ?></div>
                <h2 class="block__title mw915"><?php the_field('seo_prodvizhenie_zagolovok'); ?></h2>

                <div class="seoprom">
                    <?php
                    if (have_rows('seo_prodvizhenie_kartochki')) :
                        while (have_rows('seo_prodvizhenie_kartochki')) : the_row();
                    ?>
                            <div class="seoprom__item">
                                <div class="seoprom__before"></div>
                                <div class="seoprom__body">
                                    <h3 class="seoprom__title"><?php the_sub_field('zagolovok'); ?></h3>
                                    <div class="seoprom__desc">
                                        <?php the_sub_field('opisanie'); ?>
                                    </div>
                                </div>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END SEO-ПРОДВИЖЕНИЕ -->
    <?php } ?>


    <!-- effektivnoe_seo_prodvizhenie_sajta -->
    <?php if (get_field('effektivnoe_seo_prodvizhenie_sajta_lejbl')) { ?>
        <!-- START Эффективное SEO-продвижение сайта -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('effektivnoe_seo_prodvizhenie_sajta_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('effektivnoe_seo_prodvizhenie_sajta_zagolovok'); ?></h2>

                <div class="tools">
                    <?php
                    if (have_rows('effektivnoe_seo_prodvizhenie_sajta_kartochki')) :
                        while (have_rows('effektivnoe_seo_prodvizhenie_sajta_kartochki')) : the_row();
                    ?>
                            <div class="tools__item">
                                <div class="tools__img">
                                    <?php
                                    $kartinka = get_sub_field('kartinka');
                                    if (!empty($kartinka)) : ?>
                                        <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                    <?php endif; ?>
                                </div>
                                <h3 class="tools__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="tools__desc">
                                    <?php the_sub_field('opisanie'); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END Эффективное SEO-продвижение сайта -->
    <?php } ?>


    <!-- otzyvy_klientov -->
    <?php if (get_field('otzyvy_klientov_lejbl')) { ?>
        <!-- START Отзывы клиентов -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('otzyvy_klientov_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('otzyvy_klientov_zagolovok'); ?></h2>

                <div class="review">
                    <div class="review__inner">
                        <?php
                        if (have_rows('otzyvy_klientov_otzyvy')) :
                            while (have_rows('otzyvy_klientov_otzyvy')) : the_row();
                        ?>
                                <div class="review__item">
                                    <div class="review__header">
                                        <div class="review__img">
                                            <?php
                                            $kartinka = get_sub_field('izobrazhenie');
                                            if (!empty($kartinka)) : ?>
                                                <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="review__pers">
                                            <div class="review__pers-name"><?php the_sub_field('imya'); ?></div>
                                            <div class="review__pers-position"><?php the_sub_field('dolzhnost'); ?></div>
                                        </div>
                                    </div>
                                    <div class="review__text">
                                        <?php the_sub_field('tekst'); ?>
                                    </div>
                                    <div class="review__rating">
                                        <?php if (get_sub_field('rejting')) {
                                            for ($i = 0; $i < get_sub_field('rejting'); $i++) {
                                        ?>
                                                <span class="active"></span>
                                            <?php }
                                            for ($i = 0; $i < 5 - get_sub_field('rejting'); $i++) {
                                            ?>
                                                <span></span>
                                        <?php }
                                        } ?>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        else :
                            echo 'К сожалению, здесь пока ничего нет.';
                        endif;
                        ?>
                    </div>
                    <div class="review__all">
                        <div class="review__all_before"></div>
                        <a href="<?php the_field('otzyvy_klientov_ssylka_knopki_pod_blokom'); ?>">
                            <div class="btn btn_arrow-black"><?php the_field('otzyvy_klientov_nazvanie_knopki_pod_blokom'); ?></div>
                        </a>
                        <div class="review__all_after"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Отзывы клиентов -->
    <?php } ?>


    <!-- komanda -->
    <?php if (get_field('komanda_lejbl')) { ?>
        <!-- START КОМАНДА -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('komanda_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('komanda_zagolovok'); ?></h2>

                <div class="team">

                    <?php if (get_field('komanda_supervajzer_imya')) { ?>
                        <div class="team__main">
                            <div class="team__main-img">
                                <?php
                                $kartinka = get_field('komanda_supervajzer_izobrazhenie');
                                if (!empty($kartinka)) : ?>
                                    <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="team__main-body">
                                <div class="team__main-label">
                                    <div class="team__main-icon">
                                        <?php
                                        $kartinka = get_field('komanda_supervajzer_ikonka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="team__main-position"><?php the_field('komanda_supervajzer_dolzhnost'); ?></div>
                                </div>
                                <div class="team__main-name"><?php the_field('komanda_supervajzer_imya'); ?></div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="team__list">
                        <?php
                        if (have_rows('komanda_sotrudniki')) :
                            while (have_rows('komanda_sotrudniki')) : the_row();
                        ?>
                                <div class="team__item">
                                    <div class="team__label">
                                        <div class="team__icon">
                                            <?php
                                            $kartinka = get_sub_field('ikonka');
                                            if (!empty($kartinka)) : ?>
                                                <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="team__position"><?php the_sub_field('dolzhnost'); ?></div>
                                    </div>
                                    <div class="team__count-spec"><?php the_sub_field('tekst_kol-va_sotrudnikov'); ?></div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>

                </div>

            </div>
        </div>
        <!-- END КОМАНДА -->
    <?php } ?>


    <!-- faq -->
    <?php if (get_field('faq_lejbl')) { ?>
        <!-- START FAQ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('faq_lejbl'); ?></div>
                <h2 class="block__title mw880"><?php the_field('faq_zagolovok'); ?></h2>

                <div class="faq">
                    <?php
                    if (have_rows('faq_vopros-otvety')) :
                        $i = 1;
                        while (have_rows('faq_vopros-otvety')) : the_row();
                    ?>
                            <div class="faq__item">
                                <div class="faq-question">
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                    <div class="faq-question__question"><?php the_sub_field('vopros'); ?></div>
                                    <div class="btn btn_plus-yellow">Подробнее</div>
                                </div>
                                <div class="faq-answer">
                                    <?php the_sub_field('otvet'); ?>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END FAQ -->
    <?php } ?>


    <!-- uslugi -->
    <?php if (get_field('uslugi_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('uslugi_zagolovok'); ?></h2>

                <div class="service">
                    <?php
                    if (have_rows('uslugi_kartochki')) :
                        $i = 1;
                        while (have_rows('uslugi_kartochki')) : the_row();
                    ?>
                            <div class="service__item">
                                <div class="service__header">
                                    <div class="service__header-el">
                                        <?php
                                        $kartinka = get_sub_field('ikonka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                </div>
                                <h3 class="service__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="service__desc"><?php the_sub_field('opisanie'); ?></div>
                                <div class="service__detail">
                                    <div class="service-list">
                                        <?php
                                        if (have_rows('spisok')) :
                                            while (have_rows('spisok')) : the_row();
                                        ?>
                                                <div class="service-list__item">
                                                    <span><?php the_sub_field('nazvanie'); ?></span>
                                                    <span><?php the_sub_field('opisanie'); ?></span>
                                                </div>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="service__footer">
                                    <a href="<?php the_sub_field('ssylka_knopki'); ?>">
                                        <div class="btn"><?php the_sub_field('nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
        <!-- END УСЛУГИ -->
    <?php } ?>

</div>

<?php get_footer(); ?>