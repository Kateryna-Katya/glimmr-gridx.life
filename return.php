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
            <span class="section-subtitle" data-aos="fade-down">Payment & Refunds</span>
            <h1 data-aos="fade-up">Polityka zwrotu kosztów</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Dążymy do maksymalnej przejrzystości w relacjach z naszymi klientami. 
                        W <strong><?= $domainTitle ?></strong> obowiązuje jasna procedura zwrotu środków, 
                        oparta na jakości świadczonych usług oraz ochronie praw konsumenta w Unii Europejskiej.
                    </p>
                </div>

                <h2 data-aos="fade-up">Warunki ubiegania się o zwrot</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                        <h3>Niezgodność z programem</h3>
                        <p>Jeśli treść materiałów znacząco odbiega od deklarowanej w opisie kursu na platformie <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="refund-card__icon"><i data-lucide="terminal"></i></div>
                        <h3>Problemy techniczne</h3>
                        <p>Krytyczne błędy infrastruktury <strong><?= $fullDomain ?></strong>, uniemożliwiające naukę, które nie zostały usunięte w terminie.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                        <h3>Okres na odstąpienie</h3>
                        <p>Prawo do odstąpienia od umowy w ciągu 14 dni od daty płatności, pod warunkiem, że nie rozpoczęto aktywnego korzystania z materiałów.</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Procedura zgłaszania zwrotu</h2>
                    <p>Aby zainicjować procedurę na platformie <strong><?= $domainTitle ?></strong>, wykonaj następujące kroki:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Wiadomość na adres <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Temat: „Wniosek o zwrot środków”</div>
                        <div class="step-mini"><span>3</span> Dane: Imię i nazwisko, Email, Nazwa programu</div>
                        <div class="step-mini"><span>4</span> Opis przyczyny zgłoszenia</div>
                    </div>
                </div>

                <h2 data-aos="fade-up">Terminy i sposób zwrotu</h2>
                <p data-aos="fade-up">
                    Po zatwierdzeniu wniosku, zwrot środków zostanie dokonany w ciągu <strong>7–14 dni roboczych</strong>. 
                    Środki są zwracane tą samą metodą, którą dokonano płatności. Należy pamiętać, że faktyczny termin 
                    księgowania zależy od regulaminu Twojego banku w Polsce lub kraju pobytu w UE.
                </p>

                <div class="warning-block" data-aos="fade-up">
                    <h2>Wyłączenia i ograniczenia</h2>
                    <ul class="legal-list">
                        <li>Wniosek złożony po upływie 14 dni kalendarzowych od daty płatności.</li>
                        <li>Użytkownik wyświetlił lub pobrał ponad 50% materiałów programu.</li>
                        <li>Problemy techniczne po stronie użytkownika (oprogramowanie, niestabilne łącze).</li>
                        <li>Naruszenie warunków korzystania z platformy <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Skontaktuj się z nami</h2>
                    <p>W przypadku pytań dotyczących zwrotu środków, prosimy o kontakt z naszym wsparciem eksperckim:</p>
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