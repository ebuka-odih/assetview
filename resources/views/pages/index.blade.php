@extends('pages.layout.app')
@section('content')

<section class="Hero">
    <div class="Hero__inner">
        <div class="Hero__tokens Hero-Tokens Hero-Tokens--left">

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M23.82 41h8.07a11.06 11.06 0 005.33-.93c2.84-1.31 4.54-4.11 5.22-7.78 1-5.45-.24-9.32-7.35-9.32m0 .01h-8.1" stroke="currentColor"/><path d="M32 56c13.255 0 24-10.745 24-24S45.255 8 32 8 8 18.745 8 32s10.745 24 24 24zM31 32H20" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M53.702 20.987V12h-20.63v8.874h3.229l-6.388 7.317h-2.61v-7.317h3.617V12h-4.9v3.32h-2.656V12h-4.831v3.32h-2.656V12H11v8.987h4.305v22.356H11v8.987h19.92v-8.874h-3.618v-7.317h2.61l6.389 7.317h-3.229v8.874h20.63v-8.987h-3.205l-9.708-11.178 9.708-11.178h3.205z" stroke="currentColor"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M27.84 28.414a3.515 3.515 0 10-3.515-3.515 3.525 3.525 0 003.515 3.515zM32.552 24.873a3.515 3.515 0 103.515-3.515 3.525 3.525 0 00-3.515 3.515zM40.197 28.476a3.515 3.515 0 103.515 3.514 3.525 3.525 0 00-3.515-3.514zM39.615 39.117a3.515 3.515 0 00-7.03 0v0a3.515 3.515 0 007.03 0v0zM31.387 39.148a3.515 3.515 0 10-3.515 3.515 3.525 3.525 0 003.515-3.515zM23.727 28.509a3.515 3.515 0 000 7.03h0a3.515 3.515 0 000-7.03h0z" stroke="currentColor"/><circle cx="19.779" cy="39.098" r="2.079" stroke="currentColor"/><circle cx="31.859" cy="46.112" r="2.079" stroke="currentColor"/><circle cx="44.21" cy="39.032" r="2.079" stroke="currentColor"/><circle cx="44.179" cy="24.929" r="2.079" stroke="currentColor"/><circle cx="31.935" cy="17.87" r="2.079" stroke="currentColor"/><circle cx="19.762" cy="24.958" r="2.079" stroke="currentColor"/><circle cx="13.678" cy="32.041" r="1.765" stroke="currentColor"/><circle cx="22.83" cy="47.871" r="1.765" stroke="currentColor"/><circle cx="41.165" cy="47.834" r="1.765" stroke="currentColor"/><circle cx="50.25" cy="31.95" r="1.765" stroke="currentColor"/><circle cx="41.09" cy="16.169" r="1.765" stroke="currentColor"/><circle cx="22.792" cy="16.173" r="1.765" stroke="currentColor"/><circle cx="12.443" cy="20.773" r="1.455" stroke="currentColor"/><circle cx="12.491" cy="43.319" r="1.455" stroke="currentColor"/><circle cx="31.859" cy="54.543" r="1.455" stroke="currentColor"/><circle cx="51.49" cy="43.233" r="1.455" stroke="currentColor"/><circle cx="51.464" cy="20.701" r="1.455" stroke="currentColor"/><circle cx="31.925" cy="9.461" r="1.455" stroke="currentColor"/><circle cx="19.572" cy="53.53" r="1.156" stroke="currentColor"/><circle cx="44.433" cy="53.431" r="1.156" stroke="currentColor"/><circle cx="56.805" cy="31.942" r="1.156" stroke="currentColor"/><circle cx="44.362" cy="10.483" r="1.156" stroke="currentColor"/><circle cx="19.516" cy="10.542" r="1.156" stroke="currentColor"/><circle cx="7.146" cy="32.06" r="1.156" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56c13.255 0 24-10.745 24-24S45.255 8 32 8 8 18.745 8 32s10.745 24 24 24z" stroke="currentColor"/><path d="M23.53 21.72L38 25.8a4.001 4.001 0 01-2.18 7.7l-7.7-2.18m4.32-15.4l-8.7 30.8 8.7-30.8zm4.82 1.36l-2.18 7.7 2.18-7.7zm-8.7 30.8l2.17-7.7-2.17 7.7z" stroke="currentColor"/><path d="M35.79 33.5a4 4 0 11-2.17 7.69l-14.44-4.07" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8 56L36 8h8l12 48m-20 0l20-36-20 36z" stroke="currentColor"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M45.821 10.766l-9.615 14.276a1.022 1.022 0 001.517 1.341l9.466-8.21a.383.383 0 01.639.291v25.703a.383.383 0 01-.678.246L18.54 10.165a4.903 4.903 0 00-3.74-1.734h-1a4.9 4.9 0 00-4.9 4.9v36.2a4.902 4.902 0 009.079 2.564l9.615-14.276a1.022 1.022 0 00-1.517-1.341l-9.466 8.21a.383.383 0 01-.639-.291v-25.71a.383.383 0 01.678-.245l28.606 34.254a4.903 4.903 0 003.74 1.735h1a4.9 4.9 0 004.904-4.9v-36.2a4.902 4.902 0 00-9.079-2.565z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M44.69 17.013l-3.997 1.89c-.09.045-.125.146-.08.225l6.082 12.804c2.267 4.759 1.652 8.37-1.788 10.002-2.779 1.316-5.182.393-7.05-2.813L30.66 23.966c-2.916-6.143-6.902-7.774-11.617-5.536-3.075 1.452-4.852 4.05-4.818 7.347 0 .034-.011.08-.034.102a.176.176 0 01-.205.045.137.137 0 01-.08-.08l-1.572-3.307c-.022-.045-.056-.067-.102-.09-.045-.011-.091-.011-.125.011l-4.01 1.902c-.079.045-.124.146-.079.225l11.047 23.233c.023.045.057.067.103.09a.193.193 0 00.137-.011l3.997-1.89c.091-.045.125-.147.08-.226L17.47 33.338c-2.415-5.063-1.947-8.73 1.742-10.475 2.836-1.338 5.034-.439 7.016 2.993 0 0 0 .011.012.011l7.129 14.998c2.745 5.783 7.027 7.774 11.537 5.636 3.485-1.653 4.932-4.14 4.852-7.403 0-.078.057-.146.125-.168a.17.17 0 01.194.09l1.594 3.352a.172.172 0 00.16.102c.022 0 .045-.012.068-.012l3.998-1.901c.068-.023.102-.09.102-.157 0-.023-.011-.046-.023-.068L44.93 17.103c-.057-.09-.16-.124-.24-.09z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><circle cx="36.778" cy="27.222" r="17.222" stroke="currentColor"/><circle cx="36.889" cy="27.112" r="13.852" stroke="currentColor"/><circle cx="27.222" cy="36.779" r="17.222" stroke="currentColor"/><circle cx="27.111" cy="36.889" r="13.852" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56L16 32 32 8l16 24-16 24z" stroke="currentColor"/><path d="M16 32l16 8 16-8M32 8v48" stroke="currentColor"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path stroke="currentColor" d="M7.23 31.782l6.147-6.147 6.147 6.147-6.147 6.147zM16.215 22.799L31.35 7.665l6.147 6.147-15.134 15.133zM16.214 40.77l24.12-24.12 6.146 6.147-24.12 24.12zM25.199 49.756l24.12-24.12 6.146 6.147-24.12 24.12z"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M49.7 21.27a1.57 1.57 0 01-1.12.47H9A1.6 1.6 0 017.85 19l6.5-6.73a1.57 1.57 0 011.13-.48h39.74a1.6 1.6 0 011.12 2.73zm0 30.05a1.59 1.59 0 01-1.12.46H9a1.56 1.56 0 01-1.13-2.65l6.5-6.56a1.59 1.59 0 011.13-.47h39.72a1.56 1.56 0 011.12 2.66zM48.58 27a1.59 1.59 0 011.12.46L56.34 34a1.56 1.56 0 01-1.12 2.66H15.47a1.59 1.59 0 01-1.13-.47l-6.5-6.56A1.56 1.56 0 019 27h39.6z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56c4.418 0 8-10.745 8-24S36.418 8 32 8s-8 10.745-8 24 3.582 24 8 24z" stroke="currentColor"/><path d="M52.788 43.998c2.209-3.827-5.306-12.301-16.785-18.929-11.48-6.627-22.576-8.898-24.785-5.071-2.209 3.826 5.306 12.3 16.785 18.928 11.479 6.627 22.575 8.898 24.785 5.072z" stroke="currentColor"/><path d="M36.003 38.93c11.479-6.627 18.994-15.101 16.785-18.928-2.21-3.826-13.306-1.555-24.785 5.072-11.48 6.628-18.994 15.102-16.785 18.928 2.21 3.827 13.306 1.556 24.785-5.071z" stroke="currentColor"/><path d="M32 34a2 2 0 100-4 2 2 0 000 4z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M15.65 18.73h32.7L33.88 35.59a4.47 4.47 0 013.06-2c7.86-.75 11.24 5 11.24 11.22a11.24 11.24 0 01-20.07 6.92M24 40a6 6 0 1012 0" stroke="currentColor"/><path d="M20 8l4 4v28" stroke="currentColor"/></svg>

        </div>

        <div class="Hero__main">
            <h1 class="Hero__header Header Header--white">
                <b>Fixed Income&nbsp;Solutions for&nbsp;Crypto Asset Investors</b>
            </h1>
            <p class="Hero__p">
                Staked helps investors earn yield from staking and DeFi without
                taking custody of their crypto assets.
            </p>
        </div>
        <div class="Hero__tokens Hero-Tokens Hero-Tokens--alt">

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8 28h48H8zm0 8h48H8zm8 16h12a20 20 0 100-40H16v40z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M31.892 11A15.952 15.952 0 0016 26.892c0 1.755.283 3.5.837 5.164a2.273 2.273 0 002.792 1.396 2.263 2.263 0 001.356-2.791 10.41 10.41 0 01-.618-4.048A11.466 11.466 0 1132.52 38.397s-2.223.14-3.34.28c-.41.057-.815.137-1.216.239a.15.15 0 01-.21-.21l.35-1.884 2.093-9.481a2.176 2.176 0 10-4.257-.908s-4.985 23.15-4.985 23.36a2.114 2.114 0 001.665 2.582 2.122 2.122 0 002.582-1.675c.07-.28.698-3.35.698-3.35a5.643 5.643 0 014.676-4.446c.479-.07 2.502-.21 2.502-.21A15.882 15.882 0 0031.892 11zM34.906 47.701a2.664 2.664 0 00-3.14 2.094 2.633 2.633 0 002.093 3.14 2.593 2.593 0 003.13-2.093 2.751 2.751 0 00-2.083-3.14z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M44.26 22.89A41.9 41.9 0 0055.67 36c.222-1.322.332-2.66.33-4A24.39 24.39 0 0035.27 8.22c-13.8-1.91-17.49 5.94-4 10.16 3.14 1 23.24 7 24.71 12M16.13 14a31.842 31.842 0 003.78 10.73A32.27 32.27 0 0048 41.08a32.14 32.14 0 006.48-.65v0A23.999 23.999 0 119.85 22.783 24 24 0 0116.13 14v0z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M28 52h-8a12 12 0 010-24h8L12 12m24 0h8a12 12 0 010 24h-8l16 16" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8 40l48-24M8 48l48-24M12.8 37.6a20 20 0 0130.73-21.94M51.2 26.4A20 20 0 0120 48" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56c13.255 0 24-10.745 24-24S45.255 8 32 8 8 18.745 8 32s10.745 24 24 24z" stroke="currentColor"/><path d="M28 47.5a16 16 0 010-31m8 0a16 16 0 010 31M30 24a4 4 0 100 8h4a4 4 0 110 8m-2-20v4m0 16v4" stroke="currentColor"/><path d="M38 26s-2-2-4-2h-4m-4 14s2 2 4 2h4" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M12.9 56a4.9 4.9 0 100-9.8 4.9 4.9 0 000 9.8zM51.1 17.8a4.9 4.9 0 100-9.8 4.9 4.9 0 000 9.8zM45.05 22.74a16 16 0 01-22 22.53M18.76 41A16 16 0 0141 18.73L18.76 41z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M52 18.73A24 24 0 0118.73 52M32 44c6.627 0 12-5.373 12-12s-5.373-12-12-12-12 5.373-12 12 5.373 12 12 12z" stroke="currentColor"/><path d="M44 32a28.69 28.69 0 00-23 4.86 34.204 34.204 0 00-4.17 3.72 28.658 28.658 0 00-4.2 5.66h-.1A23.63 23.63 0 018 32a24 24 0 0137.27-20" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M54.084 18.347a6.058 6.058 0 00-3.227-1.58c-1.512-.197-3.04.813-4.078 1.478-1.038.666-3.001 2.634-3.82 3.199-.817.564-2.887 1.128-6.204 3.147-3.317 2.02-16.454 10.413-16.454 10.413l3.384.04-15.19 7.88h1.517l-2.189 1.692c1.21.285 2.482.1 3.56-.519v.468S29.49 37.43 32.998 39.28l-2.126.626c.186 0 3.632.22 3.632.22a4.857 4.857 0 002.195 3.503c2.075 1.37 2.11 2.115 2.11 2.115s-1.072.446-1.072.999a9.815 9.815 0 015.855 0s-.113-.593-1.557-.999-2.854-1.963-3.56-2.82a3.98 3.98 0 01-.564-3.892c.502-1.292 2.257-2.003 5.816-3.853 4.225-2.183 5.19-3.819 5.782-5.077.592-1.258 1.483-3.78 1.974-4.964a6.504 6.504 0 012.03-2.82C54.147 21.838 57 20.76 57 20.76s-2.177-1.861-2.888-2.414" stroke="currentColor" stroke-width=".953"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M56 32L32 56 8 32l8-20h32l8 20z" stroke="currentColor"/><path d="M32 36c6.627 0 12-1.79 12-4s-5.373-4-12-4-12 1.79-12 4 5.373 4 12 4zM32 44V20m-8 0h16-16z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56c13.255 0 24-10.745 24-24S45.255 8 32 8 8 18.745 8 32s10.745 24 24 24z" stroke="currentColor"/><path d="M26.67 40l2.66-4M29 32a6 6 0 110-12v12zm6 0a6 6 0 110 12V32zm-6 0h6-6zm11-12H29h11zM24 44h11-11zm10.67-16l2.66-4-2.66 4z" stroke="currentColor"/></svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><rect x="12.677" y="11.064" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="29.069" y="19.494" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="29.069" y="36.823" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="45.93" y="28.393" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="12.677" y="28.393" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="12.677" y="45.722" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11 13h34.763v5.562h-29.2v27.81h29.2v5.563H11M11 13v5.562M11 13v38.934M11 13h5.562m0 38.934H11m0 0v-5.562m30.33-9.987c.128.927.38 1.62.757 2.08.688.835 1.868 1.253 3.54 1.253 1 0 1.812-.11 2.436-.33 1.185-.423 1.777-1.208 1.777-2.356 0-.67-.294-1.188-.881-1.556-.588-.358-1.51-.675-2.768-.95l-2.149-.482c-2.111-.477-3.57-.996-4.379-1.556-1.368-.936-2.052-2.4-2.052-4.393 0-1.818.661-3.328 1.983-4.53 1.322-1.203 3.264-1.805 5.825-1.805 2.14 0 3.962.57 5.468 1.708 1.514 1.13 2.309 2.772 2.382 4.93h-4.076c-.074-1.221-.606-2.089-1.598-2.603-.66-.34-1.482-.51-2.465-.51-1.092 0-1.964.221-2.616.662-.652.44-.978 1.055-.978 1.845 0 .725.321 1.267.964 1.625.413.239 1.294.519 2.644.84l3.498.84c1.533.367 2.69.858 3.47 1.474 1.212.954 1.818 2.336 1.818 4.145 0 1.854-.712 3.396-2.135 4.627-1.413 1.22-3.415 1.831-6.004 1.831-2.644 0-4.723-.601-6.238-1.804-1.515-1.212-2.272-2.873-2.272-4.985h4.049z" stroke="currentColor"/></svg>

            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8 22.06l3.94 8.59M41.94 8H22.06L8 22.06v19.88L22.06 56h19.88L56 41.94V22.06L41.94 8zm-25.73 5.85l31.61 36.27-31.61-36.27zm9.71 11.14l8.27-13.55-8.27 13.55zm-9.71-11.14l17.98-2.41-17.98 2.41zm25.74 9.43l-16.03 1.71 16.03-1.71zm-7.76-11.84l7.76 11.84-7.76-11.84zm7.76 11.84l-3.88 15.65 3.88-15.65zm8.27-7l-8.27 7 8.27-7zM40.01 8l-5.82 3.44L40.01 8zm-5.82 3.44l16.03 4.84-16.03-4.84zM27.91 8l6.28 3.44L27.91 8zm14.04 15.28l10.64 9.65-10.64-9.65zm8.27-7l2.37 16.65-2.37-16.65zm2.37 16.65L56 41.94l-3.41-9.01zM56 28.37l-3.41 4.56L56 28.37zM38.07 38.93l14.52-6-14.52 6zm14.52-6l-4.77 17.19 4.77-17.19zm-30.81 7.62l4.14-15.56-4.14 15.56zm-9.84-9.9l13.98-5.66-13.98 5.66zm4.27-16.8l-4.27 16.8 4.27-16.8zm-4.27 16.8l9.84 9.9-9.84-9.9zm9.84 9.9l16.29-1.62-16.29 1.62zm8.26 10.57l8.03-12.19-8.03 12.19zm-8.26-10.57l8.26 10.57-8.26-10.57zm26.04 9.57l-17.78 1 17.78-1zM25.05 56l4.99-4.88L25.05 56zm10.76 0l-5.77-4.88L35.81 56zM13.7 47.68l8.08-7.13-8.08 7.13zm0 0l16.34 3.44-16.34-3.44zm-1.76-17.03l1.76 17.03-1.76-17.03zM8 35.23l3.94-4.58L8 35.23z" stroke="currentColor"/></svg>

        </div>
    </div>
