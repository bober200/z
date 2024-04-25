<?
include ('connect.php');

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="header-content">
                    <a href="" class="logo"><h1>logo</h1></a>
                    <ul class="header-menu">
                        <li class="header-link-main">
                            <a href="">Главная</a>
                        </li>
                        <li class="header-link-main">
                            <a href="" class="">Контакты</a>
                        </li>
                        <li class="header-link-main">
                            <a href="" class="">Каталог</a>
                        </li>
                    </ul>
                    <div class="btnm">
                    <button class="sign"><a href="avto.php">Вход</a></button>
                    <button class="sign"><a href="reg.php">Регистрация</a></button></div>
                </div>
            </div>
        </div>
    </header>
<hr>

    <div class="main" id="dost">
        <div class="container">
            <h1 class="title">заголовок</h1>
            <div class="slider">
                <div class="slides">
                    <div class="slide active"><img src="./img/first.jpg" alt=""></div>
                    <div class="slide"><img src="./img/second.jpg" alt=""></div>
                    <div class="slide"><img src="./img/third.jpg" alt=""></div>
                </div>
                <div class="dots">
                    <dot class="dot active"></dot>
                    <dot class="dot"></dot>
                    <dot class="dot"></dot>
                </div>
            </div>
        </div>
    </div>
       <section>
        <div class="catalog">
            <div class="container">
                <h1 class="title">Каталог</h1>
                <div class="catalog-content">
                    <div class="catalog-item">
                    <?php
                    $product = mysqli_query($connect, query:"SELECT * FROM `product`");
                    $product= mysqli_fetch_all($product);
                    foreach($product as $products){
                    ?>
                        <div class="catalog-card">
                            <img src="./img/железный магнит.jpg" alt="" class="card-img">
                            <div class="card-txt">
                                <p class="name"><?= $products[1]?></p>
                                <p class="price"><?= $products[3]?></p>
                             <a href="product.php?id=<?= $products[0]?>">view</a>
                             <button><a href="edit.php?id=<?= $products[0]?>">update</a></button>
                            <button><a href="delete.php?id=<?= $products[0]?>">delete</a></button>
                            <button><a href="formadd.php">add</a></button>
                            </div>
                        </div>
                        <?
        }
        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="accordion-div">
            <div class="container">
                <h1 class="title">Анонсы и свежие события</h1>
                <div class="accordion-content">
                    <div class="accordion-lines">
                        <div class="accordion-line">
                            <div class="accordion-question">
                                <H1 class="ac-title">Анонс Главного Художественного События:</H1>
                                <button class="accordion-button">+</button>
                            </div>
                        </div>
                        <div class="accordion">
                            <p class="subtitle">"ИскусствоФест" гордится представлением главного художественного события, которое станет кульминацией фестиваля. Анонсирование этого мероприятия сопровождается тизерами и визуальными элементами, создавая ожидание и волнение у посетителей. Детали о главном художественном событии раскрываются постепенно, поддерживая интерес и вызывая желание узнать больше.
                            </p>
                        </div>
                        <div class="accordion-line">
                            <div class="accordion-question">
                                <H1 class="ac-title">Специальные Выступления и Известные Гости:</H1>
                                <button class="accordion-button">+</button>
                            </div>
                        </div>
                        <div class="accordion">
                            <p class="subtitle">Анонсы выступлений известных артистов, музыкантов или актеров создают бурю эмоций. Посетители фестиваля узнают о том, кто появится на сцене, и получат информацию о том, какие уникальные представления и встречи будут доступны. Эти анонсы не только привлекают публику, но и создают атмосферу предвкушения.</p>
                        </div>
                        <div class="accordion-line">
                            <div class="accordion-question">
                                <H1 class="ac-title">
                                    Мастер-классы и Образовательные События:</H1>
                                <button class="accordion-button">+</button>
                            </div>
                        </div>
                        <div class="accordion">
                            <p class="subtitle">Анонсы образовательных событий и мастер-классов позволяют посетителям фестиваля узнать о возможности учиться у профессионалов. Информация о том, какие именно образовательные мероприятия будут доступны, создает интерес у тех, кто хочет расширить свои навыки и погрузиться в творческий процесс.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer">
            <div class="container">
                <div class="footer-item">
                    <a href=""><p class="subtitle">CityGuide</p></a>
                    <div class="footer-content">
                        <ul class="footer-menu">
                            <li><a href="#" class="head-link">Главная</a></li>
                            <li><a href="#" class="head-link">Каталог</a></li>
                        </ul>
                    </div>
                    <a href=""><p class="subtitle">Иванов Никита</p></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>