<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" media="all" href="https://storage.googleapis.com/static-webapp-220401-prod/static/css/style-v3.6cdd6898172e.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/apple-touch-icon.a348381cd490.png?v=gAa6AEel3x">
    <link rel="icon" type="image/png" sizes="32x32" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/favicon-32x32.bbec3ad5d0d0.png?v=gAa6AEel3x">
    <link rel="icon" type="image/png" sizes="16x16" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/favicon-16x16.6d35ef5acfb2.png?v=gAa6AEel3x">
    <link rel="manifest" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/site.d7bca03eb860.webmanifest?v=gAa6AEel3x">
    <link rel="mask-icon" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/safari-pinned-tab.419415add3f1.svg?v=gAa6AEel3x" color="#102039">
    <link rel="shortcut icon" href="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/favicon.c554d9eff063.ico?v=gAa6AEel3x">
    <meta name="apple-mobile-web-app-title" content="Assets Cryptoview">
    <meta name="application-name" content="Assets Cryptoview">
    <meta name="msapplication-TileColor" content="#f3f9ff">
    <meta name="msapplication-config" content="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/browserconfig.e65075b0e7e5.xml?v=gAa6AEel3x">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,600&amp;display=swap" rel="stylesheet">
    <title>Assets Cryptoview - Compound Your Crypto</title>
    <meta name="description" content="Assets Cryptoview helps investors compound their cryptocurrency investments by participating in staking or lending.">


</head>

<body class="">


<header class="Top Container">
    <a href="{{ route('index') }}" class="Logo">Assets Cryptoview</a>
    <input id="mobmenu-toggle" type="checkbox">
    <label for="mobmenu-toggle" class="Nav-Ham">
        <span class="Nav-Ham__lines"></span>
    </label>
    <nav class="Nav">

        <ul class="Nav__menu js-top-menu">
            <li class="Nav__item">
                <a class="Nav__link" href="{{ route('login') }}">Staking</a>
            </li>
            <li class="Nav__item">
                <a class="Nav__link" href="{{ route('about') }}">About</a>
            </li>

            <li class="Nav__pipe"></li>

            <li class="Nav__item">
                <span class="Nav__link Nav__link--dropdown">Ethereum</span>
                <ul class="Nav__dropdown-menu Nav-Dropdown">
                    <li class="Nav-Dropdown__item"><a class="Nav-Dropdown__link"
                                                      href="{{ route('login') }}">ETH2
                            Staking</a></li>
                    <li class="Nav-Dropdown__item"><a class="Nav-Dropdown__link"
                                                      href="{{ route('login') }}" target="_blank">Staked
                            ETH Trust</a></li>
                </ul>
            </li>
            <li class="Nav__item">
                <a class="Nav__link" href="{{ route('login') }}">Yields</a>
            </li>

            <li class="Nav__pipe"></li>
            <li class="Nav__item">

                <a class="Nav__link Nav__link--auth" href="{{ route('login') }}">Login</a>

            </li>
            <li class="Nav__item">
                <a href="{{ route('register') }}"  class="Btn Btn--indigo Btn--invert  Nav__create-account" title="Create Account">Create Account</a>
            </li>
        </ul>
    </nav>
</header>


@yield('content')

<script>
    let body = document.querySelector("body");
    const btn = document.querySelector(".js-close-state_of_staking_2021_q3");
    setTimeout(function (){
        body.classList.add("Alt-banner");
    }, 750);

    btn.addEventListener('click', (e) => {
        fetch("close-banner/state_of_staking_2021_q3/index.html", {
            method: 'POST',
            headers: { "X-CSRFToken": 'gXl9Lpxr1Rv1OPKUmI9hTqfsXHWSWyhJbYGjgeaZJRb9IjIMlx610BR6CHZDIiGw' }
        })
            .then(res => res.json())
            .then(text => {
                console.log(text)
                body.classList.remove("Alt-banner");
            })
            .catch(reason => {
                console.log(reason);
            });
    })
</script>

<footer class="Footer Container">
    <div class="Footer__menu">
        <div class="Footer__logo">Assets Cryptoview</div>

        <div class="Footer__corporate">
            <h4 class="Footer__subheader">Corporate</h4>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('login') }}">Terms of Service</a></li>
                <li><a href="{{ route('login') }}">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="Footer__staking">
            <h4 class="Footer__subheader">Staking</h4>
            <div>

                <ul>
                    <li><a href="{{ route('login') }}" target="_blank">Ethereum Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Cardano Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Solana Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Polkadot Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Cosmos Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Tron Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Polygon Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Tezos Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Elrond Staking</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('login') }}" target="_blank">Mina Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Kusama Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">NEAR Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Helium Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">The Graph Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Flow Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Livepeer Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Injective Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Audius Staking</a></li>
                    <li><a href="{{ route('login') }}" target="_blank">Skale Staking</a></li>
                </ul>

            </div>
        </div>
        <div class="Footer__buttons">



            <a href="{{ route('login') }}"  class="Btn Btn--indigo   " title="Login">Login</a>
            <a href="{{ route('login') }}"  class="Btn Btn--indigo Btn--invert  " title="Create Account">Create Account</a>
        </div>
        <div class="Footer__footer">
            <div class="Footer__copyright">2022 &copy; Assets Cryptoview</div>

        </div>
    </div>
</footer>

<div class="jGrowl-messages"></div>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="http://js.hs-scripts.com/6693156.js"></script>
<!-- End of HubSpot Embed Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37818528-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-37818528-4');
</script>
<script>
    $('.js-btn-close-msg').on('click', function (e) {
        $(this).parents('.js-message').fadeOut();
    })
</script>
<script>
    var openMenuBtn = $('.js-show-menu'),
        navMenu = $('.js-nav-menu');
    openMenuBtn.click(function (e) {
        navMenu.toggleClass('Nav__menu--collapse');
    })
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://storage.googleapis.com/static-webapp-220401-prod/static/js/accordion.16447f516a1f.js"></script>
<script src="https://storage.googleapis.com/static-webapp-220401-prod/static/js/eth2_status_chart.f6b1fa5331be.js"></script>
<script>
    $('.js-assets-switcher').click(function () {
        let self = $(this);
        $('.js-assets-switcher').removeClass('active');
        self.addClass('active');
        $('.Assets__grid').removeClass('active');
        $(`.js-${self.data('slug')}`).addClass('active');
    })
</script>

<script src="//code.tidio.co/x1bhyvj5fwdfbx1ckvqprmgyugakikqi.js" async></script>
</body>

<!-- Mirrored from staked.us/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 05:10:50 GMT -->
</html>