</section>

<section class="CTAs Container">

    <div class="CTAs__item Card Card--w-header Card--indigo">
        <div class="Card__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path class="light" opacity=".3" fill-rule="evenodd" clip-rule="evenodd" d="M12.5 7.5h35l10 12.5h-55l10-12.5z"/><path class="dark" fill-rule="evenodd" clip-rule="evenodd" d="M57.5 20L30 50 2.5 20h55z"/></svg></div>
        <div class="Card__body">
            <h3 class="Card__header Header"><span class="larger">Crypto Staking & Crypto Hold</span></h3>
            <p class="Card__text">The Staking Partner of Choice for Institutional Crypto and Crypto Holders</p>
        </div>
        <a href="{{ route('register') }}"  class="Btn Btn--indigo Btn--invert Btn--arrowed CTAs__button" title="Get Started">Get Started<div class="Btn__arr"><svg><use xlink:href="sprites.svg#chevron_horizontal"></use></svg></div></a>
    </div>

    <div class="CTAs__item Card Card--w-header Card--ecstasy">
        <div class="Card__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><rect opacity=".3" x="17.5" y="17.5" width="5" height="30" rx="1" transform="rotate(-90 17.5 17.5)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.268 20.732a2.5 2.5 0 01-3.536 3.536l-7.5-7.5a2.5 2.5 0 010-3.536l7.5-7.5a2.5 2.5 0 013.536 3.536L18.535 15l5.733 5.732z"/><rect opacity=".3" width="5" height="30" rx="1" transform="matrix(0 -1 -1 0 42.5 47.5)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M35.732 50.732a2.5 2.5 0 003.536 3.536l7.5-7.5a2.5 2.5 0 000-3.536l-7.5-7.5a2.5 2.5 0 00-3.536 3.536L41.465 45l-5.733 5.732z"/></svg></div>
        <div class="Card__body">
            <h3 class="Card__header Header"><span class="larger">Crypto Mining</span></h3>
            <p class="Card__text">Infrastructure to Power Crypto Assets Mining</p>
        </div>
        <a href="{{ route('register') }}"  class="Btn Btn--ecstasy Btn--invert Btn--arrowed CTAs__button" title="Get Started">Get Started<div class="Btn__arr"><svg><use xlink:href="sprites.svg#chevron_horizontal"></use></svg></div></a>
    </div>

    <div class="CTAs__item Card Card--w-header Card--pine">
        <div class="Card__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><path class="light" opacity=".3" fill-rule="evenodd" clip-rule="evenodd" d="M12.5 7.5h35l10 12.5h-55l10-12.5z"/><path class="dark" fill-rule="evenodd" clip-rule="evenodd" d="M57.5 20L30 50 2.5 20h55z"/></svg></div>
        <div class="Card__body">
            <h3 class="Card__header Header"><span class="larger">Automated Crypto Trading</span></h3>
            <p class="Card__text">A reliable structure for crypto algorithm and crypto automated Infrastructure</p>
        </div>
        <a href="{{ route('register') }}" class="Btn Btn--pine Btn--invert Btn--arrowed CTAs__button" title="Get Started">Get Started<div class="Btn__arr"><svg><use xlink:href="sprites.svg#chevron_horizontal"></use></svg></div></a>
    </div>
