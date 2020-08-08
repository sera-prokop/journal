<!DOCTYPE html>
<html class="page  no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <title>Брестский ПКВП — Экспорт</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="dev/build/css/style.css">
    <script>
        // Браузер и ОС
        document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
        function cth(c){document.documentElement.classList.add(c)}
        'ontouchstart' in window?cth('touch'):cth('no-touch');
        if(typeof InstallTrigger!=='undefined')cth('firefox');
        if(/constructor/i.test(window.HTMLElement)||(function(p){return p.toString()==="[object SafariRemoteNotification]"})(!window['safari']||(typeof safari!=='undefined'&&safari.pushNotification)))cth('safari');
        if(/*@cc_on!@*/false||!!document.documentMode)cth('ie');
        if(!(/*@cc_on!@*/false||!!document.documentMode)&&!!window.StyleMedia)cth('edge');
        if(!!window.chrome&&(!!window.chrome.webstore||!!window.chrome.runtime))cth('chrome');
        if(~navigator.appVersion.indexOf("Win"))cth('windows');
        if(~navigator.appVersion.indexOf("Mac"))cth('osx');
        if(~navigator.appVersion.indexOf("Linux"))cth('linux');

        // Добавление 1vh (использование: height: 100vh; height: calc(var(--vh, 1vh) * 100);) для фикса 100vh на мобилках
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        window.addEventListener('resize', () => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });

        // Добавление css-custom-scroll-size для борьбы с проблемами скроллируемых блоков
        const outer = document.createElement('div');
        const inner = document.createElement('div');
        outer.style.overflow = 'scroll';
        outer.classList.add('scrollbar');
        document.body.appendChild(outer);
        outer.appendChild(inner);
        const scrollbarSize = outer.offsetWidth - inner.offsetWidth;
        document.body.removeChild(outer);
        document.documentElement.style.setProperty('--css-custom-scroll-size', `${scrollbarSize}px`);
    </script>
</head>

<body><noscript>У вас отключен JavaScript. Это пугает.</noscript>
<div class="page__inner">
    <div class="page__content">
        <header class="page-header" role="banner">
            <div class="page-header__inner"><a class="logo" href="/"><img src="dev/build/img/logo_2.svg" alt="Logo" width="64" height="80"></a>
                <div class="page-header__wrap">
                    <nav class="main-nav" id="nav">
                        <!--                    <button class="burger main-nav__toggler" aria-label="Показать главное меню" data-target-id="nav" data-target-class-toggle="main-nav&#45;&#45;open"><span>Показать главное меню</span></button>-->
                        <ul class="main-nav__list">
                            <li class="main-nav__item"><a class="main-nav__link" href="index.php">Импорт</a></li>
                            <li class="main-nav__item main-nav__item--active"><a class="main-nav__link" href="export.php">Экспорт</a></li>
                            <li class="main-nav__item"><a class="main-nav__link" href="transit.php">Транзит</a></li>
                            <li class="main-nav__item"><a class="main-nav__link" href="detention.php">Задержание</a></li>
                        </ul>
                    </nav>
                    <div class="logout"><a class="logout__link" href="logout.php">Выход</a></div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="container__inner"><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScwAftvrG3cuUf91f1iaHXPQyJ6rJk7gx71cqQnkkh5ClUnvg/viewform?embedded=true" width="1000" height="3900" frameborder="0" marginheight="0" marginwidth="0" onload="loaded()">Загрузка…</iframe></div>
        </div>
    </div>
    <div class="page__footer-wrapper">
        <footer class="page-footer" role="contentinfo">
            <div class="page-footer__inner">

            </div>
        </footer>
    </div>
</div>
<script src="js/bundle.js"></script>

<script>
    var loadCounter = 0;
    var iframeElement = document.querySelector('iframe');

    var loaded = function() {

        loadCounter += 1;

        iframeElement.setAttribute('height', '3900px');

        if (loadCounter % 2 == 0) {

            iframeElement.setAttribute('height', '500px');
            window.scrollTo(0, 0)

        }

    }

</script>

</body>

</html>
