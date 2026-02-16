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
            <span class="section-subtitle" data-aos="fade-down">Terms & Conditions</span>
            <h1 data-aos="fade-up">Warunki korzystania</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Witamy w serwisie <strong><?= $domainTitle ?></strong>! Niniejsze Warunki korzystania stanowią prawnie wiążącą umowę między Tobą (dalej „Użytkownik”) a <strong><?= $domainTitle ?></strong>. Korzystając z naszej platformy, potwierdzasz pełną akceptację niniejszych Warunków.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>1. Przedmiot Umowy</h2>
                    <p>
                        Firma zapewnia Użytkownikowi dostęp do serwisu <strong><?= $fullDomain ?></strong> oraz jego funkcjonalności, w tym: dostępu do innowacyjnych materiałów edukacyjnych, narzędzi AI, zadań praktycznych oraz zaawansowanej infrastruktury cyfrowej. Niniejsza Umowa reguluje wszystkie aspekty interakcji Użytkownika z platformą szkoły IT.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>2. Obowiązki i prawa Użytkownika</h2>
                    <p>Podczas korzystania z platformy <strong><?= $domainTitle ?></strong> zabrania się:</p>
                    <ul class="legal-list">
                        <li>Publikowania lub przesyłania jakichkolwiek treści nielegalnych, szkodliwych lub zniesławiających.</li>
                        <li>Podejmowania działań, które mogą zakłócić działanie infrastruktury cyfrowej <strong><?= $domainTitle ?></strong>.</li>
                        <li>Używania zautomatyzowanych skryptów (botów) do zbierania informacji bez pisemnej zgody.</li>
                        <li>Podawania nieprawdziwych informacji podczas rejestracji na szkolenie lub konsultację.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>3. Własność intelektualna</h2>
                    <div class="property-block">
                        <i data-lucide="copyright"></i>
                        <p>
                            Cała zawartość serwisu <strong><?= $fullDomain ?></strong> (teksty kursów, kod programistyczny, grafiki, logo) jest własnością Firmy. Użytkownik otrzymuje ograniczoną licencję na użytek osobisty w celach szkoleniowych IT. Jakiekolwiek kopiowanie materiałów platformy bez zgody jest zabronione.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>4. Ograniczenie odpowiedzialności</h2>
                    <div class="warning-block">
                        <p>
                            Usługi platformy są świadczone na zasadzie <strong>„tak jak są” (as is)</strong>. Firma nie ponosi odpowiedzialności za jakiekolwiek szkody wynikające z korzystania lub niemożności korzystania z innowacyjnych narzędzi <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up" data-aos-delay="600">
                    <h2>5. Zmiany i rozstrzyganie sporów</h2>
                    <p>
                        Zastrzegamy sobie prawo do zmiany Warunków w dowolnym momencie. Wszystkie spory strony będą starały się rozwiązać na drodze konstruktywnych negocjacji. W przypadku braku porozumienia, spór podlega rozpatrzeniu zgodnie z prawem polskim według miejsca rejestracji Firmy w Warszawie.
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Informacje kontaktowe</h2>
                    <p>Jeśli masz pytania dotyczące niniejszych Warunków w 2026 roku, skontaktuj się z nami:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="btn btn--secondary">
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
            <p>Ta strona używa plików cookies w celu poprawy działania. Więcej w naszej <a href="./cookies.php">Polityce Cookies</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Akceptuję</button>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
    <script src="script.js"></script>
</body>
</html>