</section>

<section class="Partners Container">
    <div class="Partners__header Header">
        <h2><span>Join the</span> Industry Leaders</h2>
    </div>

    <div class="Partners__dashboard">

        <input type="radio" name="vp_ctrl" id="vpc_0" checked>

        <input type="radio" name="vp_ctrl" id="vpc_1" >

        <input type="radio" name="vp_ctrl" id="vpc_2" >

        <input type="radio" name="vp_ctrl" id="vpc_3" >

        <input type="radio" name="vp_ctrl" id="vpc_4" >

        <div class="Partners__ctrl Partners__ctrl--left" id="ctrl-left">
            <label></label>

            <label for="vpc_0"></label>

            <label for="vpc_1"></label>

            <label for="vpc_2"></label>

            <label for="vpc_3"></label>

            <label for="vpc_4"></label>

        </div>

        <div class="Partners__viewport" id="viewport">
            <div class="Partners__grid" id="grid">

                <div title="Pantera">
                    <div class="Sprite Sprite--Pantera"></div>
                </div>

                <div title="Multicoin Capital">
                    <div class="Sprite Sprite--MulticoinCapital"></div>
                </div>

                <div title="Digital Currency Group">
                    <div class="Sprite Sprite--DigitalCurrencyGroup"></div>
                </div>

                <div title="Spartan">
                    <div class="Sprite Sprite--Spartan"></div>
                </div>

                <div title="Arrington XRP Capital">
                    <div class="Sprite Sprite--ArringtonXRPCapital"></div>
                </div>

                <div title="Continue Capital">
                    <div class="Sprite Sprite--ContinueCapital"></div>
                </div>

                <div title="IOSG">
                    <div class="Sprite Sprite--IOSG"></div>
                </div>

                <div title="CMT Digital">
                    <div class="Sprite Sprite--CMTDigital"></div>
                </div>

                <div title="Cambrian Asset Management">
                    <div class="Sprite Sprite--CambrianAssetManagement"></div>
                </div>

                <div title="Galaxy Digital">
                    <div class="Sprite Sprite--GalaxyDigital"></div>
                </div>

                <div title="Coinbase Ventures">
                    <div class="Sprite Sprite--CoinbaseVentures"></div>
                </div>

                <div title="DTC Capital">
                    <div class="Sprite Sprite--DTCCapital"></div>
                </div>

                <div title="Parafi Capital">
                    <div class="Sprite Sprite--ParafiCapital"></div>
                </div>

                <div title="Scytale Ventures">
                    <div class="Sprite Sprite--ScytaleVentures"></div>
                </div>

                <div title="Fabric Ventures">
                    <div class="Sprite Sprite--FabricVentures"></div>
                </div>

                <div title="StakerDAO">
                    <div class="Sprite Sprite--StakerDAO"></div>
                </div>

                <div title="Applied Crypto Ventures">
                    <div class="Sprite Sprite--AppliedCryptoVentures"></div>
                </div>

                <div title="Consensys">
                    <div class="Sprite Sprite--Consensys"></div>
                </div>

                <div title="CMS">
                    <div class="Sprite Sprite--CMS"></div>
                </div>

                <div title="Framework Ventures">
                    <div class="Sprite Sprite--FrameworkVentures"></div>
                </div>

                <div title="Winklevoss Capital">
                    <div class="Sprite Sprite--WinklevossCapital"></div>
                </div>

                <div title="Fenbushi Capital">
                    <div class="Sprite Sprite--FenbushiCapital"></div>
                </div>

                <div title="Signia Capital">
                    <div class="Sprite Sprite--SigniaCapital"></div>
                </div>

                <div title="Scalar Capital">
                    <div class="Sprite Sprite--ScalarCapital"></div>
                </div>

                <div title="Brevan Howard">
                    <div class="Sprite Sprite--BrevanHoward"></div>
                </div>

                <div title="Global Brain">
                    <div class="Sprite Sprite--GlobalBrain"></div>
                </div>

            </div>
        </div>

        <div class="Partners__ctrl Partners__ctrl--right" id="ctrl-right">

            <label for="vpc_1"></label>

            <label for="vpc_2"></label>

            <label for="vpc_3"></label>

            <label for="vpc_4"></label>

            <label for="vpc_5"></label>

            <label></label>
        </div>
    </div>

</section>

