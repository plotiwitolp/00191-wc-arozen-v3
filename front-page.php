<?php get_header(); ?>

<?php
$temp_uri = get_template_directory_uri();
$home_uri = get_home_url();
?>

<div class="wrapper home">



    <div class="top">
        <div class="container">
            <div class="top__inner">

                <div class="top__first">
                    <h1 class="top__title">
                        <div class="top__title-1">Продвижение</div>
                        <div class="top__title-2"><span class="yellow">англоязычных</span> сайтов</div>
                    </h1>
                    <div class="top__first-item-wrapper">
                        <div class="top__first-item">
                            <div class="top__first-item-icon">
                                <img src="<?php echo $temp_uri ?>/assets/img/home/icon-1.svg" alt="">
                            </div>
                            <div class="top__first-item-desc">
                                Наша команда специалистов занимается раскруткой сайтов на английском языке уже много лет.
                            </div>
                        </div>
                        <div class="top__first-item">
                            <div class="top__first-item-icon">
                                <img src="<?php echo $temp_uri ?>/assets/img/home/icon-1.svg" alt="">
                            </div>
                            <div class="top__first-item-desc">
                                Мы не просто продвигаем сайты, мы создаем комплексные стратегии, которые работают в поисковых системах.
                            </div>
                        </div>
                    </div>
                    <div class="top__first-tag-wrapper">
                        <span>Marketing</span>
                        <span>SEO</span>
                        <span>Email</span>
                        <span>Website</span>
                        <span>Analysis</span>
                    </div>
                </div>
                <div class="top__second">

                    <form class="feedback" action="">
                        <div class="feedback__inner">
                            <div class="feedback__top">
                                <div class="feedback__label">Заполните форму заявки и мы вернемся с предложением!</div>
                                <div class="feedback__input-wrapper">
                                    <div class="feedback__input">
                                        <input type="text" placeholder="Имя">
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

            </div>
        </div>
    </div>



    <!-- uslugi -->
    <?php if (get_field('uslugi_lejbl')) { ?>
        <!-- START УСЛУГИ -->
        <div class="block">
            <div class="container">
                <div class="block__label"><?php the_field('uslugi_lejbl'); ?></div>
                <h2 class="block__title mw740"><?php the_field('uslugi_zagolovok'); ?></h2>

                <div class="price">

                    <?php
                    if (have_rows('uslugi_kartochki')) :
                        $i = 1;
                        while (have_rows('uslugi_kartochki')) : the_row();

                            the_sub_field('sub_field_name');
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



    <!-- START Кейсы -->
    <div class="block">
        <div class="container">
            <div class="block__label">Кейсы</div>
            <h2 class="block__title block__title_flex">
                <div>Делаем успешные проекты</div>
                <div>
                    <a href="#">
                        <div class="btn btn_arrow-black">Все кейсы</div>
                    </a>
                </div>
            </h2>

            <div class="cases-2">

                <div class="cases-2__item cases-2__item_big">
                    <div class="cases-2__inner">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/image-1.png" alt="">
                        <h3 class="cases-2__title">Crypto Agency Marketing</h3>
                        <div class="cases-2__bottom">
                            <div class="cases-2__tags">
                                <span>Marketing</span>
                                <span>SEO</span>
                            </div>
                            <div class="cases-2__btn">
                                <div class="btn btn_arrow-yellow">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cases-2__item cases-2__item_double">
                    <div class="cases-2__inner">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/image-2.png" alt="">
                        <h3 class="cases-2__title">Crypto Agency Marketing</h3>
                        <div class="cases-2__bottom">
                            <div class="cases-2__tags">
                                <span>Marketing</span>
                                <span>SEO</span>
                            </div>
                            <div class="cases-2__btn">
                                <div class="btn btn_arrow-yellow">Подробнее</div>
                            </div>
                        </div>
                    </div>
                    <div class="cases-2__inner">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/image-2.png" alt="">
                        <h3 class="cases-2__title">Crypto Agency Marketing</h3>
                        <div class="cases-2__bottom">
                            <div class="cases-2__tags">
                                <span>Marketing</span>
                                <span>SEO</span>
                            </div>
                            <div class="cases-2__btn">
                                <div class="btn btn_arrow-yellow">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cases-2__item cases-2__item_big">
                    <div class="cases-2__inner">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/image-1.png" alt="">
                        <h3 class="cases-2__title">Crypto Agency Marketing</h3>
                        <div class="cases-2__bottom">
                            <div class="cases-2__tags">
                                <span>Marketing</span>
                                <span>SEO</span>
                            </div>
                            <div class="cases-2__btn">
                                <div class="btn btn_arrow-yellow">Подробнее</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END Кейсы -->



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



    <!-- START Для кого -->
    <div class="block block_yellow">
        <div class="container">
            <div class="block__label">Для кого</div>
            <h2 class="block__title">Кому подходит услуга продвижения на западных рынках</h2>

            <div class="forwhom">

                <div class="forwhom__item">
                    <div class="forwhom__header">
                        <div class="forwhom__icon">
                            <img src="<?php echo $temp_uri ?>/assets/img/home/forwhom/forwhom-icon-1.svg" alt="">
                        </div>
                        <div class="forwhom__counter counter"></div>
                    </div>
                    <h3 class="forwhom__title">Интернет-магазины</h3>
                    <div class="forwhom__desc">
                        Увеличиваем продажи товаров, повышаем конверсию и лояльность клиентов, снижаем стоимость привлечения покупателей
                    </div>
                </div>

                <div class="forwhom__item">
                    <div class="forwhom__header">
                        <div class="forwhom__icon">
                            <img src="<?php echo $temp_uri ?>/assets/img/home/forwhom/forwhom-icon-2.svg" alt="">
                        </div>
                        <div class="forwhom__counter counter"></div>
                    </div>
                    <h3 class="forwhom__title">Сайты услуг</h3>
                    <div class="forwhom__desc">
                        Привлекаем потенциальных заказчиков, увеличиваем количество заявок и звонков, повышаем доверие и улучшаем репутацию компании
                    </div>
                </div>

                <div class="forwhom__item">
                    <div class="forwhom__header">
                        <div class="forwhom__icon">
                            <img src="<?php echo $temp_uri ?>/assets/img/home/forwhom/forwhom-icon-3.svg" alt="">
                        </div>
                        <div class="forwhom__counter counter"></div>
                    </div>
                    <h3 class="forwhom__title">Корпоративные сайты</h3>
                    <div class="forwhom__desc">
                        Расширяем аудиторию и географию рынка, улучшаем восприятие и повышаем узнаваемость бренда, помогаем выделиться среди конкурентов
                    </div>
                </div>

                <div class="forwhom__item">
                    <div class="forwhom__header">
                        <div class="forwhom__icon">
                            <img src="<?php echo $temp_uri ?>/assets/img/home/forwhom/forwhom-icon-4.svg" alt="">
                        </div>
                        <div class="forwhom__counter counter"></div>
                    </div>
                    <h3 class="forwhom__title">Информационные ресурсы</h3>
                    <div class="forwhom__desc">
                        Увеличиваем посещаемость и вовлеченность аудитории, помогаем монетизировать трафик через рекламу или партнерские программы.
                    </div>
                </div>

                <div class="forwhom__item">
                    <div class="forwhom__header">
                        <div class="forwhom__icon">
                            <img src="<?php echo $temp_uri ?>/assets/img/home/forwhom/forwhom-icon-5.svg" alt="">
                        </div>
                        <div class="forwhom__counter counter"></div>
                    </div>
                    <h3 class="forwhom__title">Контентные проекты</h3>
                    <div class="forwhom__desc">
                        Привлекаем заинтересованных читателей, расширяем охват и влияние, улучшаем качество и релевантность контента
                    </div>
                </div>

                <!-- start не в цикле -->
                <div class="forwhom__item">
                    <h3 class="forwhom__title">Нужно продвижения на западных рынках ?</h3>
                    <div class="forwhom__bottom">
                        <div class="forwhom__btn-right">
                            <a href="#"></a>
                        </div>
                        <div class="forwhom__btn-left">
                            <div class="btn btn__check-yellow">Оставить заявку</div>
                        </div>
                    </div>
                </div>
                <!-- end не в цикле -->

            </div>


        </div>
    </div>
    <!-- END Для кого -->



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
            <h2 class="block__title">
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
                    <div class="blog__tags">
                        <span>Marketing</span>
                        <span>SEO</span>
                    </div>
                    <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                    <div class="blog__desc">
                        Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                    </div>
                    <div class="blog__footer">
                        <div class="blog__date"></div>
                        <div class="blog__btn">
                            <div class="btn btn_plus-blue">Подробнее</div>
                        </div>
                    </div>
                </div>
                <div class="blog__item">
                    <div class="blog__img">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/blog-image.png" alt="">
                    </div>
                    <div class="blog__tags">
                        <span>Marketing</span>
                        <span>SEO</span>
                    </div>
                    <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                    <div class="blog__desc">
                        Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                    </div>
                    <div class="blog__footer">
                        <div class="blog__date"></div>
                        <div class="blog__btn">
                            <div class="btn btn_plus-blue">Подробнее</div>
                        </div>
                    </div>
                </div>
                <div class="blog__item">
                    <div class="blog__img">
                        <img src="<?php echo $temp_uri ?>/assets/img/home/blog-image.png" alt="">
                    </div>
                    <div class="blog__tags">
                        <span>Marketing</span>
                        <span>SEO</span>
                    </div>
                    <h3 class="blog__title">Как проверить позиции сайта в поисковых системах</h3>
                    <div class="blog__desc">
                        Каждый оптимизатор, маркетолог и владелец бизнеса должен знать, какие позиции занимает его сайт по ключевым поисковым запросам. Для оптимизатора важно своевременно оценить...
                    </div>
                    <div class="blog__footer">
                        <div class="blog__date"></div>
                        <div class="blog__btn">
                            <div class="btn btn_plus-blue">Подробнее</div>
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
                                <div class="feedback__label"></div>
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
                                <input type="submit" class="btn btn_check-yellow" value="Оставить заявку">
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
                                <div class="detail-carts__icon">Ключевых слов выведено в топ</div>
                            </div>
                        </div>

                        <div class="detail-carts__item detail-carts__item_blue">
                            <div class="detail-carts__header">
                                <div class="detail-carts__num">1000</div>
                                <div class="detail-carts__icon">Счастливых клиентов</div>
                            </div>
                        </div>
                        <div class="detail-carts__item detail-carts__item_yellow">
                            <div class="detail-carts__header">
                                <div class="detail-carts__num">100%</div>
                                <div class="detail-carts__icon">Процент удовлетворенности нашими услугами</div>
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