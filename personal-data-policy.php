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
            <span class="section-subtitle" data-aos="fade-down">Privacy & Security</span>
            <h1 data-aos="fade-up">Polityka dotycząca przetwarzania danych osobowych</h1>

            <div class="legal-content">
                <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Postanowienia ogólne</h2>
                    <p>
                        Niniejsza polityka przetwarzania danych osobowych (dalej jako „Polityka”) określa zasady i warunki przetwarzania danych osobowych podejmowane przez platformę <strong><?= $domainTitle ?></strong> (dalej jako „Operator”) oraz określa środki zapewniające bezpieczeństwo tych danych zgodnie z regulacjami UE (RODO).
                    </p>
                    <p>
                        1.1. Najważniejszym celem Operatora jest przestrzeganie praw i wolności człowieka podczas przetwarzania jego danych osobowych, w tym ochrona prawa do prywatności oraz zapewnienie wsparcia eksperckiego na wszystkich etapach interakcji.
                    </p>
                    <p>
                        1.2. Niniejsza Polityka ma zastosowanie do wszystkich informacji, które Operator może uzyskać o osobach odwiedzających (dalej jako „Użytkownicy”) witrynę internetową <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>2. Podstawowe pojęcia</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Strona internetowa</strong> — zbiór materiałów graficznych i informacyjnych <strong><?= $fullDomain ?></strong>, zapewniający dostęp do platformy.
                        </li>
                        <li><strong>Użytkownik</strong> — każda osoba odwiedzająca stronę internetową, zainteresowana szkoleniami IT.</li>
                        <li>
                            <strong>Dane osobowe</strong> — wszelkie informacje odnoszące się bezpośrednio lub pośrednio do Użytkownika.
                        </li>
                        <li>
                            <strong>Przetwarzanie danych</strong> — każda czynność wykonywana na danych (zbieranie, utrwalanie, przechowywanie) w celu zapewnienia szybkiego startu na platformie.
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>3. Dane, które przetwarzamy</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="shield-check"></i>
                            </div>
                            <div>
                                <strong>Dane osobowe:</strong>
                                <span>Imię i nazwisko, adres e-mail, numer telefonu (do kontaktu z ekspertami).</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="database"></i>
                            </div>
                            <div>
                                <strong>Dane techniczne:</strong>
                                <span>Pliki cookies, adres IP, dane przeglądarki w celu optymalizacji interfejsu użytkownika.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>4. Cele przetwarzania danych</h2>
                    <ul class="legal-list">
                        <li>Identyfikacja Użytkownika w celu zapewnienia dostępu do platformy edukacyjnej.</li>
                        <li>Nawiązanie kontaktu zwrotnego oraz bezpłatne konsultacje we wszystkich kwestiach.</li>
                        <li>Realizacja umów i strategii wzrostu opartych na innowacjach.</li>
                        <li>Poprawa jakości pracy szkoły IT <?= $domainTitle ?> w Polsce.</li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>5. Podstawy prawne</h2>
                    <p>
                        Operator przetwarza dane wyłącznie po uzyskaniu dobrowolnej zgody Użytkownika. Korzystamy z zaawansowanej infrastruktury cyfrowej w celu ochrony Twoich informacji. Jeśli obsługa plików „cookies” jest włączona w Twojej przeglądarce, platforma będzie ich używać w celu poprawy komfortu użytkowania.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>6. Pytania i opinie</h2>
                    <p>Jeśli masz jakiekolwiek pytania dotyczące przetwarzania danych na platformie <strong><?= $domainTitle ?></strong>, skontaktuj się z nami:</p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Telefon:</strong> <a href="tel:+482273352563">+48 22 733 52 563</a>
                        </li>
                    </ul>
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
                    <li><a href="./#benefits">Zalety</a></li>
                    <li><a href="./#faq">Pytania i odpowiedzi</a></li>
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
            <p>Ta strona używa plików cookies w celu poprawy działania. Więcej szczegółów w naszej <a href="./cookies.php">Polityce Cookies</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Akceptuję</button>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
    <script src="script.js"></script>
</body>
</html>