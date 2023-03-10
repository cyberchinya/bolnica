@section('title')
    БУЗ УР "Сюмсинская районная больница МЗ УР"
    @endsection
    <!DOCTYPE html>
    <body lang="ru">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="Сюмсинская районная больница">
        <title>@yield('title')</title>

        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('assets/img/herb3.png') }}" rel="icon">
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Версия для слепых -->
        <link href="{{ asset('assets/sleep/css/special.min.css') }}">
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>
    @yield('styles')
    <body>
    <!-- ======= верхний самый хедер======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i><a href="mailto:">sudm1502@udm.net (секретарь), sumscrb2@udmnet.ru (метод.
                    кабинет) </a>
                <i class="bi bi-phone"></i> Приемная 8 (34152) 2-12-38
                <i class="bi bi-phone"></i> Регистратура : 8(3412) 27-14-60
            </div>

            <img id="specialButton" style="cursor:pointer;" src="{{ asset('assets/img/eye.png') }}"
                 alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ"/>
        </div>
    </div>
    <!-- ======= конец верхний самый хедер======= -->
    <!-- ======= Header ======= -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <div class="container">
                <img src="{{ asset('assets/img/herb3.png') }}" alt="герб Удмуртии" title="герб Удмуртии" class="logo me-auto" width="50px" height="50px">
            </div>
            <div class="container col-lg-4">
                <div class="logos">
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo me-auto"  width="250px" height="50px">
                </div>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>

                    <li><a class="nav-link" href="/">Главная</a></li>
                    <li><a class="nav-link" href="{{ route('news') }}">Новости</a></li>
                    <li class="dropdown"><span>Услуги</span>
                        <ul>
                            <li><a href="{{ route('services') }}">Тарифы на платные медицинские услуги</a></li>
                            <li><a href="#">Перечень специалистов оказывающих платные услуги</a></li>
                            <li><a href="#">Порядок оказания платных услуг</a></li>
                        </ul>
                    <li class="dropdown"><a href="#"><span>О больнице</span></a>
                        <ul>
                            <li><a href="{{ route('adminiboln') }}">Администрация</a></li>
                            <li><a href="{{ route('structura') }}">Структура клиники</a></li>
                            <li><a href="{{ route('manager') }}">Список заведующих отделениями</a></li>
                            <li><a href="{{ route('ourdoctor') }}">Наши врачи</a></li>
                            <li><a href="{{ route('vakancy') }}">Вакансии</a></li>
                            <li><a href="{{ route('norm') }}">Нормативно-правовые документы</a></li>
                            <li><a href="{{ route('gosreestr') }}">Лист записи единого гос реестра</a></li>
                            <li><a href="#">Охрана труда</a></li>
                            <li><a href="#">Лицензии</a></li>
                            <li><a href="#">О медицинских работниках медицинской организации</a></li>
                            <li><a href="#">Ведомость результатов проведения оценки условий труда</a></li>
                            <li><a href="#">Политика обработки и защиты персональных данных</a></li>
                            <li><a href="#">Перечень обслуживаемых адресов</a></li>
                            <li><a href="#">Страховые медицинские организации c которыми заключены договора</a></li>
                            <li><a href="#">Сведения о государственной регистрации и об учредителе</a></li>
                            <li><a href="#">Учредительные документы</a></li>
                        </ul>
                    <li class="dropdown"><a href="#"><span>Пациентам</span></a>
                        <ul>
                            <li><a href="#">Информация</a></li>
                            <li><a href="#">Обратная связь</a></li>
                            <li><a href="#">Вопросы и ответы</a></li>
                            <li><a href="{{ route('thanks') }}">Спасибо доктор</a></li>
                            <li><a class="nav-link scrollto" href="{{ route('faq') }}">Часто задаваемые
                                    вопросы</a></li>
                            <li><a href="#">График работы</a></li>
                            <li><a href="{{ route('korupcia') }}">Антикоррупционная деятельность</a></li>
                            <li><a href="#">Диспансеризация</a></li>
                            <li><a href="#">Грипп</a></li>
                            <li><a href="#">COVID 19</a></li>
                            <li><a href="#">Карта сайта</a></li>
                        </ul>
                    <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Добро пожаловать</h1>
            <h2>БУЗ УР "Сюмсинская районная больница МЗ УР"</h2>
        </div>
    </section>
    <body>
    <div class="container mt-lg-5 pt-5">
        <div class="personal_block__title line">
            <h2 class="h2">О персональных данных пользователей и cookie файлов</h2>

    </body>
    @include('layouts.footer')
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- версия для слепых -->
    <script src="{{ asset('assets/sleep/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/sleep/js/uhpv-full.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

    @yield('scripts')
    </body>
