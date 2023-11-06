<?php get_header(); ?>

<?php
$temp_uri = get_template_directory_uri();
$home_uri = get_home_url();
?>

<div class="wrapper home">


    <?php if (get_field('pervyj_ekran_zagolovok_chast_1')) { ?>
        <div class="top">
            <div class="container">
                <div class="top__inner">

                    <div class="top__first">
                        <h1 class="top__title">
                            <div class="top__title-1"><?php the_field('pervyj_ekran_zagolovok_chast_1') ?></div>
                            <div class="top__title-2"><span class="yellow"><?php the_field('pervyj_ekran_zagolovok_chast_2') ?></span> <?php the_field('pervyj_ekran_zagolovok_chast_3') ?></div>
                        </h1>
                        <div class="top__first-item-wrapper">

                            <?php if (get_field('pervyj_ekran_pod_zagolovkom_punkt_1')) { ?>
                                <div class="top__first-item">
                                    <div class="top__first-item-icon">
                                        <img src="<?php echo $temp_uri ?>/assets/img/home/icon-1.svg" alt="">
                                    </div>
                                    <div class="top__first-item-desc">
                                        <?php the_field('pervyj_ekran_pod_zagolovkom_punkt_1') ?>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php if (get_field('pervyj_ekran_pod_zagolovkom_punkt_2')) { ?>
                                <div class="top__first-item">
                                    <div class="top__first-item-icon">
                                        <img src="<?php echo $temp_uri ?>/assets/img/home/icon-1.svg" alt="">
                                    </div>
                                    <div class="top__first-item-desc">
                                        <?php the_field('pervyj_ekran_pod_zagolovkom_punkt_2') ?>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="top__first-tag-wrapper">
                            <?php
                            if (have_rows('pervyj_ekran_tegi')) :
                                while (have_rows('pervyj_ekran_tegi')) : the_row();
                            ?>
                                    <span><?php the_sub_field('teg'); ?></span>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="top__second">

                        <div class="feedback">
                            <?php echo do_shortcode('[contact-form-7 id="c444a95" title="Форма обратно связи"]'); ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    <?php } ?>


    <!-- uslugi2 -->
    <?php if (get_field('uslugi2_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi2_lejbl'); ?></div>
                <h2 class="block__title mw740"><?php the_field('uslugi2_zagolovok'); ?></h2>

                <div class="price">

                    <?php
                    if (have_rows('uslugi2_kartochki')) :
                        $i = 1;
                        while (have_rows('uslugi2_kartochki')) : the_row();
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
                                <div class="price__price"><?php the_sub_field('tekst_uslugi'); ?></div>
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


    <!-- Кейсы  -->
    <?php if (get_field('kejsy_lejbl')) { ?>
        <!-- START Кейсы -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('kejsy_lejbl'); ?></div>
                <h2 class="block__title block__title_flex">
                    <div><?php the_field('kejsy_zagolovok'); ?></div>
                    <div>
                        <?php if (get_field('kejsy_lejbl')) { ?>
                            <a href="<?php the_field('kejsy_ssylka_knopki'); ?>">
                                <div class="btn btn_arrow-black"><?php the_field('kejsy_nazvanie_knopki'); ?></div>
                            </a>
                        <?php } ?>
                    </div>
                </h2>


                <div class="cases-2">

                    <?php if (get_field('kejsy_kartochki_kejs_01_zagolovok')) { ?>
                        <div class="cases-2__item cases-2__item_big">
                            <div class="cases-2__inner">
                                <?php
                                $kartinka1 = get_field('kejsy_kartochki_kejs_01_kartinka_zadnij_fon');
                                if (!empty($kartinka1)) { ?>
                                    <img src="<?php echo $kartinka1['url']; ?>" alt="<?php echo $kartinka1['alt']; ?>" />
                                <?php } ?>
                                <h3 class="cases-2__title"><?php the_field('kejsy_kartochki_kejs_01_zagolovok'); ?></h3>
                                <div class="cases-2__bottom">
                                    <div class="cases-2__tags">
                                        <?php
                                        if (have_rows('kejsy_kartochki_kejs_01_tegi')) :
                                            while (have_rows('kejsy_kartochki_kejs_01_tegi')) : the_row();
                                        ?>
                                                <span><?php the_sub_field('teg'); ?></span>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                    <div class="cases-2__btn">
                                        <a href="<?php the_field('kejsy_kartochki_kejs_01_ssylka_knopki'); ?>">
                                            <div class="btn btn_arrow-yellow"><?php the_field('kejsy_kartochki_kejs_01_nazvanie_knopki'); ?></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="cases-2__item cases-2__item_double">

                        <div class="cases-2__inner">
                            <?php
                            $kartinka2 = get_field('kejsy_kartochki_kejs_02_kartinka_zadnij_fon_2');
                            if (!empty($kartinka2)) { ?>
                                <img src="<?php echo $kartinka2['url']; ?>" alt="<?php echo $kartinka2['alt']; ?>" />
                            <?php } ?>
                            <h3 class="cases-2__title"><?php the_field('kejsy_kartochki_kejs_02_zagolovok'); ?></h3>
                            <div class="cases-2__bottom">
                                <div class="cases-2__tags">
                                    <?php
                                    if (have_rows('kejsy_kartochki_kejs_02_tegi')) :
                                        while (have_rows('kejsy_kartochki_kejs_02_tegi')) : the_row();
                                    ?>
                                            <span><?php the_sub_field('teg'); ?></span>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <div class="cases-2__btn">
                                    <a href="<?php the_field('kejsy_kartochki_kejs_02_ssylka_knopki'); ?>">
                                        <div class="btn btn_arrow-yellow"><?php the_field('kejsy_kartochki_kejs_02_nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="cases-2__inner">
                            <?php
                            $kartinka3 = get_field('kejsy_kartochki_kejs_03_kartinka_zadnij_fon_3');
                            if (!empty($kartinka3)) { ?>
                                <img src="<?php echo $kartinka3['url']; ?>" alt="<?php echo $kartinka3['alt']; ?>" />
                            <?php } ?>
                            <h3 class="cases-2__title"><?php the_field('kejsy_kartochki_kejs_03_zagolovok'); ?></h3>
                            <div class="cases-2__bottom">
                                <div class="cases-2__tags">
                                    <?php
                                    if (have_rows('kejsy_kartochki_kejs_03_tegi')) :
                                        while (have_rows('kejsy_kartochki_kejs_03_tegi')) : the_row();
                                    ?>
                                            <span><?php the_sub_field('teg'); ?></span>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <div class="cases-2__btn">
                                    <a href="<?php the_field('kejsy_kartochki_kejs_03_ssylka_knopki'); ?>">
                                        <div class="btn btn_arrow-yellow"><?php the_field('kejsy_kartochki_kejs_03_nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="cases-2__item cases-2__item_big">
                        <div class="cases-2__inner">
                            <?php
                            $kartinka4 = get_field('kejsy_kartochki_kejs_04_kartinka_zadnij_fon');
                            if (!empty($kartinka4)) { ?>
                                <img src="<?php echo $kartinka4['url']; ?>" alt="<?php echo $kartinka4['alt']; ?>" />
                            <?php } ?>
                            <h3 class="cases-2__title"><?php the_field('kejsy_kartochki_kejs_04_zagolovok'); ?></h3>
                            <div class="cases-2__bottom">
                                <div class="cases-2__tags">
                                    <?php
                                    if (have_rows('kejsy_kartochki_kejs_04_tegi')) :
                                        while (have_rows('kejsy_kartochki_kejs_04_tegi')) : the_row();
                                    ?>
                                            <span><?php the_sub_field('teg'); ?></span>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <div class="cases-2__btn">
                                    <a href="<?php the_field('kejsy_kartochki_kejs_04_ssylka_knopki'); ?>">
                                        <div class="btn btn_arrow-yellow"><?php the_field('kejsy_kartochki_kejs_04_nazvanie_knopki'); ?></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- END Кейсы -->
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


    <?php if (get_field('dlya_kogo_lejbl')) { ?>
        <!-- START Для кого -->
        <div class="block block_yellow">
            <div class="container">
                <div class="block__label"><?php the_field('dlya_kogo_lejbl'); ?></div>
                <h2 class="block__title"><?php the_field('dlya_kogo_zagolovok'); ?></h2>

                <div class="forwhom">


                    <?php
                    if (have_rows('dlya_kogo_kartochki')) :
                        $i = 1;
                        while (have_rows('dlya_kogo_kartochki')) : the_row();
                    ?>
                            <div class="forwhom__item">
                                <div class="forwhom__header">
                                    <div class="forwhom__icon">
                                        <?php
                                        $kartinka = get_sub_field('kartinka');
                                        if (!empty($kartinka)) : ?>
                                            <img src="<?php echo $kartinka['url']; ?>" alt="<?php echo $kartinka['alt']; ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="forwhom__counter counter">
                                        <?php if ($i < 10) {
                                            echo '0' . $i;
                                        } else {
                                            echo $i;
                                        }; ?>
                                    </div>
                                </div>
                                <h3 class="forwhom__title"><?php the_sub_field('zagolovok'); ?></h3>
                                <div class="forwhom__desc"><?php the_sub_field('opisanie'); ?></div>
                            </div>
                    <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>

                    <?php if (get_field('dlya_kogo_poslednyaya_kartochka_zagolovok')) { ?>
                        <div class="forwhom__item forwhom__item_last">
                            <h3 class="forwhom__title"><?php the_field('dlya_kogo_poslednyaya_kartochka_zagolovok'); ?></h3>
                            <div class="forwhom__bottom">
                                <div class="forwhom__btn-right">
                                    <a href="<?php the_field('dlya_kogo_poslednyaya_kartochka_ssylka_levoj_knopki'); ?>"></a>
                                </div>
                                <div class="forwhom__btn-left">
                                    <?php if (get_field('dlya_kogo_poslednyaya_kartochka_ssylka_pravoj_knopki')) { ?>
                                        <a href="<?php the_field('dlya_kogo_poslednyaya_kartochka_ssylka_pravoj_knopki'); ?>">
                                            <div class="btn btn__check-yellow"><?php the_field('dlya_kogo_poslednyaya_kartochka_nazvanie_pravoj_knopki'); ?></div>
                                        </a>
                                    <?php } else { ?>
                                        <div class="btn btn__check-yellow"><?php the_field('dlya_kogo_poslednyaya_kartochka_nazvanie_pravoj_knopki'); ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>


            </div>
        </div>
        <!-- END Для кого -->
    <?php } ?>



    <!-- START Результат -->
    <div class="block">
        <div class="container">
            <div class="block__label">Результат</div>
            <h2 class="block__title">Когда ждать результат в зависимости от возраста сайта</h2>

            <div class="seoresult seoresult_yellow">
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
    <!-- END Результат -->



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




    <!-- START Блог -->
    <div class="block">
        <div class="container">
            <div class="block__label">Блог</div>
            <h2 class="block__title block__title_flex">
                <div>У нас интересный блог</div>
                <div>
                    <a href="#">
                        <div class="btn btn_arrow-black">Читать все статьи</div>
                    </a>
                </div>
            </h2>

            <div class="blog">

                <div class="blog__item">
                    <div class="blog__img">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/blog-image.png" alt="">
                    </div>
                    <div class="blog__body">
                        <div class="blog__tags">
                            <span>Marketing</span>
                            <span>SEO</span>
                        </div>
                        <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                        <div class="blog__desc">
                            Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                        </div>
                        <div class="blog__footer">
                            <div class="blog__date">7 октября 2023</div>
                            <div class="blog__btn">
                                <div class="btn btn_plus-blue">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__item">
                    <div class="blog__img">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/blog-image.png" alt="">
                    </div>
                    <div class="blog__body">
                        <div class="blog__tags">
                            <span>Marketing</span>
                            <span>SEO</span>
                        </div>
                        <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                        <div class="blog__desc">
                            Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                        </div>
                        <div class="blog__footer">
                            <div class="blog__date">7 октября 2023</div>
                            <div class="blog__btn">
                                <div class="btn btn_plus-blue">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__item">
                    <div class="blog__img">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/blog-image.png" alt="">
                    </div>
                    <div class="blog__body">
                        <div class="blog__tags">
                            <span>Marketing</span>
                            <span>SEO</span>
                        </div>
                        <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                        <div class="blog__desc">
                            Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                        </div>
                        <div class="blog__footer">
                            <div class="blog__date">7 октября 2023</div>
                            <div class="blog__btn">
                                <div class="btn btn_plus-blue">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END Блог -->


    <!-- START Бесплатный аудит -->
    <div class="block">
        <div class="container">
            <div class="block__label">Бесплатный аудит</div>
            <h2 class="block__title">Получите коммерческое предложение</h2>

            <div class="free-audit">
                <div class="free-audit__form">

                    <form class="feedback" action="">
                        <div class="feedback__inner">
                            <div class="feedback__top">
                                <div class="feedback__label">Заполните форму заявки и мы вернемся с предложением!</div>
                                <div class="feedback__input-wrapper">
                                    <div class="feedback__input">
                                        <input type="text" placeholder="имя">
                                    </div>
                                    <div class="feedback__input">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="feedback__input">
                                        <textarea placeholder="Комментарий"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback__bottom">
                                <div class="feedback__bottom-inner">
                                    <div class="btn-wrapper">
                                        <input type="submit" class="btn btn_check-yellow" value="Оставить заявку">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="free-audit__detail detail">
                    <div class="detail-list">

                        <div class="detail-list__item">
                            <div class="detail-list__icon"></div>
                            <div class="detail-list__text">
                                <div class="detail-list__label">Хотите узнать, как мы можем помочь вашему бизнесу?</div>
                                <div class="detail-list__desc">
                                    Заполните форму заявки, и мы предоставим вам бесплатный аудит вашего сайта и коммерческое предложение, которое поможет вам начать успешное продвижение.
                                </div>
                            </div>
                        </div>

                        <div class="detail-list__item">
                            <div class="detail-list__icon"></div>
                            <div class="detail-list__text">
                                <div class="detail-list__label">Доверьте свой бизнес профессионалам! </div>
                                <div class="detail-list__desc">
                                    "ZapadSEO" - ваш путь к успеху в мире англоязычных сайтов. Начните привлекать больше клиентов и увеличивать прибыль с нами.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="detail-carts">

                        <div class="detail-carts__item detail-carts__item_blue">
                            <div class="detail-carts__header">
                                <div class="detail-carts__num">16054</div>
                                <div class="detail-carts__icon"></div>
                            </div>
                            <div class="detail-carts__footer">
                                Ключевых слов выведено в топ
                            </div>
                        </div>

                        <div class="detail-carts__item detail-carts__item_blue">
                            <div class="detail-carts__header">
                                <div class="detail-carts__num">1000</div>
                                <div class="detail-carts__icon"></div>
                            </div>
                            <div class="detail-carts__footer">
                                Счастливых клиентов
                            </div>
                        </div>
                        <div class="detail-carts__item detail-carts__item_yellow">
                            <div class="detail-carts__header">
                                <div class="detail-carts__num">100%</div>
                                <div class="detail-carts__icon"></div>
                            </div>
                            <div class="detail-carts__footer">
                                Процент удовлетворенности нашими услугами
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- END Бесплатный аудит -->


</div>

<?php get_footer(); ?>