<section class="Assets Container">
    <div class="Assets__control">
        <h2 class="Assets__header Header">Assets</h2>
        <ul class="Assets__nav">

            <li class="Assets__nav-item active js-assets-switcher" data-slug="staking">Staking</li>

            <li class="Assets__nav-item  js-assets-switcher" data-slug="coming-soon">Coming Soon</li>

        </ul>
    </div>



    <div class="Assets__items">

        <div class="Assets__grid active js-staking">


            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56L16 32 32 8l16 24-16 24z" stroke="currentColor"/><path d="M16 32l16 8 16-8M32 8v48" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">ETH 2.0</div>
                        <div class="Asset__symbol">ETH2</div>
                    </div>
                    <div class="Asset__yield">

                        6.9%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M44.26 22.89A41.9 41.9 0 0055.67 36c.222-1.322.332-2.66.33-4A24.39 24.39 0 0035.27 8.22c-13.8-1.91-17.49 5.94-4 10.16 3.14 1 23.24 7 24.71 12M16.13 14a31.842 31.842 0 003.78 10.73A32.27 32.27 0 0048 41.08a32.14 32.14 0 006.48-.65v0A23.999 23.999 0 119.85 22.783 24 24 0 0116.13 14v0z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Terra</div>
                        <div class="Asset__symbol">LUNA</div>
                    </div>
                    <div class="Asset__yield">

                        14.7%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M27.84 28.414a3.515 3.515 0 10-3.515-3.515 3.525 3.525 0 003.515 3.515zM32.552 24.873a3.515 3.515 0 103.515-3.515 3.525 3.525 0 00-3.515 3.515zM40.197 28.476a3.515 3.515 0 103.515 3.514 3.525 3.525 0 00-3.515-3.514zM39.615 39.117a3.515 3.515 0 00-7.03 0v0a3.515 3.515 0 007.03 0v0zM31.387 39.148a3.515 3.515 0 10-3.515 3.515 3.525 3.525 0 003.515-3.515zM23.727 28.509a3.515 3.515 0 000 7.03h0a3.515 3.515 0 000-7.03h0z" stroke="currentColor"/><circle cx="19.779" cy="39.098" r="2.079" stroke="currentColor"/><circle cx="31.859" cy="46.112" r="2.079" stroke="currentColor"/><circle cx="44.21" cy="39.032" r="2.079" stroke="currentColor"/><circle cx="44.179" cy="24.929" r="2.079" stroke="currentColor"/><circle cx="31.935" cy="17.87" r="2.079" stroke="currentColor"/><circle cx="19.762" cy="24.958" r="2.079" stroke="currentColor"/><circle cx="13.678" cy="32.041" r="1.765" stroke="currentColor"/><circle cx="22.83" cy="47.871" r="1.765" stroke="currentColor"/><circle cx="41.165" cy="47.834" r="1.765" stroke="currentColor"/><circle cx="50.25" cy="31.95" r="1.765" stroke="currentColor"/><circle cx="41.09" cy="16.169" r="1.765" stroke="currentColor"/><circle cx="22.792" cy="16.173" r="1.765" stroke="currentColor"/><circle cx="12.443" cy="20.773" r="1.455" stroke="currentColor"/><circle cx="12.491" cy="43.319" r="1.455" stroke="currentColor"/><circle cx="31.859" cy="54.543" r="1.455" stroke="currentColor"/><circle cx="51.49" cy="43.233" r="1.455" stroke="currentColor"/><circle cx="51.464" cy="20.701" r="1.455" stroke="currentColor"/><circle cx="31.925" cy="9.461" r="1.455" stroke="currentColor"/><circle cx="19.572" cy="53.53" r="1.156" stroke="currentColor"/><circle cx="44.433" cy="53.431" r="1.156" stroke="currentColor"/><circle cx="56.805" cy="31.942" r="1.156" stroke="currentColor"/><circle cx="44.362" cy="10.483" r="1.156" stroke="currentColor"/><circle cx="19.516" cy="10.542" r="1.156" stroke="currentColor"/><circle cx="7.146" cy="32.06" r="1.156" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Cardano</div>
                        <div class="Asset__symbol">ADA</div>
                    </div>
                    <div class="Asset__yield">

                        3.8%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M31.522 39.749v5.055c0 .437.209.843.609 1.062l11.279 6.586c.409.233.912.233 1.322-.001l10.871-6.585c.401-.219.609-.625.609-1.062V32.193c0-.437-.208-.843-.609-1.062l-10.522-6.22c-.386-.231-.885-.191-1.309.037l-23.62 13.928c-.425.228-.924.268-1.309.037L8.32 32.692c-.4-.219-.609-.625-.609-1.062V19.02c0-.437.209-.844.609-1.062l10.872-6.586a1.338 1.338 0 011.322-.001l11.279 6.587c.4.218.609.625.609 1.062v5.055" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Polygon</div>
                        <div class="Asset__symbol">MATIC</div>
                    </div>
                    <div class="Asset__yield">

                        5.2%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M31.892 11A15.952 15.952 0 0016 26.892c0 1.755.283 3.5.837 5.164a2.273 2.273 0 002.792 1.396 2.263 2.263 0 001.356-2.791 10.41 10.41 0 01-.618-4.048A11.466 11.466 0 1132.52 38.397s-2.223.14-3.34.28c-.41.057-.815.137-1.216.239a.15.15 0 01-.21-.21l.35-1.884 2.093-9.481a2.176 2.176 0 10-4.257-.908s-4.985 23.15-4.985 23.36a2.114 2.114 0 001.665 2.582 2.122 2.122 0 002.582-1.675c.07-.28.698-3.35.698-3.35a5.643 5.643 0 014.676-4.446c.479-.07 2.502-.21 2.502-.21A15.882 15.882 0 0031.892 11zM34.906 47.701a2.664 2.664 0 00-3.14 2.094 2.633 2.633 0 002.093 3.14 2.593 2.593 0 003.13-2.093 2.751 2.751 0 00-2.083-3.14z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Polkadot</div>
                        <div class="Asset__symbol">DOT</div>
                    </div>
                    <div class="Asset__yield">

                        15.1%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M49.7 21.27a1.57 1.57 0 01-1.12.47H9A1.6 1.6 0 017.85 19l6.5-6.73a1.57 1.57 0 011.13-.48h39.74a1.6 1.6 0 011.12 2.73zm0 30.05a1.59 1.59 0 01-1.12.46H9a1.56 1.56 0 01-1.13-2.65l6.5-6.56a1.59 1.59 0 011.13-.47h39.72a1.56 1.56 0 011.12 2.66zM48.58 27a1.59 1.59 0 011.12.46L56.34 34a1.56 1.56 0 01-1.12 2.66H15.47a1.59 1.59 0 01-1.13-.47l-6.5-6.56A1.56 1.56 0 019 27h39.6z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Solana</div>
                        <div class="Asset__symbol">SOL</div>
                    </div>
                    <div class="Asset__yield">

                        7.2%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M32 56c4.418 0 8-10.745 8-24S36.418 8 32 8s-8 10.745-8 24 3.582 24 8 24z" stroke="currentColor"/><path d="M52.788 43.998c2.209-3.827-5.306-12.301-16.785-18.929-11.48-6.627-22.576-8.898-24.785-5.071-2.209 3.826 5.306 12.3 16.785 18.928 11.479 6.627 22.575 8.898 24.785 5.072z" stroke="currentColor"/><path d="M36.003 38.93c11.479-6.627 18.994-15.101 16.785-18.928-2.21-3.826-13.306-1.555-24.785 5.072-11.48 6.628-18.994 15.102-16.785 18.928 2.21 3.827 13.306 1.556 24.785-5.071z" stroke="currentColor"/><path d="M32 34a2 2 0 100-4 2 2 0 000 4z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Cosmos</div>
                        <div class="Asset__symbol">ATOM</div>
                    </div>
                    <div class="Asset__yield">

                        20.2%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M45.821 10.766l-9.615 14.276a1.022 1.022 0 001.517 1.341l9.466-8.21a.383.383 0 01.639.291v25.703a.383.383 0 01-.678.246L18.54 10.165a4.903 4.903 0 00-3.74-1.734h-1a4.9 4.9 0 00-4.9 4.9v36.2a4.902 4.902 0 009.079 2.564l9.615-14.276a1.022 1.022 0 00-1.517-1.341l-9.466 8.21a.383.383 0 01-.639-.291v-25.71a.383.383 0 01.678-.245l28.606 34.254a4.903 4.903 0 003.74 1.735h1a4.9 4.9 0 004.904-4.9v-36.2a4.902 4.902 0 00-9.079-2.565z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Near</div>
                        <div class="Asset__symbol">NEAR</div>
                    </div>
                    <div class="Asset__yield">

                        10.4%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><circle cx="31.776" cy="32" r="23.625" stroke="currentColor"/><path stroke="currentColor" d="M35.471 28.305h6.672v6.672h-6.672zM28.804 37.476a2.504 2.504 0 11-2.504-2.504h2.504v-6.667H26.3a9.171 9.171 0 109.17 9.171h0v-2.504h-6.666v2.504zM37.975 24.97h7.503v-6.672h-7.503a9.18 9.18 0 00-9.171 9.17v.837h6.667v-.836a2.504 2.504 0 012.504-2.5z"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Flow</div>
                        <div class="Asset__symbol">FLOW</div>
                    </div>
                    <div class="Asset__yield">

                        9.3%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"><path d="M24.926 18.536a12.89 12.89 0 0114.046 0l4.5-4.478c-6.722-5.345-16.324-5.345-23.046 0zM18.51 38.973a12.65 12.65 0 010-14.017l-4.473-4.465c-5.27 6.729-5.27 16.262 0 22.991zM39.002 45.46a12.49 12.49 0 01-7.007 2.209 12.16 12.16 0 01-7.069-2.174l-4.479 4.445a18.164 18.164 0 0011.601 4.002 18.596 18.596 0 0011.438-4.029zM45.422 24.952a12.41 12.41 0 012.118 7.138 12.545 12.545 0 01-2.118 6.882l4.478 4.509a18.607 18.607 0 004.01-11.426 18.141 18.141 0 00-3.997-11.568zM13.889 52.701a2.644 2.644 0 002.631-2.632 2.644 2.644 0 00-2.631-2.631 2.644 2.644 0 00-2.632 2.631 2.644 2.644 0 002.632 2.632zM50.154 52.721a2.664 2.664 0 002.652-2.652c0-1.454-1.197-2.651-2.652-2.651s-2.652 1.197-2.652 2.651a2.664 2.664 0 002.652 2.652zM50.17 16.445h.004a2.673 2.673 0 002.66-2.661 2.673 2.673 0 00-2.66-2.66 2.673 2.673 0 00-2.661 2.656v.004a2.674 2.674 0 002.657 2.661zM13.795 16.384h.004a2.677 2.677 0 002.664-2.664 2.677 2.677 0 00-2.664-2.665 2.677 2.677 0 00-2.665 2.661c-.002 1.46 0 0 0 0v.004a2.677 2.677 0 002.661 2.664zM17.102 46.764l29.901-29.765M17.048 16.917l29.841 29.916"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Elrond</div>
                        <div class="Asset__symbol">EGLD</div>
                    </div>
                    <div class="Asset__yield">

                        8.8%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <!-- $/code/static_dist/static/i/svg/tokens/grt__graph.svg not found -->
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">The Graph</div>
                        <div class="Asset__symbol">GRT</div>
                    </div>
                    <div class="Asset__yield">

                        9.0%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M12.761 48.95l4.169.005s.019-32.148.059-32.387c.076-.449.338-2.028 2.142-2.103 1.804-.076 2.234 1.25 2.426 1.821.153.457 3.089 23.571 3.164 23.805.043.133 1.04 4.959 7.009 5.082 5.968.122 7.422-4.648 7.526-4.93.177-.482 3.128-23.801 3.156-23.926.608-2.7 4.457-2.267 4.62.192.002.025.056 32.413.056 32.413l4.151-.016s-.047-24.47-.058-24.583c-.505-5.246-6.137-6.932-10.109-5.301-2.151.883-3.725 2.843-3.939 5.498-.011.13-2.881 22.691-2.897 22.783-.539 3.221-4.322 2.737-4.523-.018-.011-.148-2.651-21.821-2.803-22.502-.216-.971-.407-1.611-.439-1.737-.211-.812-.874-1.916-1.447-2.528-1.455-1.552-3.542-2.13-5.63-2.061-2.115.069-3.989.853-5.312 2.452-.597.721-1.17 2.005-1.224 2.934-.051.874-.07 2.165-.068 3.803.007 7.521-.029 21.304-.029 21.304z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Mina</div>
                        <div class="Asset__symbol">MINA</div>
                    </div>
                    <div class="Asset__yield">

                        22.0%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M23.82 41h8.07a11.06 11.06 0 005.33-.93c2.84-1.31 4.54-4.11 5.22-7.78 1-5.45-.24-9.32-7.35-9.32m0 .01h-8.1" stroke="currentColor"/><path d="M32 56c13.255 0 24-10.745 24-24S45.255 8 32 8 8 18.745 8 32s10.745 24 24 24zM31 32H20" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Dash</div>
                        <div class="Asset__symbol">DASH</div>
                    </div>
                    <div class="Asset__yield">

                        5.8%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path stroke="currentColor" d="M12 10h6v43h-6zM18 10l13 16.923m-13-6L26.87 32M18 42.872L26.976 32M31 37.362L18 53M44.284 10L27 31.5 42.74 53H52L34.87 31.5 52 10h-7.716z"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Kava</div>
                        <div class="Asset__symbol">KAVA</div>
                    </div>
                    <div class="Asset__yield">

                        14.7%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M54.084 18.347a6.058 6.058 0 00-3.227-1.58c-1.512-.197-3.04.813-4.078 1.478-1.038.666-3.001 2.634-3.82 3.199-.817.564-2.887 1.128-6.204 3.147-3.317 2.02-16.454 10.413-16.454 10.413l3.384.04-15.19 7.88h1.517l-2.189 1.692c1.21.285 2.482.1 3.56-.519v.468S29.49 37.43 32.998 39.28l-2.126.626c.186 0 3.632.22 3.632.22a4.857 4.857 0 002.195 3.503c2.075 1.37 2.11 2.115 2.11 2.115s-1.072.446-1.072.999a9.815 9.815 0 015.855 0s-.113-.593-1.557-.999-2.854-1.963-3.56-2.82a3.98 3.98 0 01-.564-3.892c.502-1.292 2.257-2.003 5.816-3.853 4.225-2.183 5.19-3.819 5.782-5.077.592-1.258 1.483-3.78 1.974-4.964a6.504 6.504 0 012.03-2.82C54.147 21.838 57 20.76 57 20.76s-2.177-1.861-2.888-2.414" stroke="currentColor" stroke-width=".953"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Kusama</div>
                        <div class="Asset__symbol">KSM</div>
                    </div>
                    <div class="Asset__yield">

                        9.8%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M32.015 7.893c13.29 0 24.066 10.775 24.066 24.066 0 13.292-10.775 24.067-24.066 24.067-13.291 0-24.067-10.775-24.067-24.067 0-13.29 10.776-24.066 24.067-24.066zm13.249 10.753a4.154 4.154 0 010 5.869 4.117 4.117 0 01-3.523 1.173.698.698 0 00-.183 0 2.137 2.137 0 00-2.214 3.018 7.972 7.972 0 01-1.593 8.952 7.974 7.974 0 01-8.955 1.594 2.118 2.118 0 00-1.641-.065 2.13 2.13 0 00-1.39 2.157.669.669 0 000 .212 4.159 4.159 0 01-1.158 3.616 4.155 4.155 0 01-5.869 0 4.123 4.123 0 01-1.215-2.933c0-1.109.432-2.152 1.215-2.934.932-.933 2.217-1.36 3.59-1.172.139.03.28.048.423.048a2.126 2.126 0 001.996-1.38 2.13 2.13 0 00-.057-1.657 7.97 7.97 0 011.594-8.952 7.97 7.97 0 018.952-1.594 2.129 2.129 0 001.637.066 2.13 2.13 0 001.365-2.4 4.16 4.16 0 011.159-3.618 4.155 4.155 0 015.867 0zM28.796 28.704a4.597 4.597 0 106.501 6.501 4.597 4.597 0 00-6.5-6.5z" stroke="currentColor" stroke-width="1.60443"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Helium</div>
                        <div class="Asset__symbol">HNT</div>
                    </div>
                    <div class="Asset__yield">

                        6.1%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M28 52h-8a12 12 0 010-24h8L12 12m24 0h8a12 12 0 010 24h-8l16 16" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Decred</div>
                        <div class="Asset__symbol">DCR</div>
                    </div>
                    <div class="Asset__yield">

                        9.1%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M39.14 39.491l8.587 12.997h-6.415l-10.08-15.27-10.08 15.27h-6.38l8.587-12.963h-12.32v-4.92h40.42v4.886H39.14zM51.46 24.9v4.954H11.04v-4.955H23.12l-8.484-12.827h6.414l10.182 15.474 10.215-15.474h6.414l-8.484 12.827H51.46z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Stacks</div>
                        <div class="Asset__symbol">STX</div>
                    </div>
                    <div class="Asset__yield">

                        7.4%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M33.61 5.94H32.2a25.06 25.06 0 00-13.92 45.87c3.52 2.35 12.63 4.65 22.85-1.88l1.51-1.44c11.46-11.45 7.7-32.06-5.14-33C24 14.58 19.1 35.88 30 44.54" stroke="currentColor"/><path d="M35.29 17.4c10.92 8.66 6 29.8-7.47 29S10.7 23.89 24.67 11.5l1-.76C33.53 5.49 42 7.29 45.1 9.06a25.07 25.07 0 01-12.33 46.89H31.7" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Oasis</div>
                        <div class="Asset__symbol">ROSE</div>
                    </div>
                    <div class="Asset__yield">

                        8.2%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M24.35 41.6H15a1 1 0 01-.9-1.56L31 11.14a1 1 0 011.8 0L56 51.81a1 1 0 01-.91 1.56H22.33a1 1 0 01-.9-1.56L26.09 44a1 1 0 01.9-.52h10.86a1 1 0 00.91-1.56l-6-10.52a1 1 0 00-1.8 0l-5.77 9.7a1 1 0 01-.84.5z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Audius</div>
                        <div class="Asset__symbol">AUDIO</div>
                    </div>
                    <div class="Asset__yield">

                        26.3%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M47.374 33.264c-2.713-3.304-7.04-5.39-12.702-7.508-4.593-1.714-7.77-3.162-9.46-5.08a5.368 5.368 0 01-1.272-2.464 5.469 5.469 0 01.115-2.789 8.906 8.906 0 016.08-5.807 14.003 14.003 0 019.262 1.037 31.78 31.78 0 018.437 5.846l.077.076.065.062c.598.58.937.965.937.965l.86-.78 1.08-.996a32.964 32.964 0 00-5.337-4.708C40.52 7.544 32.513 3.836 23.621 7.53c-4.807 1.989-7.99 5.408-9.008 9.634a14.284 14.284 0 003.28 12.357c2.71 3.304 7.04 5.39 12.698 7.508 4.592 1.714 7.77 3.162 9.46 5.08a5.368 5.368 0 011.272 2.464 5.469 5.469 0 01-.115 2.79 8.91 8.91 0 01-6.106 5.81c-10.974 3.158-20.042-7.64-20.133-7.75L13 47.135a29.638 29.638 0 0011.042 7.973A23.89 23.89 0 0033.175 57a21.956 21.956 0 008.489-1.723c4.79-1.989 7.989-5.408 9.003-9.633a14.373 14.373 0 00-3.293-12.38zm.778 11.72c-.795 3.308-3.367 6.037-7.241 7.706a10.648 10.648 0 002.765-4.597 8.175 8.175 0 00.154-4.123 8.027 8.027 0 00-1.874-3.646c-2.03-2.32-5.513-3.96-10.48-5.793-4.561-1.705-9.128-3.699-11.609-6.724a11.738 11.738 0 01-2.748-10.005c.787-3.273 3.367-6.037 7.242-7.712a10.647 10.647 0 00-2.765 4.598 8.175 8.175 0 00-.154 4.122 8.025 8.025 0 001.874 3.647c2.03 2.33 5.516 3.946 10.483 5.802 4.562 1.705 9.129 3.698 11.61 6.723a11.735 11.735 0 012.743 10.006v-.004z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Secret</div>
                        <div class="Asset__symbol">SCRT</div>
                    </div>
                    <div class="Asset__yield">

                        23.5%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M11 13h34.763v5.562h-29.2v27.81h29.2v5.563H11M11 13v5.562M11 13v38.934M11 13h5.562m0 38.934H11m0 0v-5.562m30.33-9.987c.128.927.38 1.62.757 2.08.688.835 1.868 1.253 3.54 1.253 1 0 1.812-.11 2.436-.33 1.185-.423 1.777-1.208 1.777-2.356 0-.67-.294-1.188-.881-1.556-.588-.358-1.51-.675-2.768-.95l-2.149-.482c-2.111-.477-3.57-.996-4.379-1.556-1.368-.936-2.052-2.4-2.052-4.393 0-1.818.661-3.328 1.983-4.53 1.322-1.203 3.264-1.805 5.825-1.805 2.14 0 3.962.57 5.468 1.708 1.514 1.13 2.309 2.772 2.382 4.93h-4.076c-.074-1.221-.606-2.089-1.598-2.603-.66-.34-1.482-.51-2.465-.51-1.092 0-1.964.221-2.616.662-.652.44-.978 1.055-.978 1.845 0 .725.321 1.267.964 1.625.413.239 1.294.519 2.644.84l3.498.84c1.533.367 2.69.858 3.47 1.474 1.212.954 1.818 2.336 1.818 4.145 0 1.854-.712 3.396-2.135 4.627-1.413 1.22-3.415 1.831-6.004 1.831-2.644 0-4.723-.601-6.238-1.804-1.515-1.212-2.272-2.873-2.272-4.985h4.049z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Skale</div>
                        <div class="Asset__symbol">SKL</div>
                    </div>
                    <div class="Asset__yield">

                        10.2%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><path d="M32.06 32l6.81 8.82 4.76-10.67c1.13-2.47 1.77-5.67-.4-8.71L32.31 6.84 27 18.79a8.65 8.65 0 00-.5 3.94" stroke="currentColor"/><path d="M27.16 41.77l.93 1.23c1.61 2.18 4 4.3 7.72 3.88l18-2.38L46 33.94a8.22 8.22 0 00-3-2.29M36.45 21.73l-11.83 1.2c-2.7.28-5.79 1.34-7.31 4.76L10.2 44.4 23.26 43a8.65 8.65 0 003.65-1.57L21 33.36 32 32z" stroke="currentColor"/><path d="M17.46 28.55a2.74 2.74 0 01-.56-.3L10 19s17.21-2.06 17.36-2.06a4.89 4.89 0 01.83.3M42.57 21.36a5.32 5.32 0 01.77-.51L54 19.63l-6.81 15.59a3.12 3.12 0 01-.49.44M36.23 46.32a3.66 3.66 0 010 .63L31.79 57.2 21.73 43.51a7.72 7.72 0 01-.12-.8M8.87 38.11a24 24 0 01.3-13.32M25.74 55.11A24 24 0 0114.23 48M48.94 49a23.94 23.94 0 01-11.7 6.39M55.21 25.83a24.06 24.06 0 01-.14 12.78M38.34 8.88a24 24 0 0111.12 6.66M15.37 14.79a23.93 23.93 0 0111.55-6.21" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Iris</div>
                        <div class="Asset__symbol">IRIS</div>
                    </div>
                    <div class="Asset__yield">

                        9.3%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M47.512 45.69l-5.078-6.703a1.126 1.126 0 01-.192-.677c.01-.241.148-.44.248-.659.741-1.64 1.88-4.48 2.207-6.141 1.279-6.494-2.435-14.648-10.149-17.832-1.564-.645-5.549-1.586-7.54-1.408-.093.009-.173.073-.24.139a.54.54 0 00-.15.516.546.546 0 00.131.245.498.498 0 00.311.184 23.082 23.082 0 016.635 2.524c4.247 2.471 6.955 6.211 7.059 10.47a10.866 10.866 0 01-.98 4.711c-.432.96-2.751 4.399-3.135 5.027-1.58 2.476-1.072 2.32 1.151 5.411l3.2 4.739 2.164 3.156a29.934 29.934 0 003.511-2.8 20.496 20.496 0 005.782-17.33A20.497 20.497 0 0042.11 14.198M16.488 18.31l5.078 6.703c.135.2.202.437.192.677-.01.241-.148.44-.248.659-.741 1.64-1.88 4.48-2.207 6.141-1.279 6.494 2.435 14.648 10.149 17.832 1.564.645 5.549 1.586 7.54 1.408.093-.009.173-.073.24-.139a.54.54 0 00.15-.516.546.546 0 00-.131-.245.498.498 0 00-.311-.184 23.082 23.082 0 01-6.635-2.524c-4.247-2.471-6.955-6.211-7.059-10.47a10.866 10.866 0 01.98-4.711c.432-.96 2.751-4.399 3.135-5.027 1.58-2.476 1.072-2.32-1.151-5.411l-3.2-4.739-2.164-3.156a29.934 29.934 0 00-3.511 2.8 20.496 20.496 0 00-5.782 17.33A20.497 20.497 0 0021.89 49.802" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Injective</div>
                        <div class="Asset__symbol">INJ</div>
                    </div>
                    <div class="Asset__yield">

                        16.8%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path d="M8 22.06l3.94 8.59M41.94 8H22.06L8 22.06v19.88L22.06 56h19.88L56 41.94V22.06L41.94 8zm-25.73 5.85l31.61 36.27-31.61-36.27zm9.71 11.14l8.27-13.55-8.27 13.55zm-9.71-11.14l17.98-2.41-17.98 2.41zm25.74 9.43l-16.03 1.71 16.03-1.71zm-7.76-11.84l7.76 11.84-7.76-11.84zm7.76 11.84l-3.88 15.65 3.88-15.65zm8.27-7l-8.27 7 8.27-7zM40.01 8l-5.82 3.44L40.01 8zm-5.82 3.44l16.03 4.84-16.03-4.84zM27.91 8l6.28 3.44L27.91 8zm14.04 15.28l10.64 9.65-10.64-9.65zm8.27-7l2.37 16.65-2.37-16.65zm2.37 16.65L56 41.94l-3.41-9.01zM56 28.37l-3.41 4.56L56 28.37zM38.07 38.93l14.52-6-14.52 6zm14.52-6l-4.77 17.19 4.77-17.19zm-30.81 7.62l4.14-15.56-4.14 15.56zm-9.84-9.9l13.98-5.66-13.98 5.66zm4.27-16.8l-4.27 16.8 4.27-16.8zm-4.27 16.8l9.84 9.9-9.84-9.9zm9.84 9.9l16.29-1.62-16.29 1.62zm8.26 10.57l8.03-12.19-8.03 12.19zm-8.26-10.57l8.26 10.57-8.26-10.57zm26.04 9.57l-17.78 1 17.78-1zM25.05 56l4.99-4.88L25.05 56zm10.76 0l-5.77-4.88L35.81 56zM13.7 47.68l8.08-7.13-8.08 7.13zm0 0l16.34 3.44-16.34-3.44zm-1.76-17.03l1.76 17.03-1.76-17.03zM8 35.23l3.94-4.58L8 35.23z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Orbs</div>
                        <div class="Asset__symbol">ORBS</div>
                    </div>
                    <div class="Asset__yield">

                        8.0%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none"><rect x="12.677" y="11.064" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="29.069" y="19.494" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="29.069" y="36.823" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="45.93" y="28.393" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="12.677" y="28.393" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/><rect x="12.677" y="45.722" width="7.494" height="7.494" rx=".953" ry=".953" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Livepeer</div>
                        <div class="Asset__symbol">LPT</div>
                    </div>
                    <div class="Asset__yield">

                        15.4%

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M22.783 57.097l-8.709-5.13V17.9L31.992 6.903l17.869 10.772.065 18.412-17.99 11.024-9.136-5.523-.017 15.509zm-.007-24.677v-9.15l9.196-5.409 8.961 5.374v9.209l-8.952 5.553-9.205-5.577z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Provenance</div>
                        <div class="Asset__symbol">HASH</div>
                    </div>
                    <div class="Asset__yield">

                        ---

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Stake">Stake</span>
                </div>
            </a>


        </div>

        <div class="Assets__grid  js-coming-soon">


            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5"><path d="M37.22 7.594c9.93 0 17.991 8.062 17.991 17.992 0 .276-.054.528-.242.758-.225.274-.5.273-.738.28-.133.004-34.271-.006-34.288-.007-.114-.006-.305-.102-.426-.219-.22-.214-.289-.553-.289-.812 0-9.93 8.062-17.992 17.992-17.992zm16.993 18.03h-.012c-.126.004-30.948-.004-33.97-.006l-.003-.032c0-9.378 7.614-16.992 16.992-16.992s16.991 7.614 16.991 16.992a.51.51 0 00.002.038z"/><path d="M13.183 30.912l.018.001M4.767 35.927l.018.001M13.241 40.892l.018.001M6.944 45.897h.018M31.808 50.858h.018M20.375 55.873l.018.001M15.965 30.885l42.529.028M7.461 35.922h31.563M15.965 40.877h37.706M9.674 45.888h15.645M28.443 45.881l31.465.007M34.5 50.902h19.814M23.089 55.873h19.933" fill="none" stroke="#000"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Moonbeam</div>
                        <div class="Asset__symbol">GLMR</div>
                    </div>
                    <div class="Asset__yield">

                        07/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g fill="none" stroke="#000"><path d="M31.589 5.078c-11.156 0-20.205 9.048-20.205 20.205 0 1.264.112 2.557.365 3.794l2.614-1.799c4.58-3.147 12.027-3.147 16.608 0l2.726 1.883 1.489 1.012c4.131 2.838 10.82 2.838 14.95 0l1.209-.844c2.248-10.931-4.806-21.61-15.737-23.858-1.293-.253-2.642-.365-4.019-.393z"/><path d="M11.109 33.694s5.764-4.983 11.633-4.867c9.813.192 11.653 7.486 20.022 7.62 5.023.08 10.127-4.146 10.127-4.146M14.244 35.59l-.07 10.857M19.218 33.005l.009 14.31M24.097 32.729l.007 26.193M29.068 34.78l-.013 10.82M34.035 37.727l-.007 4.417M38.992 39.616l-.006 14.411M43.93 40.087l-.004 12.586M48.915 38.901l.004 6.725" stroke-linecap="round" stroke-miterlimit="1.5"/></g></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Moonriver</div>
                        <div class="Asset__symbol">MOVR</div>
                    </div>
                    <div class="Asset__yield">

                        07/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g fill="none" stroke="#000"><path d="M16.375 49.156A17.957 17.957 0 0032 58.284c6.466 0 12.45-3.496 15.625-9.128a18.276 18.276 0 000-18.256L33.882 6.815a2.162 2.162 0 00-3.764 0L16.375 30.9a18.276 18.276 0 000 18.256z"/><path d="M25.582 14.755c-1.654 3.818-1.914 8.377-.904 11.592 1.01 3.214 4.206 6.013 7.322 7.694 4.393 2.37 9.022 3.399 11.455 8.088 2.207 4.25.436 10.02-3.817 14.336" stroke-linecap="round" stroke-miterlimit="1.5"/></g></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">SUI</div>
                        <div class="Asset__symbol">SUI</div>
                    </div>
                    <div class="Asset__yield">

                        07/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M44.418 48.723a6.198 6.198 0 016.163-5.574 6.196 6.196 0 016.18 6.622 1.238 1.238 0 01-.084.675 6.199 6.199 0 01-6.096 5.09 6.199 6.199 0 01-5.909-4.335H19.328a6.199 6.199 0 01-5.909 4.335 6.199 6.199 0 01-6.096-5.09 1.238 1.238 0 01-.084-.675 6.196 6.196 0 016.18-6.622 6.198 6.198 0 016.163 5.574h24.836zM25.837 31.381A6.198 6.198 0 0132 25.806a6.198 6.198 0 016.163 5.575h17.373a1.24 1.24 0 010 2.477H37.91A6.2 6.2 0 0132 38.194a6.2 6.2 0 01-5.91-4.336h-6.762a6.198 6.198 0 01-5.909 4.336 6.2 6.2 0 01-6.096-5.091 1.238 1.238 0 01-.084-.674 6.197 6.197 0 016.18-6.623 6.199 6.199 0 016.163 5.575h6.255zm18.581-17.343a6.198 6.198 0 016.163-5.574 6.196 6.196 0 016.18 6.622 1.233 1.233 0 01-.084.674 6.2 6.2 0 01-6.096 5.091 6.199 6.199 0 01-5.909-4.335H37.91A6.2 6.2 0 0132 20.851a6.2 6.2 0 01-5.91-4.335H8.464a1.24 1.24 0 010-2.478h17.373A6.197 6.197 0 0132 8.464a6.197 6.197 0 016.163 5.574h6.255z" fill="none" stroke="#000"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Abacus</div>
                        <div class="Asset__symbol">ABC</div>
                    </div>
                    <div class="Asset__yield">

                        08/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><g fill="none" stroke="#000"><path d="M48.751 23.849c.098-1.178.521-2.762.914-4.137.491.098.982.196 1.473.196 1.277 0 2.358-.491 3.045-1.473.688-1.08.982-2.259.688-3.339-.492-1.866-2.063-3.732-4.813-5.795-2.259-1.571-4.616-2.553-6.482-2.553-.393 0-.688 0-1.08.098-.884.196-1.572.785-2.063 1.768-.589 1.08-.687 2.651-.295 3.535.099.295.295.59.491.982-1.767 1.081-3.005 1.52-3.103 1.52"/><path d="M39.554 13.743s1.067-.605 1.485-.87c.351-.222 1.021-.717 1.021-.717s-.623-1.495.272-2.273c.765-.665 4.171.773 5.873 2.042 1.747 1.302 5.659 4.167 4.518 5.607-.843 1.065-2.125.438-2.125.438s-.475.462-.889 1.629c-.373 1.053-.505 1.824-.505 1.824" stroke-linecap="round" stroke-miterlimit="1.5"/><path d="M49.791 19.338s.372-.917.993-2.137c.582-1.145 1.28-1.903 1.28-1.903" stroke-linecap="round" stroke-miterlimit="1.5"/><path d="M30.54 57.252c-11.921 0-21.524-9.713-21.524-21.855 0-12.141 9.603-21.965 21.524-21.965 11.81 0 21.524 9.824 21.524 21.965 0 12.142-9.714 21.855-21.524 21.855z"/><path d="M10.594 35.715c0 .509.701 1.64 1.336 2.231.923.859 2.419 2.128 4.201 2.925 2.082.93 5.565 1.645 7.591 1.791 1.641.118 3.463.034 4.465 0 .75-.025 1.427-.102 2.242-.204 5.707-.815 8.662-2.547 12.025-3.668 3.669-1.223 7.809-1.345 7.809-3.282v-.203c-.204-2.14-4.854-3.139-9.745-3.649-3.669-.305-7.337.102-11.515 1.325-3.669 1.121-6.93.917-9.274.612-5.197-.612-9.135-.731-9.135 1.918v.204z"/><path d="M52.064 36.567c-1.107 1.712-3.39 2.532-5.281 2.951-1.225.272-4.716 1.516-5.709 1.957-2.649 1.104-5.082 2.181-9.828 2.843-1.656.221-4.359.497-6.014.497-7.285 0-13.142-2.47-16.216-7.674"/><circle cx="24.37" cy="49.656" r="1.478" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="29.061" cy="50.691" r=".767" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="31.975" cy="52.977" r=".245" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="34.659" cy="49.924" r=".767" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="36.975" cy="52.392" r=".232" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="40.408" cy="45.168" r="1.294" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="37.062" cy="22.019" r="3.11" stroke-linecap="round" stroke-miterlimit="1.5"/><circle cx="42.895" cy="26.779" r="1.225" stroke-linecap="round" stroke-miterlimit="1.5"/><path d="M41.165 12.82s1.007-.572 2.065-1.393c.516-.4 1.107-1.235 1.107-1.235" stroke-linecap="round" stroke-miterlimit="1.5"/></g></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Osmosis</div>
                        <div class="Asset__symbol">OSMO</div>
                    </div>
                    <div class="Asset__yield">

                        08/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M13.324 48.398v-.041c0 1.314.164 2.176.451 2.791.247.493.616.903 1.314 1.355l.041.041c.164.082.328.205.533.328l.247.164.739.452m34.027-37.845c0-1.314-.164-2.176-.451-2.791-.247-.493-.616-.903-1.314-1.355l-.082-.041c-.164-.082-.328-.205-.534-.328l-.246-.164-.739-.452M29.832 7.228c1.222-.631 3.075-.631 4.336 0l12.084 6.582c.749.394 1.143.985 1.222 1.577v33.069c0 .67-.434 1.3-1.222 1.734l-12.084 6.582c-1.222.631-3.075.631-4.336 0L17.748 50.19c-.788-.434-1.182-1.064-1.222-1.734V15.387c.04-.592.434-1.183 1.183-1.577l12.123-6.582z" fill="none" stroke="#000"/><path d="M47.474 15.456l-13.203 6.958c-1.221.631-3.074.631-4.335 0l-13.347-7.252M47.474 32l-13.203 7.338c-1.221.63-3.074.63-4.335 0l-13.347-7.253M47.442 31.208L34.24 23.871c-1.222-.631-3.074-.631-4.336 0l-13.346 7.252" fill="none" stroke="#000"/><path d="M32.031 23.398L32 39.811" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="1.5"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Fantom</div>
                        <div class="Asset__symbol">FTM</div>
                    </div>
                    <div class="Asset__yield">

                        08/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M23.321 48.248h-7.477c-1.773 0-2.659 0-3.19-.343a2.143 2.143 0 01-.974-1.675c-.035-.631.404-1.4 1.282-2.938l16.369-28.674c.891-1.56 1.337-2.34 1.904-2.631a2.144 2.144 0 011.951-.001c.567.289 1.014 1.069 1.907 2.629l3.775 6.59c.65 1.134.975 1.701 1.117 2.299.155.651.156 1.33.001 1.981-.142.598-.466 1.165-1.115 2.3l-9.789 17.122c-.657 1.151-.987 1.726-1.438 2.157a4.287 4.287 0 01-1.735 1.007c-.598.177-1.262.177-2.588.177zm26.672.001h-8.668c-1.788 0-2.683 0-3.215-.347a2.137 2.137 0 01-.97-1.686c-.032-.633.418-1.405 1.318-2.949l4.328-7.423c.888-1.525 1.333-2.287 1.896-2.573a2.145 2.145 0 011.935-.001c.564.285 1.009 1.046 1.9 2.57l4.341 7.422c.904 1.545 1.356 2.318 1.325 2.952a2.142 2.142 0 01-.97 1.688c-.532.347-1.428.347-3.22.347z" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Avalanche</div>
                        <div class="Asset__symbol">AVAX</div>
                    </div>
                    <div class="Asset__yield">

                        08/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M7.576 33.547l6.618-.004a2.537 2.537 0 012.064 1.046l9.818 13.531 13.961-30.724c.198-.45.524-.832.939-1.1a2.564 2.564 0 011.393-.411l14.055-.005" stroke="currentColor"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Radix</div>
                        <div class="Asset__symbol">XRD</div>
                    </div>
                    <div class="Asset__yield">

                        09/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M38.978 9.457v8.788c0 2.851-2.352 5.159-5.257 5.159h-.077c-1.457-.008-2.769 0-2.769 0-.247 0-.519-.025-.758 0-1.636.167-3.058.895-4.251 2.191a1.03 1.03 0 00-.094.109c-.963 1.22-1.491 2.801-1.491 4.507v.083c0 1.096.23 2.141.648 3.077.417.937.204 2.024-.597 2.676a204.97 204.97 0 01-2.334 1.89 11.244 11.244 0 01-2.88-7.551v-.083c0-6.28 5.121-11.514 12.073-11.514h2.513V8.512A22.913 22.913 0 0032 8.445C18.743 8.445 8 18.989 8 32c0 10.628 7.174 19.608 17.022 22.535v-8.722c0-2.876 2.377-5.209 5.308-5.209h.026c1.457.008 2.769 0 2.769 0 .247 0 .519.025.758 0 1.636-.167 3.058-.895 4.251-2.191.034-.033.068-.075.094-.108.963-1.221 1.491-2.802 1.491-4.507v-.084c0-.853-.367-1.998-.733-2.918a2.548 2.548 0 01.767-2.91 153.13 153.13 0 012.249-1.806 11.242 11.242 0 012.88 7.551v.083c0 6.28-5.121 11.514-12.073 11.514h-2.513v10.26c.562.042 1.133.067 1.704.067 13.257 0 24-10.544 24-23.555 0-10.628-7.174-19.608-17.022-22.543z" fill="none" stroke="#000" stroke-width="1.33"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Pocket Network</div>
                        <div class="Asset__symbol">POKT</div>
                    </div>
                    <div class="Asset__yield">

                        09/22

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>



            <a class="Assets__item Asset Asset--"
               href="{{ route('login') }}"

               target="_blank"

            >
                <div class="Asset__main">
                    <div class="Asset__icon">
                        <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M20.729 31.006c-.089-.178-.134-.223-.134-.312-.044-7.964 7.787-14.728 15.663-13.482 1.112.178 2.224.579 3.337.757.356.044.756-.223 1.112-.401-.133-.356-.267-.756-.445-1.112-.089-.134-.356-.178-.534-.267-8.409-4.138-18.51-1.068-23.048 7.119-1.202 2.18-2.181 4.494-3.071 6.852-1.201 3.204-3.159 5.74-5.829 7.787-1.245.979-2.491 2.002-3.604 3.115-.445.445-.801 1.424-.578 1.824.267.534 1.157.934 1.78.979a29.78 29.78 0 004.449-.089c3.248-.267 6.363.133 9.3 1.646 1.824.935 3.693 1.869 5.606 2.626 7.609 3.114 14.817 1.646 20.29-4.139 1.602-1.646 2.759-3.604 3.515-5.784.134-.311-.222-.801-.356-1.201-.4.178-.756.311-1.156.534-.089.044-.134.222-.223.356-4.005 7.163-13.26 9.388-20.067 4.761-2.715-1.825-4.539-4.316-5.518-7.476.178-.133.267-.222.401-.267 8.365-3.782 16.952-6.985 25.896-9.299.667-.178.979.044 1.112.667.267.935.534 1.825.757 2.759.133.623.445.934 1.068.578 3.114-1.69 6.185-3.381 8.765-5.873.712-.667 1.602-1.424 1.113-2.536-.445-.979-1.602-1.024-2.492-.979-2.225.133-4.494.267-6.674.712-8.366 1.602-16.33 4.405-24.206 7.564-2.091.801-4.138 1.691-6.229 2.581z" fill="none" stroke="#000"/></svg>
                    </div>
                    <div class="Asset__text">
                        <div class="Asset__name">Evmos</div>
                        <div class="Asset__symbol">EVMOS</div>
                    </div>
                    <div class="Asset__yield">

                        TBD

                    </div>
                </div>
                <div class="Asset__hover">
                    <span   class="Btn Btn--ecstasy Btn--invert  " title="Notify">Notify</span>
                </div>
            </a>


        </div>

    </div>
