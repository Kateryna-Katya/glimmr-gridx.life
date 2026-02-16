<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Technologie nowej generacji</title>
    
    <link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect x='35' y='35' width='30' height='30' rx='4' fill='%2310B981'/%3E%3Cpath d='M10,10 L30,30 M90,10 L70,30 M90,90 L70,70 M10,90 L30,70' stroke='%238B5CF6' stroke-width='12' stroke-linecap='round'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <div class="logo__icon"></div>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="mobileMenu">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Start</a></li>
                    <li><a href="./#about" class="nav__link">O nas</a></li>
                    <li><a href="./#courses" class="nav__link">Kursy</a></li>
                    <li><a href="./#mentors" class="nav__link">Mentorzy</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                    <li><a href="./#contact" class="nav__link nav__link--mobile-only">Kontakt</a></li>
                </ul>
            </nav>
    
            <a href="./#contact" class="btn btn--header">
                <span>Kontakt</span>
                <i data-lucide="arrow-up-right"></i>
            </a>
    
            <button class="burger" id="burgerBtn" aria-label="Otwórz menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-subtitle" data-aos="fade-down">Privacy Policy</span>
            <h1 data-aos="fade-up">Polityka prywatności</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Polityka prywatności dotyczy danych osobowych dostarczanych przez klientów <strong><?= $domainTitle ?></strong>, zarówno w celu świadczenia usług szkoleniowych IT, jak i innych interakcji w ramach naszej zaawansowanej infrastruktury cyfrowej.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <strong><?= $domainTitle ?></strong> zastrzega sobie prawo do wprowadzania zmian w postanowieniach Polityki. Należy pamiętać, że nasze technologie nowej generacji mogą zawierać linki do zasobów stron trzecich. Przekazując swoje dane, wyrażasz pełną zgodę na ich przetwarzanie w sposób przewidziany w niniejszej Polityce.
                    </p>
                </div>

                <h2 data-aos="fade-up">Zasady zbierania, przechowywania i usuwania</h2>
                <div class="storage-info">
                    <div class="storage-item" data-aos="zoom-in" data-aos-delay="300">
                        <i data-lucide="history"></i>
                        <span>Okres przechowywania do <strong>75 lat</strong></span>
                    </div>
                    <div class="storage-item" data-aos="zoom-in" data-aos-delay="400">
                        <i data-lucide="user-check"></i>
                        <span>Wyłącznie za Twoją zgodą</span>
                    </div>
                </div>
                <p data-aos="fade-up">
                    Aby zapobiec wyciekowi danych, stosujemy pełen kompleks środków bezpieczeństwa informacji, zgodnych ze standardami UE (RODO). Usunięcie lub zablokowanie danych następuje na prośbę klienta lub po osiągnięciu celów ich gromadzenia.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="fade-right" data-aos-delay="500">
                        <h3><i data-lucide="cpu"></i> Informacje techniczne</h3>
                        <ul>
                            <li>Adres IP i czas dostępu</li>
                            <li>Źródła przejścia do <strong><?= $fullDomain ?></strong></li>
                            <li>Dane przeglądarki i wyświetlane sekcje</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="fade-left" data-aos-delay="500">
                        <h3><i data-lucide="contact"></i> Personalizacja</h3>
                        <ul>
                            <li>Nazwa użytkownika</li>
                            <li>E-mail i numer telefonu</li>
                            <li>Dane o umowach i kursach</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-up">Cele przetwarzania danych osobowych</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Zapewnienie dostępu do innowacyjnej platformy szkoleniowej.</li>
                    <li>Uwzględnienie preferencji przy opracowywaniu nowych rozwiązań technologicznych.</li>
                    <li>Informowanie o promocjach i materiałach na terenie Europy.</li>
                    <li>Zapewnienie wysokiej jakości informacji zwrotnej i wsparcia ekspertów.</li>
                </ul>

                <h2 data-aos="fade-up">Korzystanie z plików Cookies</h2>
                <p data-aos="fade-up">
                    Pliki cookie pozwalają nam analizować ruch i zapisywać Twoje preferencje (np. ustawienia regionalne dla Polski), aby korzystanie z <strong><?= $fullDomain ?></strong> było wygodniejsze. Możesz je wyłączyć w ustawieniach swojej przeglądarki.
                </p>

                <div class="rights-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>Twoje prawa</h2>
                    <p>
                        Jeśli chcesz edytować swoje dane lub zaprzestać ich przetwarzania w systemie <strong><?= $domainTitle ?></strong>, skontaktuj się z nami:
                    </p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="btn btn--primary">
                        <span>support@<?= $fullDomain ?></span>
                        <i data-lucide="mail"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Innowacyjna szkoła IT zapewniająca zaawansowaną infrastrukturę cyfrową do nauki zawodów przyszłości. Platforma Roku dla Twojego szybkiego startu.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Nawigacja</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Start</a></li>
                    <li><a href="./#courses">Kursy</a></li>
                    <li><a href="./#benefits">Korzyści</a></li>
                    <li><a href="./#faq">Często zadawane pytania</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Informacje prawne</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Use</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Kontakt</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+482273352563">+48 22 733 52 563</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Aleje Jerozolimskie 54, 00-024 Warszawa, Polska</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p>&copy; 2026 <?= $domainTitle ?>. Wszelkie prawa zastrzeżone. Oferta aktywna w krajach UE.</p>
            </div>
        </div>
    </footer>

    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Ta strona używa plików cookies w celu poprawy działania. Więcej informacji w naszej <a href="./cookies.php">Polityce Cookies</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Akceptuję</button>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
    <script src="script.js"></script>
</body>
</html>