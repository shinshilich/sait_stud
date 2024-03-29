<?php 
    include "databases.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University Website Design</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/c2cc11dfc2.js"></script>
            
</head>
<body>
    <section class="header">
        <nav>
            <a href="Index.php"><img src="images/logo.png" alt=""></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Index.php">Главная</a></li>
                    <li><a href="about.php">Для абитуриентов</a></li>
                    <li><a href="entry.php">Студенту</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="textbox">
        <h1>Лучший университет в мире!</h1>
        <p>Добро пожаловать!
        </p>
        <a href="about.php" class="hero-btn">Посетите нас, чтобы узнать больше!</a>
    </div>
    </section>
    <!------- course --------->
    <section class="course">
        <h1>Наши институты </h1>
        <div class="row">
            <div class="course-col">
                <h3>ИЦТЭ</h3>
                <p>Институт цифровых технологий и экономики.Институт был создан с целью объединения инженерно-технических, экономических и социально-гуманитарных направлений высшего университетского образования, сопряженной с задачами подготовки кадров для отраслей экономики. </p>
            </div>
            <div class="course-col">
                <h3>ИТЭ</h3>
                <p>Институт теплоэнергетики.Занимает ведущие позиции среди институтов и факультетов высших учебных заведений России, готовящих кадры для большой и малой энергетики.</p>
            </div>
            <div class="course-col">
                <h3>ИЭЭ</h3>
                <p>Институт электроэнергетики и электроники. Институт готовит бакалавров по 4 направлениям и 17 профилям(электроэнергетика и электротехника,техносферная безопасность,химическая технология и т.д.)</p>
            </div>

        </div>

    </section>
    <!----------------campus------------->
    <section class="campus">
        <h1>Наши корпуса</h1>
        <p>Наш университет является одним из трех специализированных энергетических вузов в стране  и занимает одно из ведущих мест в регионе по уровню образования, технической оснащенности и условиям для научной работы и учебного процесса</p>

        <div class="row">
             <div class="campus-col">
                 <img src="images/london.png" alt="">
                 <div class="layer">
                     <h3>Корпус А</h3>
                 </div>
             </div>
             <div class="campus-col">
                 <img src="images/newyork.png" alt="">
                 <div class="layer">
                     <h3>Корпус Б</h3>
                 </div>
             </div>
             <div class="campus-col">
                 <img src="images/washington.png" alt="">
                 <div class="layer">
                     <h3>Корпус В</h3>
                 </div>
             </div>
        </div>
    </section>
<!----Facitilites----------------->
<section class="facilities">
    <h1>Наши дополнения</h1>
    <p>Оборудование, которое мы предоставляем нашему студенту, является самым современным в стране и каждый год пересматривается на предмет неисправностей </p>
    <div class="row">
        <div class="fac-col">
            <img src="images/library.png" alt="">
            <h3>БИБЛИОТЕКА</h3>
            <P>БИБЛИОТЕКА НАШЕГО УНИВЕРСИТЕТА РАСПОЛАГАЕТ ОГРОМНЫМ КОЛИЧЕСТВОМ МАТЕРИАЛА КАК В БУМАЖНОМ, ТАК И В ЭЛЕКТРОННОМ ВАРИАНТАХ</P>
        </div>
        <div class="fac-col">
            <img src="images/basketball.png" alt="">
            <h3>СПОРТЗАЛ</h3>
            <P>НАШ СПОРТЗАЛ ОСНАЩЕН ВСЕМ НЕОБХОДИМЫМ ОБОРУДОВАНИЕМ И СНАРЯЖЕНИЕМ</P>
        </div>
        <div class="fac-col">
            <img src="images/cafeteria.png" alt="">
            <h3>САМЫЕ ВКУСНЫЕ СТОЛОВЫЕ</h3>
            <P>СТОЛОВЫЕ В НАШЕМ УНИВЕРСИТЕТА УСТРОЕНЫ ТАКИМ ОБРАЗОМ, ЧТО СТУДЕНТЫ МОГУТ НАЙТИ ТАМ ЛЮБУЮ ЕДУ, КОТОРАЯ ИМ ПОНРАВИТСЯ</P>
        </div>
    </div>
</section>
<!---testimonials---------------->
<section class="test">
    <h1>Отзывы</h1>
    <p>Отзывы наших выпускников</p>
    <div class="row">
        <div class="test-col">
            <img src="images/user1.jpg" alt="">
            <div><p>Удобства, предоставляемые университетом, на высшем уровне, и с этим у вас не возникнет проблем.</p>
                <h3>Васнецова Лидия</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="test-col">
            <img src="images/user2.jpg" alt="">
            <div><p>Огромный спортзал, предоставляющий возможность для спортивного роста</p>
                <h3>Шилов Константин</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
</section>
<!--call to action -->
 <section class="cta">
     <h1>Подайте заявку на поступление <br>из любой точки мира</h1>
     <a href="contact.php" class="hero-btn">НАШИ КОНТАКТЫ</a>
 </section>
 <!---Footer-->
 <section class="footer">
     <h4>О нас</h4>
     <p>Узнавайте о наших событиях из соцсетей</p>
     <div class="icons">
     <a href="https://kgeu.ru/"><i class="fa fa-facebook"></i></a>
     <a href="https://kgeu.ru/"><i class="fa fa-twitter"></i></a>
     <a href="https://kgeu.ru/"><i class="fa fa-google"></i></a>
     <a href="https://kgeu.ru/"><i class="fa fa-instagram"></i></a>
     <a href="https://kgeu.ru/"><i class="fa fa-linkedin"></i></a>
     </div>
     </section>

    <!--- javascript code from here---> 
    <script>
        var navlinks=document.getElementById("navlinks");
        function showMenu()
        {
            navlinks.style.right="0";
        }
        function hideMenu()
        {
            navlinks.style.right="-200px";
        }

    </script>
</body>
</html>