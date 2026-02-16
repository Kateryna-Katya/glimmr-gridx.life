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
            <a href="/" class="logo">
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
            <span class="section-subtitle" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Polityka plików cookies</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                    Witamy w <strong><?= $domainTitle ?></strong>! Aby poprawić komfort korzystania z naszej witryny, zapewnić jej prawidłowe działanie oraz 
                    analizować aktywność użytkowników, używamy plików cookies i podobnych technologii.
                </p>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="200">
                    <h2>Czym są pliki cookies?</h2>
                    <p>
                        Plik cookie to niewielki fragment danych (plik tekstowy), który witryna internetowa zapisuje na Twoim urządzeniu podczas jej odwiedzania. 
                        Pozwala to platformie <strong><?= $domainTitle ?></strong> „zapamiętać” Twoje działania i preferencje (takie jak język, ustawienia regionalne Polski 
                        i inne parametry) przez określony czas.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="300">
                    <h2>Jakie rodzaje plików cookies stosujemy?</h2>
                    <p>
                        Klasyfikujemy pliki cookies używane w serwisie <strong><?= $fullDomain ?></strong> według następujących kategorii:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Niezbędne:</strong> Mają kluczowe znaczenie dla funkcjonowania strony. Pozwalają na poruszanie się po stronach <strong><?= $domainTitle ?></strong> i zapewniają bezpieczeństwo.
                        </li>
                        <li>
                            <strong>Analityczne:</strong> Zbieranie anonimowych informacji o tym, jak odwiedzający korzystają z naszej witryny, abyśmy mogli rozwijać edukację IT.
                        </li>
                        <li>
                            <strong>Funkcjonalne:</strong> Pozwalają zapamiętać Twoje wybory w celu spersonalizowania doświadczeń i szybkiej adaptacji bez komplikacji.
                        </li>
                        <li>
                            <strong>Marketingowe:</strong> Służą do dostarczania reklam dopasowanych do Twoich zainteresowań w branży technologicznej.
                        </li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="400">
                    <h2>Dlaczego używamy plików cookies?</h2>
                    <ul class="legal-list">
                        <li>Zapewnienie zaawansowanej infrastruktury cyfrowej platformy.</li>
                        <li>Analiza zachowań użytkowników w celu optymalizacji metodologii nauczania.</li>
                        <li>Personalizacja treści: oferta jest aktywna wyłącznie w krajach UE.</li>
                        <li>Dostarczanie istotnych materiałów marketingowych dotyczących kariery w IT.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="500">
                    <h2>Twój wybór i zarządzanie</h2>
                    <p>
                        Masz pełną kontrolę nad plikami cookies. Możesz w dowolnym momencie zmienić ustawienia w swojej przeglądarce. 
                        Pamiętaj jednak, że wyłączenie niezbędnych plików cookies może spowodować nieprawidłowe działanie niektórych funkcji serwisu <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>Informacje kontaktowe</h2>
                    <p>
                        Jeśli masz jakiekolwiek pytania dotyczące polityki w serwisie <strong><?= $domainTitle ?></strong>, skontaktuj się z nami:
                    </p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Telefon:</strong> <a href="tel:+482273352563">+48 22 733 52 563</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Adres:</strong> Aleje Jerozolimskie 54, 00-024 Warszawa, Polska
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
                    <li><a href="./#benefits">Korzyści</a></li>
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