</section>

<section class="Eth2Status Container Container--mob-fw">

    <div class="Eth2Status__copy">
        <h2 class="Eth2Status__header Header"><b>Crypto’s Trusted Partner of Choice for ETH2 Staking</b></h2>
        <p>Staked’s robust suite of ETH2 infrastructure and tooling make it easy for large ETH holders, institutional investors, custodians and exchanges to participate in ETH2 staking.</p>

        <a href="{{ route('login') }}"  class="Btn Btn--indigo Btn--invert  Btn--expanded Eth2Status__cta" title="Stake Now">Stake Now</a>
    </div>

    <div class="Eth2Status__wrapper">
        <div class="Eth2Status__chart">
            <section class="Perfomance-Chart ">
                <div class="Perfomance-Chart__body">
                    <div class="Perfomance-Chart__chart">
                        <div class="Chart__loading js-loading"><div class="Loading"></div></div>
                        <canvas class="Chart" id="chart"></canvas>
                    </div>
                </div>
                <div class="Chart__axis-label Chart__axis-label--y">Implied yield</div>
                <div class="Chart__axis-label Chart__axis-label--x">ETH Staked</div>
            </section>
            <div class="Chart__sub">
                <div class="Chart__legends Legend">
                    <div class="Legend__value">ETH Staked</div>
                    <div class="Legend__value">Stake Rate</div>
                    <div class="Legend__value">Implied Yield</div>

                    <div class="Legend__value">1,040,000</div>
                    <div class="Legend__value">0.9%</div>
                    <div class="Legend__value">17.7%</div>

                    <div class="Legend__value">5,240,000</div>
                    <div class="Legend__value">4.7%</div>
                    <div class="Legend__value">7.5%</div>

                    <div class="Legend__value">11,010,000</div>
                    <div class="Legend__value">9.8%</div>
                    <div class="Legend__value">5.1%</div>
                </div>
                <div class="Chart__sub-text">
                    <h3><b>Yields of 7% - 20%</b></h3>
                    <p>Initial yields will be 15% - 20% when the ETH stake rate is less than 1% (1,000,000 ETH), and will gradually decrease to 7% as the stake rate approaches 5% (5,000,000 ETH).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Pros Container">
    <div class="Pros__header">
        <h2 class="Header"><b>Why Choose Staked</b>?</h2>
        <p class="Pros__hint">
            Staked has been the trusted staking and defi lending partner of choice
            to the leading projects, investment funds, exchanges, custodians and
            wallet providers in crypto for the past 3 years.
        </p>
    </div>
    <div class="Pros__grid">
        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/reliable_and_secure.62bd64796717.svg">
            <h3 class="Pros-Item__header Header">Highly Available Infrastructure</h3>
            We use Kubernetes to distribute across 5 clouds with automated failover, and no Staked customer has suffered losses due to slashing or extended downtime.
        </div>

        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/Tech_3.4eb9a23ce26c.svg">
            <h3 class="Pros-Item__header Header">Diligenced by The Best</h3>
            Our technical infrastructure has been audited by security and devops teams at the leading protocols, exchanges and custodians.</div>

        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/assets_coverage.85430390d6b0.svg">
            <h3 class="Pros-Item__header Header">Broadest Asset Coverage</h3>
            With support for 30+ assets and 15+ more coming soon, Staked delivers rewards across the broadest range of crypto assets.
        </div>

        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/Tech_4.0f7b945076bc.svg">
            <h3 class="Pros-Item__header Header">Optimal Rewards</h3>
            We use custom software to optimize rewards based on the unique dynamics of each chain or protocol&nbsp;we support.</div>

        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/api.b4a9fc549c40.svg">
            <h3 class="Pros-Item__header Header">API for Everything</h3>
            Programmatic access to all staking, defi lending and reporting functionality makes integrations easy&nbsp;and seamless.
        </div>

        <div>
            <img src="https://storage.googleapis.com/static-webapp-220401-prod/static/i/svg/block_level_reporting.ad04bb532875.svg">
            <h3 class="Pros-Item__header Header">Multi-Asset Reporting</h3>
            Designed for fund admins and accountants, the block-level reporting is exportable, and includes all staking and delegation transactions.
        </div>
    </div>
