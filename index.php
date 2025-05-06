<?php
    require "assets/connect/header.html";
?>
        <section id="introduction" class="introduction">
            <div class="introduction__video-wrapper">
                <video src="assets/video/vecteezy_yellow-mountain-or-huangshan-mountain-china_2021671.mp4"
                    class="introduction__video" :autoplay="!isTabletWidth" loop muted></video>
                <div class="container introduction__container">
                    <div class="introduction__content">
                        <h1 class="introduction__text">
                            Насладись прогулкой в горах с командой единомышленников
                        </h1>
                        <div class="introduction__block">
                            <span class="introduction__block__close">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="introduction__block__close-icon">
                                    <path d="M1.4 14L0 12.6L5.6 7L0 1.4L1.4 0L7 5.6L12.6 0L14 1.4L8.4 7L14 12.6L12.6 14L7 8.4L1.4 14Z" fill="white"/>
                                </svg>                                    
                            </span>
                            <ul class="introduction__list">
                                <li class="introduction__item">
                                    <v-select :options="tours" label="title" v-model="tour.location" placeholder="Локация для тура"></v-select>
                                    <span>
                                        Выберите из списка
                                    </span>
                                </li>
                                <li class="introduction__item">
                                    <div>
                                        <el-date-picker
                                        v-model="tour.Date"
                                        type="date"
                                        placeholder="Укажите дату"
                                        class="introduction__date-picker"
                                        />
                                    </div>
                                    <span>
                                        Укажите дату
                                    </span>
                                </li>
                                <li class="introduction__item">
                                    <v-select :options="participants" v-model="tour.total_users" label="title" placeholder="Участники"></v-select>
                                    <span>
                                        Минимум 4 человека
                                    </span>
                                </li>
                            </ul>                           
                                <button class="introduction__btn secondary-btn" @click="FindATour">Найти программу</button>
                        </div>
                        <button class="button__program-menu">
                            Меню программ
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-hike">
            <div class="about-hike__content">
                <div class="about-hike__video-demonstration">
                    <div class="about-hike__back-image__wrapper">
                        <img src="assets/images/background-image-section2.jpg" alt="" class="about-hike__back-image">
                    </div>
                    <div class="about-hike__video__wrapper">
                        <video src="assets/video/175357-853206077_small.mp4" :autoplay="!isTabletWidth" :controls="!isPcWidth" loop muted class="about-hike__video"></video>
                    </div>
                </div>
                <div class="about-hike__information">
                    <div class="about-hike__header">
                        <h5 class="about-hike__heading">
                            о нашем походе
                        </h5>
                        <h4 class="about-hike__subheading">
                            Исследуйте все горные массивы <br> мира вместе с нами
                        </h4>
                    </div>
                    <p class="about-hike__description">
                        Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur"и занялся его поисками в классической латинской литературе.
                    </p>
                    <a href="/tourProgram.php" class="about-hike__button-link">
                        <button class="about-hike__button">
                            Программа тура
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <section class="best-programs">
            <div class="best-programs__content">
                <div class="best-programs__information">
                    <div class="best-programs__header">
                        <h5 class="best-programs__heading">
                            наше предложение
                        </h5>
                        <h4 class="best-programs__subheading">
                            Лучшие программы для тебя
                        </h4>
                    </div>
                    <p class="best-programs__description">
                        Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа.
                    </p>
                    <div class="best-programs__advantages">
                        <div class="best-programs__advantage">
                            <div class="best-programs__icon__wrapper">
                                <img src="assets/icons/Group 16.png" alt="" class="best-programs__icon">
                            </div>
                            <div class="best-programs__definition">
                                <h5 class="best-programs__advantage-name">
                                    Опытный гид
                                </h5>
                                <p class="best-programs__advantage-description">
                                    Для современного мира базовый вектор развития предполагает независимые способы реализации соответствующих условий активизации.
                                </p>
                            </div>
                        </div>
                        <div class="best-programs__advantage">
                            <div class="best-programs__icon__wrapper">
                                <img src="assets/icons/Group 17.png" alt="" class="best-programs__icon">
                            </div>
                            <div class="best-programs__definition">
                                <h5 class="best-programs__advantage-name">
                                    Безопасный поход
                                </h5>
                                <p class="best-programs__advantage-description">
                                    Для современного мира базовый вектор развития предполагает независимые способы реализации соответствующих условий активизации.
                                </p>
                            </div>
                        </div>
                        <div class="best-programs__advantage">
                            <div class="best-programs__icon__wrapper">
                                <img src="assets/icons/Group 18.png" alt="" class="best-programs__icon">
                            </div>
                            <div class="best-programs__definition">
                                <h5 class="best-programs__advantage-name">
                                    Лояльные цены
                                </h5>
                                <p class="best-programs__advantage-description">
                                    Для современного мира базовый вектор развития предполагает независимые способы реализации соответствующих условий активизации.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="/price.php" class="best-programs__button-link">
                        <button class="best-programs__button">
                            Стоимость программ
                        </button>
                    </a>
                </div>
                <div class="best-programs-swiper" v-show="!isSmallTabletWidth">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/2477527220820f7569fa7544d5287ff1.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/7564a42e25a2403fdc7819acba9bc9f0.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/4047889565df87931dddd4b41e638af5.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/b4fdc01696d52b09bfeecbcd3e2a83eb.jpg" alt="" class="best-programs__photo">
                        </div>
                    </div>
                </div>
                <div id="best-programs-swiper" class="best-programs-swiper swiper" v-show="isSmallTabletWidth">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/2477527220820f7569fa7544d5287ff1.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/7564a42e25a2403fdc7819acba9bc9f0.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/4047889565df87931dddd4b41e638af5.jpg" alt="" class="best-programs__photo">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/b4fdc01696d52b09bfeecbcd3e2a83eb.jpg" alt="" class="best-programs__photo">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
        <section class="best-destinations">
            <div class="best-destinations__content">
                <div class="best-destinations__header">
                    <h5 class="best-destinations__heading">
                        по версии отдыхающих
                    </h5>
                    <h4 class="best-destinations__subheading">
                        Лучшие направления
                    </h4>
                </div>
                <div class="best-destinations__destinations">
                    <div class="best-destinations__destination">
                        <img src="assets/images/39504f3a781b84f1a32907d478fae892.jpg" alt="" class="best-destinations__image">
                        <div class="best-destinations__information">
                            <div class="best-destinations__wrapper-under-information">
                                <div class="best-destinations__under-information">
                                    <h5 class="best-destinations__under-information__heading">
                                        Озеро возле гор
                                    </h5>
                                    <h6 class="best-destinations__under-information__subheading">
                                        романтическое приключение
                                    </h6>
                                </div>
                                <span class="best-destinations__wrapper-price">
                                    <h5 class="best-destinations__price">
                                        480 $
                                    </h5>
                                </span>
                            </div>
                            <div class="best-destinations__additional-information">
                                <p class="best-destinations__text">
                                    Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur"и занялся его поисками в классической латинской литературе.
                                </p>
                                <a href="/tourProgram.php">
                                    <button class="best-destinations__additional-information-button">
                                        Программа тура
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="best-destinations__destination">
                        <img src="assets/images/b9d7452802df43f445a596a19742322c.jpg" alt="" class="best-destinations__image">
                        <div class="best-destinations__information">
                            <div class="best-destinations__wrapper-under-information">
                                <div class="best-destinations__under-information">
                                    <h5 class="best-destinations__under-information__heading">
                                        Ночь в горах
                                    </h5>
                                    <h6 class="best-destinations__under-information__subheading">
                                        в компании друзей
                                    </h6>
                                </div>
                                <span class="best-destinations__wrapper-price">
                                    <h5 class="best-destinations__price">
                                        500 $
                                    </h5>
                                </span>
                            </div>
                            <div class="best-destinations__additional-information">
                                <p class="best-destinations__text">
                                    Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur"и занялся его поисками в классической латинской литературе.
                                </p>
                                <a href="/tourProgram.php">
                                    <button class="best-destinations__additional-information-button">
                                        Программа тура
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="best-destinations__destination">
                        <img src="assets/images/d78d17f8ab62b1d6fcdd562a3ada64e7.jpg" alt="" class="best-destinations__image">
                        <div class="best-destinations__information">
                            <div class="best-destinations__wrapper-under-information">
                                <div class="best-destinations__under-information">
                                    <h5 class="best-destinations__under-information__heading">
                                        Йога в горах
                                    </h5>
                                    <h6 class="best-destinations__under-information__subheading">
                                        для тех, кто заботится о себе
                                    </h6>
                                </div>
                                <span class="best-destinations__wrapper-price">
                                    <h5 class="best-destinations__price">
                                        230 $
                                    </h5>
                                </span>
                            </div>
                            <div class="best-destinations__additional-information">
                                <p class="best-destinations__text">
                                    Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur"и занялся его поисками в классической латинской литературе.
                                </p>
                                <a href="/tourProgram.php">
                                    <button class="best-destinations__additional-information-button">
                                        Программа тура
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="best-destinations__button">
                    Рейтинг направлений
                </button>
            </div>
        </section>
        <section class="photo-report">
            <div class="photo-report__content">
                <div class="photo-report__header">
                    <h5 class="photo-report__heading">
                        фото-отчет
                    </h5>
                    <h4 class="photo-report__subheading">
                        Делимся впечатлениями
                    </h4>
                </div>
                <div class="photo-report-swiper" v-show="!isSmallTabletWidth">
                    <div class="photo-report__photos__wrapper swiper-wrapper">
                        <div class="photo-report__first-teamplate">
                            <div class="photo-report__wrapper-photo-one swiper-slide">
                                <img src="assets/images/25651685e316ac9a59c0aa07a74285b4.jpg" alt="" class="photo-report__photo">
                            </div>
                            <div class="photo-report__wrapper-photo-two swiper-slide">
                                <img src="assets/images/1c6a5cc9e2817042d877a0e18c760098.jpg" alt="" class="photo-report__photo">
                            </div>
                            <div class="photo-report__wrapper-photo-three swiper-slide">
                                <img src="assets/images/5bd0188c6d0331440b81fa037df7b935.jpg" alt="" class="photo-report__photo">
                            </div>
                        </div>
                        <div class="photo-report__second-teamplate">
                            <div class="photo-report__wrapper-photo-four swiper-slide">
                                <img src="assets/images/59e7327547e4fecc840e2312bdffde8b.jpg" alt="" class="photo-report__photo">
                            </div>
                            <div class="photo-report__wrapper-photo-five swiper-slide">
                                <img src="assets/images/1756e88a24adc420ec28b03f18923451.jpg" alt="" class="photo-report__photo">
                            </div>
                            <div class="photo-report__wrapper-photo-six swiper-slide">
                                <img src="assets/images/11379eff076d90a786170fd2e331c0e5.jpg" alt="" class="photo-report__photo">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="photo-report-swiper" class="photo-report-swiper swiper" v-show="isSmallTabletWidth">
                    <div class="photo-report__photos__wrapper swiper-wrapper">
                        <div class="photo-report__wrapper-photo-one swiper-slide">
                            <img src="assets/images/25651685e316ac9a59c0aa07a74285b4.jpg" alt="" class="photo-report__photo">
                        </div>
                        <div class="photo-report__wrapper-photo-two swiper-slide">
                            <img src="assets/images/1c6a5cc9e2817042d877a0e18c760098.jpg" alt="" class="photo-report__photo">
                        </div>
                        <div class="photo-report__wrapper-photo-three swiper-slide">
                            <img src="assets/images/5bd0188c6d0331440b81fa037df7b935.jpg" alt="" class="photo-report__photo">
                        </div>
                        <div class="photo-report__wrapper-photo-four swiper-slide">
                            <img src="assets/images/59e7327547e4fecc840e2312bdffde8b.jpg" alt="" class="photo-report__photo">
                        </div>
                        <div class="photo-report__wrapper-photo-five swiper-slide">
                            <img src="assets/images/1756e88a24adc420ec28b03f18923451.jpg" alt="" class="photo-report__photo">
                        </div>
                        <div class="photo-report__wrapper-photo-six swiper-slide">
                            <img src="assets/images/11379eff076d90a786170fd2e331c0e5.jpg" alt="" class="photo-report__photo">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <button class="photo-report__button">
                    Наш pinterest
                </button>
            </div>
        </section>
        <section class="prompt-modal">
            <div class="prompt-modal__content">
                <div class="prompt-modal__header">
                    <h2 class="prompt-modal__heading">
                        Ближайшие туры
                    </h2>
                    <span class="prompt-modal__close">
                        ✕ 
                    </span>
                </div>
                <div class="prompt-modal__table">
                    <div class="prompt-modal__table-location">
                        <h3 class="table-location">
                            Локация
                        </h3>
                        <h3 class="table-location">
                            Закопане (Польша)
                        </h3>
                        <h3 class="table-location">
                            Дурмитор (Черногория)
                        </h3>
                        <h3 class="table-location">
                            Гудаури (Грузия)
                        </h3>
                        <h3 class="table-location">
                            Чимбулак (Казахстан)
                        </h3>
                        <h3 class="table-location">
                            Улудаг (Турция)
                        </h3>
                        <h3 class="table-location">
                            Венген (Швейцария)
                        </h3>
                    </div>
                    <span class="prompt-modal__separator">
                    </span>
                    <div class="prompt-modal__table-date">
                        <h3 class="table-date">
                            Дата
                        </h3>
                        <h3 class="table-date">
                            10.05.2025
                        </h3>
                        <h3 class="table-date">                	
                            15.05.2025
                        </h3>
                        <h3 class="table-date">
                            25.05.2025
                        </h3>
                        <h3 class="table-date">
                            03.06.2025
                        </h3>
                        <h3 class="table-date">
                            10.06.2025
                        </h3>
                        <h3 class="table-date">
                            20.06.2025
                        </h3>
                    </div>
                    <span class="prompt-modal__separator">
                    </span>
                    <div class="prompt-modal__table-participants">
                        <h3 class="table-participants">
                            Кол-во участников:
                        </h3>
                        <h3 class="table-participants__mob">
                            Участники
                        </h3>
                        <h3 class="table-participants">
                            6
                        </h3>
                        <h3 class="table-participants">
                            4
                        </h3>
                        <h3 class="table-participants">
                            10
                        </h3>
                        <h3 class="table-participants">
                            8
                        </h3>
                        <h3 class="table-participants">
                            10
                        </h3>
                        <h3 class="table-participants">
                            6
                        </h3>
                    </div>
                </div>
            </div>

        </section>
<?php
    require "assets/connect/footer.html";
?>
