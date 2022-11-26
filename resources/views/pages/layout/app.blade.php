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
    <meta name="apple-mobile-web-app-title" content="Staked">
    <meta name="application-name" content="Staked">
    <meta name="msapplication-TileColor" content="#f3f9ff">
    <meta name="msapplication-config" content="https://storage.googleapis.com/static-webapp-220401-prod/static/i/fav/browserconfig.e65075b0e7e5.xml?v=gAa6AEel3x">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,600&amp;display=swap" rel="stylesheet">
    <title>Staked - Compound Your Crypto</title>
    <meta name="description" content="Staked helps investors compound their cryptocurrency investments by participating in staking or lending.">
</head>

<body class="">




<header class="Top Container">
    <a href="index.html" class="Logo">Assets Cryptoview</a>
    <input id="mobmenu-toggle" type="checkbox">
    <label for="mobmenu-toggle" class="Nav-Ham">
        <span class="Nav-Ham__lines"></span>
    </label>
    <nav class="Nav">

        <ul class="Nav__menu js-top-menu">
            <li class="Nav__item">
                <a class="Nav__link" href="https://staking.staked.us/">Staking</a>
            </li>
            <li class="Nav__item">
                <a class="Nav__link" href="https://staking.staked.us/partners">Partners</a>
            </li>

            <li class="Nav__pipe"></li>

            <li class="Nav__item">
                <span class="Nav__link Nav__link--dropdown">Ethereum</span>
                <ul class="Nav__dropdown-menu Nav-Dropdown">
                    <li class="Nav-Dropdown__item"><a class="Nav-Dropdown__link"
                                                      href="https://staking.staked.us/ethereum-staking-options">ETH2
                            Staking</a></li>
                    <li class="Nav-Dropdown__item"><a class="Nav-Dropdown__link"
                                                      href="https://staking.staked.us/eth-trust" target="_blank">Staked
                            ETH Trust</a></li>
                </ul>
            </li>
            <li class="Nav__item">
                <a class="Nav__link" href="yields/index.html">Yields</a>
            </li>
            <li class="Nav__item">
                <span class="Nav__link Nav__link--dropdown">Research</span>
                <ul class="Nav__dropdown-menu Nav-Dropdown">
                    <li class="Nav-Dropdown__item"><a class="Nav-Dropdown__link"
                                                      target="_blank"
                                                      href="https://staking.staked.us/state-of-staking">State of Staking</a></li>
                </ul>
            </li>

            <li class="Nav__item">
                <a class="Nav__link" href="https://staked.zendesk.com/hc/">Support</a>
            </li>
            <li class="Nav__pipe"></li>
            <li class="Nav__item">

                <a class="Nav__link Nav__link--auth" href="v/login/index.html">Login</a>

            </li>
            <li class="Nav__item">


                <a href=v/register/index.html  class="Btn Btn--indigo Btn--invert  Nav__create-account" title="Create Account">Create Account</a>

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
        <div class="Footer__logo">Staked</div>

        <div class="Footer__resources">
            <h4 class="Footer__subheader">Resources</h4>
            <ul>
                <li><a href="https://staked.gitbook.io/staked/" target="_blank">Developer API</a></li>
                <li><a href="https://github.com/Stakedllc/" target="_blank">Github</a></li>
                <li><a href="https://staked.zendesk.com/hc/" target="_blank">Support</a></li>
            </ul>
        </div>
        <div class="Footer__corporate">
            <h4 class="Footer__subheader">Corporate</h4>
            <ul>
                <li><a href="about/index.html">About Us</a></li>
                <li><a href="terms/index.html">Terms of Service</a></li>
                <li><a href="privacy/index.html">Privacy Policy</a></li>
                <li><a href="governance/index.html">Governance</a></li>
            </ul>
        </div>
        <div class="Footer__staking">
            <h4 class="Footer__subheader">Staking</h4>
            <div>

                <ul>
                    <li><a href="https://staking.staked.us/ethereum-staking-options" target="_blank">Ethereum Staking</a></li>
                    <li><a href="https://staking.staked.us/cardano-staking" target="_blank">Cardano Staking</a></li>
                    <li><a href="https://staking.staked.us/solana-staking" target="_blank">Solana Staking</a></li>
                    <li><a href="https://staking.staked.us/polkadot-staking" target="_blank">Polkadot Staking</a></li>
                    <li><a href="https://staking.staked.us/cosmos-staking" target="_blank">Cosmos Staking</a></li>
                    <li><a href="https://staking.staked.us/tron-staking" target="_blank">Tron Staking</a></li>
                    <li><a href="https://staking.staked.us/matic-staking" target="_blank">Polygon Staking</a></li>
                    <li><a href="https://staking.staked.us/tezos-staking" target="_blank">Tezos Staking</a></li>
                    <li><a href="https://staking.staked.us/elrond-staking" target="_blank">Elrond Staking</a></li>
                </ul>
                <ul>
                    <li><a href="https://staking.staked.us/mina-staking" target="_blank">Mina Staking</a></li>
                    <li><a href="https://staking.staked.us/kusama-staking" target="_blank">Kusama Staking</a></li>
                    <li><a href="https://staking.staked.us/near-staking" target="_blank">NEAR Staking</a></li>
                    <li><a href="https://staking.staked.us/helium-staking" target="_blank">Helium Staking</a></li>
                    <li><a href="https://staking.staked.us/graph-staking" target="_blank">The Graph Staking</a></li>
                    <li><a href="https://staking.staked.us/flow-staking" target="_blank">Flow Staking</a></li>
                    <li><a href="https://staking.staked.us/livepeer-staking" target="_blank">Livepeer Staking</a></li>
                    <li><a href="https://staking.staked.us/injective-staking" target="_blank">Injective Staking</a></li>
                    <li><a href="https://staking.staked.us/audius-staking" target="_blank">Audius Staking</a></li>
                    <li><a href="https://staking.staked.us/skale-staking" target="_blank">Skale Staking</a></li>
                </ul>

            </div>
        </div>
        <div class="Footer__buttons">



            <a href=v/login/index.html  class="Btn Btn--indigo   " title="Login">Login</a>
            <a href=v/register/index.html  class="Btn Btn--indigo Btn--invert  " title="Create Account">Create Account</a>
        </div>
        <div class="Footer__footer">
            <div class="Footer__copyright">2022 &copy; Staked</div>
            <div class="Footer__social">
                <a title="Events" href="https://staking.staked.us/events" target="_blank"><svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="#fff"><path d="M63.978 14.167V7.638c0-1.791 1.473-3.265 3.264-3.265s3.265 1.474 3.265 3.265v6.529h6.528c5.373 0 9.794 4.421 9.794 9.793v52.231c0 5.372-4.421 9.793-9.794 9.793h-52.23c-5.373 0-9.794-4.421-9.794-9.793V23.96c0-5.372 4.421-9.793 9.794-9.793h6.528V7.638c0-1.791 1.474-3.265 3.265-3.265s3.264 1.474 3.264 3.265v6.529zM80.3 38.65H21.54v37.541a3.28 3.28 0 003.265 3.264h52.23a3.28 3.28 0 003.265-3.264zM50.92 70.213h-.003c-2.095 0-3.82-1.725-3.82-3.82 0-1.009.4-1.978 1.111-2.693a3.97 3.97 0 015.405 0 3.821 3.821 0 011.127 2.693 3.838 3.838 0 01-3.82 3.82zm16.322-.003a3.833 3.833 0 01-3.798-3.814c0-1.007.399-1.975 1.109-2.689a3.832 3.832 0 015.378 0 3.816 3.816 0 011.109 2.689 3.833 3.833 0 01-3.798 3.814zm-32.644-.003a3.83 3.83 0 01-3.795-3.811c0-1.007.399-1.973 1.108-2.687 1.477-1.467 3.897-1.467 5.373 0a3.811 3.811 0 011.109 2.687 3.83 3.83 0 01-3.795 3.811zm32.645-14.686c-2.094 0-3.817-1.724-3.817-3.818a3.818 3.818 0 011.107-2.691 3.948 3.948 0 015.401 0 3.817 3.817 0 011.11 2.691 3.836 3.836 0 01-3.801 3.818zm-32.644-.006h-.003a3.83 3.83 0 01-3.812-3.812c0-1.006.399-1.973 1.109-2.687a3.943 3.943 0 015.394 0 3.816 3.816 0 011.108 2.687 3.83 3.83 0 01-3.796 3.812zm16.322-.015h-.003a3.815 3.815 0 01-3.796-3.796c0-1.003.397-1.966 1.104-2.677a3.928 3.928 0 015.372 0 3.797 3.797 0 011.104 2.677c0 2.076-1.704 3.787-3.781 3.796zm19.586-34.804v1.632c0 1.791-1.474 3.264-3.265 3.264s-3.264-1.473-3.264-3.264v-1.632H37.862v1.632c0 1.791-1.473 3.264-3.264 3.264s-3.265-1.473-3.265-3.264v-1.632h-6.528a3.28 3.28 0 00-3.265 3.264v8.161H80.3V23.96a3.28 3.28 0 00-3.265-3.264z"/></svg> Events</a>
                <a title="Blog" href="https://blog.staked.us/blog" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="none"><path d="M12.125 15C8.231 15 5 18.231 5 22.125v55.75C5 81.769 8.231 85 12.125 85h55.75C71.769 85 75 81.769 75 77.875V60.281l19.125-19.093a3 3 0 000-4.25l-9.063-9.063A3 3 0 0082.906 27a3 3 0 00-2.094.875L75 33.688V22.124C75 18.231 71.769 15 67.875 15h-55.75zm0 6h55.75c.681 0 1.125.444 1.125 1.125v17.594L51.875 56.875A3 3 0 0051 59v9a3 3 0 003 3h9a3 3 0 002.125-.875L69 66.25v11.625c0 .681-.444 1.125-1.125 1.125h-55.75C11.444 79 11 78.556 11 77.875v-55.75c0-.681.444-1.125 1.125-1.125zm7.563 8A3.004 3.004 0 1020 35h40a3 3 0 100-6H20a3 3 0 00-.313 0zm63.25 5.25l4.812 4.813-3.219 3.218-4.812-4.812 3.219-3.219zM19.688 41A3.004 3.004 0 1020 47h35a3 3 0 100-6H20a3 3 0 00-.313 0zm55.78.719l4.813 4.812L61.75 65H57v-4.75l18.469-18.531zM19.689 53A3.004 3.004 0 1020 59h24a3 3 0 100-6H20a3 3 0 00-.313 0zm0 12A3.004 3.004 0 1020 71h24a3 3 0 100-6H20a3 3 0 00-.313 0z" fill="#F3F9FF"/></svg> Blog</a>
                <a title="Staked Github" href="https://github.com/Stakedllc/" target="_blank"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 1A10.89 10.89 0 001 11.77 10.79 10.79 0 008.52 22c.55.1.75-.23.75-.52v-1.83c-3.06.65-3.71-1.44-3.71-1.44a2.86 2.86 0 00-1.22-1.58c-1-.66.08-.65.08-.65a2.31 2.31 0 011.68 1.11 2.37 2.37 0 003.2.89 2.33 2.33 0 01.7-1.44c-2.44-.27-5-1.19-5-5.32a4.15 4.15 0 011.11-2.91 3.78 3.78 0 01.11-2.84s.93-.29 3 1.1a10.68 10.68 0 015.5 0c2.1-1.39 3-1.1 3-1.1a3.78 3.78 0 01.11 2.84A4.15 4.15 0 0119 11.2c0 4.14-2.58 5.05-5 5.32a2.5 2.5 0 01.75 2v2.95c0 .35.2.63.75.52A10.8 10.8 0 0023 11.77 10.89 10.89 0 0012 1z" fill="#fff"/></svg> Github</a>
                <a title="Staked Twitter" href="https://twitter.com/staked_us/" target="_blank"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.08 20A11.07 11.07 0 0019.52 9 8.092 8.092 0 0021 6.16a.44.44 0 00-.62-.51 1.88 1.88 0 01-2.16-.38 3.89 3.89 0 00-5.58-.17A4.13 4.13 0 0011.49 9C8.14 9.2 5.84 7.61 4 5.43a.43.43 0 00-.75.24 9.68 9.68 0 004.6 10.05A6.73 6.73 0 013.38 18a.45.45 0 00-.14.84A11 11 0 008.08 20z" fill="#fff"/></svg> Twitter</a>
                <a title="Join Chat" href="https://discord.gg/ddHep6E" target="_blank"><svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.228 10.423c-.559 0-1 .49-1 1.087 0 .598.451 1.088 1 1.088.558 0 .999-.49.999-1.088.01-.597-.44-1.087-1-1.087zm3.575 0c-.558 0-.999.49-.999 1.087 0 .598.45 1.088 1 1.088.558 0 .998-.49.998-1.088 0-.597-.44-1.087-.999-1.087z" fill="#fff"/><path d="M18.562 2.204H5.436a2.013 2.013 0 00-2.008 2.018v13.244c0 1.117.901 2.018 2.008 2.018h11.108l-.519-1.812 1.254 1.166 1.186 1.097 2.106 1.86V4.223a2.013 2.013 0 00-2.009-2.018zm-3.78 12.794s-.353-.422-.647-.794c1.283-.362 1.773-1.166 1.773-1.166a5.6 5.6 0 01-1.127.578c-.49.206-.96.343-1.42.422a6.863 6.863 0 01-2.537-.01 8.23 8.23 0 01-1.44-.421 5.753 5.753 0 01-.715-.333c-.03-.02-.06-.03-.089-.05-.02-.01-.029-.02-.039-.029-.176-.098-.274-.166-.274-.166s.47.783 1.714 1.155c-.294.373-.656.814-.656.814-2.165-.069-2.988-1.49-2.988-1.49 0-3.154 1.41-5.71 1.41-5.71C9.159 6.74 10.5 6.769 10.5 6.769l.098.118C8.835 7.396 8.022 8.17 8.022 8.17s.216-.118.578-.284c1.048-.46 1.88-.588 2.224-.617.058-.01.107-.02.166-.02a7.984 7.984 0 014.927.92s-.773-.734-2.439-1.243l.138-.157s1.341-.03 2.752 1.029c0 0 1.41 2.556 1.41 5.71 0 0-.832 1.421-2.997 1.49z" fill="#fff"/></svg> Discord</a>
            </div>
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

</body>

<!-- Mirrored from staked.us/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 05:10:50 GMT -->
</html>