</section>

<section class="FAQ Container">
    <h2 class="FAQ__header Header">Frequently Asked Questions</h2>
    <div class="Accordion js-accordion">

        <div class="Accordion-Item">
            <div class="Accordion-Item__question" tabindex="0">Can I buy tokens from Staked?</div>
            <div class="Accordion-Item__answer">
                No, Staked does not sell any tokens. You can buy tokens from <a href=https://www.kraken.com/ target="_blank">Kraken</a>
            </div>
        </div>

        <div class="Accordion-Item">
            <div class="Accordion-Item__question" tabindex="0">How does custody for staking and lending work?</div>
            <div class="Accordion-Item__answer">
                Staking and lending are both non-custodial. You are always in complete control of your private keys and funds throughout the staking and lending processes. You are free to undelegate or withdraw your funds at any time, subject to the lock-up requirements for each protocol.
            </div>
        </div>

        <div class="Accordion-Item">
            <div class="Accordion-Item__question" tabindex="0">How do I get started?</div>
            <div class="Accordion-Item__answer">
                If you have not yet delegated to Assets-Cryptoview, please visit <a href={{ route('login') }}>All Yields</a> for a complete list of supported assets as well as staking instructions. If you have already delegated to Assets-Cryptoview and want reporting, please create a <a href={{ route('register') }}>Assets-Cryptoview account</a>. If you would like to speak with a Assets-Cryptoview representative, please <a href={{ route('login') }}>schedule time</a> with us.
            </div>
        </div>

    </div>

</section>


@endsection
