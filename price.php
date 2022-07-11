<!DOCTYPE html>
<html lang="nb-NO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/25a3d60238.js" crossorigin="anonymous"></script>
    <!-- <link rel="short icon" type="image/png" href="img/photo/favicon/favicon-32x32.png">
    <link rel="short icon" type="image/png" href="img/photo/favicon/favicon-16x16.png"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/price.css">
    <title>JD PROFF-price</title>
    <meta name="description" content="oferujemy usługi z zakresu prac budowlanych .Zajmujemy się wykonywaniem prac na terenie Oslo i okolic.
podejmujemy się długoterminowych prac wyjazdowych.">
</head>

<body>
    <div class="grid-container">
        <header class="header">
            <?php include 'menu.php'; ?>
        </header>
        <main class="price">
            <article id="price" class="price__container">
                <h1 class="price__title title-heading">Cennik firmy jd proff</h1>
                <section class="price__section price__section--a">
                    <h2 class="price__subtitle title-heading">Szanowni Państwo</h2>
                    <p class="price__text">
                        Cennik remontu mieszkania, domu czy innego lokalu uzależniony jest od wielu czynników. Takich
                        chociażby jak:</p>
                    <ul class="price__list-container">
                        <li class="price__list">Dobór materiałów,</li>
                        <li class="price__list">Cena za materiał,</li>
                        <li class="price__list">Sam kosztorys remontu</li>
                        <li class="price__list">Wielu, wielu innych.</li>
                    </ul>
                    <p class="price__text">Nasza firma remontowa do każdego klienta podchodzi indywidualnie, stąd ciężko
                        określić jedną stawkę
                        za nasze
                        usługi.Chcielibyśmy za to Państwu zaoferować bezpłatną wycene, za dany projekt.Jedynie co trzeba
                        zrobić to
                        skontaktować się z nami poprzez formularz kontaktowy, bądź telefonicznie.</p>
                    <p class="price__text">Po pierwszym kontakcie
                        ustalamy czas prac
                        oraz cenę wykonywanych prac. Szanujemy Państwa oraz swój czas, stąd wycena za remonty i
                        wykończenia
                        jest robiona bardzo
                        szybko, starannie, tak by nie była uciążliwa</p>
                </section>
                <section class="price__section price__section--b">
                    <img class="price__img" src="./src/img/photo/svg icon/jdproff_logo-about-svg.svg" alt="">
                    <div class="price__buttons">
                        <a class="price__btn" href="gallery.php">Galeria zdjęć</a>
                        <a class="price__btn" href="index.php">Kontakt</a>
                    </div>
                </section>
            </article>
        </main>
        <footer class="footer wrapper-style">
            <?php include 'footer.php'; ?>
        </footer>
    </div>
    <script type="module" src="./js/navigation-menu.js"></script>
</body>

</html>