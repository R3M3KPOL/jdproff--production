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
    <link rel="stylesheet" href="./src/css/masonry.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>JD PROFF</title>
    <meta name="description" content="oferujemy usługi z zakresu prac budowlanych .Zajmujemy się wykonywaniem prac na terenie Oslo i okolic.
podejmujemy się długoterminowych prac wyjazdowych.">
</head>

<body>
    <div class="grid-container">
        <header class="header">
            <?php include 'menu.php'; ?>
        </header>
        <main class="gallery">
            <div class="gallery__container">
                <article class="gallery__description">
                    <h1 data-text="Galeria" class="gallery__title title-heading">Prosjekter</h1>
                    <fieldset class="gallery__list-border">
                        <legend class="gallery__legend">Wybierz interesującą cię kategorię:</legend>
                        <div class="gallery__input-container"><input class="gallery__input" type="checkbox" name="renovation" value="bathroom"><label for="bathroom">Bad</label></div>
                        <div class="gallery__input-container"><input class="gallery__input" type="checkbox" name="renovation" value="patio"><label for="patio">Terrasse</label></div>
                        <div class="gallery__input-container"><input class="gallery__input" type="checkbox" name="renovation" value="renovation"><label for="renovation">Garasje & Rom</label></div>
                        <div class="gallery__input-container"><input class="gallery__input" type="checkbox" name="renovation" value="painting"><label for="painting">Takmaling utendørs lub Utendørsmaling</label></div>
                        <button class="gallery__btn" type="reset">Reset</button>
                    </fieldset>
                    <span data-name="all-photo" class="gallery__subtitle"><a href="gallery.php">#Walle bilder
                        </a></span>
                    <span data-name="bathroom" class="gallery__subtitle invisible-content"><a href="gallery.php">#Bad</a></span>
                    <span data-name="patio" class="gallery__subtitle invisible-content"><a href="gallery.php">#Terrasse</a></span>
                    <span data-name="renovation" class="gallery__subtitle invisible-content"><a href="gallery.php">#Garasje & Rom</a></span>
                    <span data-name="painting" class="gallery__subtitle invisible-content"><a href="gallery.php">#Takmaling utendørs lub Utendørsmaling</a></span>
                    <p data-name="all-photo" class="gallery__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa aut dolor totam sed
                        possimus iure modi laborum. Porro consequatur distinctio esse a molestias nulla in error ullam
                        impedit nesciunt.
                        Aut vitae iusto dicta! Reiciendis fuga animi sed, voluptate nulla incidunt, error laborum
                        necessitatibus ea doloribus aliquam praesentium iure placeat quibusdam quis sint quo, officia
                        perspiciatis rerum aperiam eos vel.
                        Iusto, quam! Mollitia quibusdam ea ab necessitatibus odio, adipisci, non nesciunt debitis
                        repellendus ipsa eveniet, quam nihil molestiae! Reiciendis dolorem sunt aut architecto?
                        Consequatur temporibus, quaerat blanditiis vitae consequuntur itaque?
                    </p>
                    <p data-name="bathroom" class="gallery__text invisible-content">
                        Aut vitae iusto dicta! Reiciendis fuga animi sed, voluptate nulla incidunt, error laborum
                        necessitatibus ea doloribus aliquam praesentium iure placeat quibusdam quis sint quo, officia
                        perspiciatis rerum aperiam eos vel.
                    </p>
                    <p data-name="patio" class="gallery__text invisible-content">
                        Iusto, quam! Mollitia quibusdam ea ab necessitatibus odio, adipisci, non nesciunt debitis
                        repellendus ipsa eveniet, quam nihil molestiae! Reiciendis dolorem sunt aut architecto?
                        Consequatur temporibus, quaerat blanditiis vitae consequuntur itaque?
                    </p>
                    <p data-name="renovation" class="gallery__text invisible-content">
                        Aut vitae iusto dicta! Reiciendis fuga animi sed, voluptate nulla incidunt, error laborum
                        necessitatibus ea doloribus aliquam praesentium iure placeat quibusdam quis sint quo, officia
                        perspiciatis rerum aperiam eos vel.
                        Iusto, quam! Mollitia quibusdam ea ab necessitatibus odio, adipisci, non nesciunt debitis
                        repellendus ipsa eveniet, quam nihil molestiae! Reiciendis dolorem sunt aut architecto?
                        Consequatur temporibus, quaerat blanditiis vitae consequuntur itaque?
                    </p>
                    <p data-name="painting" class="gallery__text invisible-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa aut dolor totam sed
                        possimus iure modi laborum. Porro consequatur distinctio esse a molestias nulla in error ullam
                        impedit nesciunt.
                    </p>
                </article>
                </section>
                <div data-name="popup" class="popup hidden">
                    <div class="popup__photo">
                        <button data-name="popup-btn" class="popup__button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-75 -50 470 512">
                                <path fill="teal" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
                            </svg>
                        </button>
                        <figure class="popup__figures">
                            <img lazy="loading" data-name="popup-picture" src="" alt="">
                            <span class="gallery__caption gallery__caption--project"><a href=""></a></span>
                            <figcaption class="gallery__caption"><a href="gallery.php">
                                    #photos of projects</a></figcaption>
                        </figure>
                    </div>
                </div>
                <section class="gallery__masonry">
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-tył-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-tył-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-tył-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-w-trakcie-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-w-trakcie-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-w-trakcie-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-przed-bok-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="">#photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-duże-patio/biały-domek-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-duże-patio/biały-domek-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-po(2)-z-bliska-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-duże-patio/biały-domek-po-z-bliska-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-duże-patio/biały-domek-po-z-bliska-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-z-bliska-(2)-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-duże-patio/biały-domek-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-duże-patio/biały-domek-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/remont-dużej-łazienki-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki-2/remont-dużej-łazienki-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki-2/remont-dużej-łazienki-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/po-remoncie-dużej-łazienki(2)-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki(2)-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki(2)-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/po-remoncie-dużej-łazienki(3)-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki(3)-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki(3)-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/po-remoncie-dużej-łazienki-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki-2/po-remoncie-dużej-łazienki-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/remont-łazienki-w-trakcie-(2)-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki-2/remont-łazienki-w-trakcie-(2)-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki-2/remont-łazienki-w-trakcie-(2)-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/remont-małej-łazienki-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki/remont-małej-łazienki-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki/remont-małej-łazienki-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="bathroom">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/remont-łazienki-w-trakcie-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/remont-łazienki/remont-łazienki-w-trakcie-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/remont-łazienki/remont-łazienki-w-trakcie-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Bath</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/tarasik-przed-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/tarasy/tarasik-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/tarasy/tarasik-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/tarasik-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/tarasy/tarasik-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/tarasy/tarasik-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/taras-kostka-robota-czerwony-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio/taras-kostka-robota-czerwony-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio/taras-kostka-robota-czerwony-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/taras-kostka-po-czerwony-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio/taras-kostka-po-czerwony-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio/taras-kostka-po-czerwony-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/taras-kostka-z-boku-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio/taras-kostka-z-boku-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio/taras-kostka-z-boku-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/patio-przed-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio2/patio-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio2/patio-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/patio-po-bok-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio2/patio-po-bok-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio2/patio-po-bok-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/patio-po-przód-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio2/patio-po-przód-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio2/patio-po-przód-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/czarny-dom-patio-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio3/czarny-dom-patio-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio3/czarny-dom-patio-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/czarny-dom-patio-przed-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/patio3/czarny-dom-patio-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/patio3/czarny-dom-patio-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="renovation">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/pomieszczenie-w-trakcie(2)-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/pomieszczenie/pomieszczenie-w-trakcie(2)-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/pomieszczenie/pomieszczenie-w-trakcie(2)-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#renovation of the room</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="renovation">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/pomieszczenie-w-trakcie-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/pomieszczenie/pomieszczenie-w-trakcie-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/pomieszczenie/pomieszczenie-w-trakcie-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#renovation of the room</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="renovation">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/pomieszczenie-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/pomieszczenie/pomieszczenie-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/pomieszczenie/pomieszczenie-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#renovation of the room</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/taras-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/tarasy/taras-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/tarasy/taras-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/taras-przed-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/tarasy/taras-w-trakcie-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/tarasy/taras-w-trakcie-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-nad-jeziorem-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-nad-jeziorem/biały-domek-nad-jeziorem-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-nad-jeziorem/biały-domek-nad-jeziorem-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/malowanie-domu-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/dom-malowanie/malowanie-domu-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/dom-malowanie/malowanie-domu-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/malowanie-domu-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/dom-malowanie/malowanie-domu-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/dom-malowanie/malowanie-domu-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-nad-jeziorem-tył-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-nad-jeziorem/biały-domek-nad-jeziorem-tył-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-nad-jeziorem/biały-domek-nad-jeziorem-tył-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-okno-po-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-okno/biały-domek-okno-po-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-okno/biały-domek-okno-po-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-okno-przed-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-okno/biały-domek-okno-przed-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-okno/biały-domek-okno-przed-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-przód-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-przód-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-przód-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/biały-domek-patio-tył-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/biały-domek-patio/biały-domek-patio-tył-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/biały-domek-patio/biały-domek-patio-tył-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/czerwony-domek-300-po.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/czerwony-domek/czerwony-domek-500-po.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/czerwony-domek/czerwony-domek-700-po.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="painting">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/czerwony-domek-300-przed.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/czerwony-domek/czerwony-domek-500-przed.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/czerwony-domek/czerwony-domek-700-przed.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Painted</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/kremowy-domek-patio-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/kremowy-domek-patio/kremowy-domek-patio-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/kremowy-domek-patio/kremowy-domek-patio-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>
                    <figure class="gallery__photo ">
                        <picture data-name="images" data-project="patio">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/img-300-small/kremowy-domek-patio-całość-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/kremowy-domek-patio/kremowy-domek-patio-całość-500.jpg" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/kremowy-domek-patio/kremowy-domek-patio-całość-700.jpg" src="https://via.placeholder.com/350" alt="">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="">#Patio</a></span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #photos of projects</a></figcaption>
                    </figure>

                    <figure class="gallery__photo gallery__photo--last" data-404="404">
                        <picture data-name="images">
                            <source media="(max-width: 767px)" data-srcset="./src/img/photo/inne/404-error-300.webp" srcset="">
                            <source media="(min-width: 768px) and (max-width: 992px)" data-srcset="./src/img/photo/inne/404-error-500.png" srcset="">
                            <img lazy="loading" data-src="./src/img/photo/inne//404-error.png" alt="404.error" src="./src/img/photo/inne//404-error.png">
                        </picture>
                        <span class="gallery__caption gallery__caption--project"><a href="https://www.freepik.com/vectors/unavailable">Unavailable vector created by pikisuperstar</a>
                        </span>
                        <figcaption class="gallery__caption"><a href="gallery.php">
                                #404.error</a></figcaption>
                    </figure>
                </section>
                </article>

        </main>
        <footer class="footer wrapper-style">
            <?php include 'footer.php'; ?>
        </footer>
    </div>
    <script type="module" src="./js/parallax.js"></script>
</body>

</html>