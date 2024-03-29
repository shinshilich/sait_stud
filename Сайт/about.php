<?php 
    include "databases.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University-About</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/c2cc11dfc2.js"></script>
            
</head>
<body>
    <section class="subheader">
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
        <h1>Информация для абитуриентов</h1>
    </section>
<!-- About us content-->
<section class="about-us">
    <div class="row">
        <div class="abt-col">
            <h3>Перечень документов, необходимых для подачи в Приемную комиссию для граждан РФ:</h3>
            <p>документ, удостоверяющий личность или документ его заменяющий (копия; 1-2 стр. + прописка);</p>
            <p>документ об образовании установленного образца (копия или оригинал; вкладыш и приложение с оценками полностью);</p>
            <p>документ о смене ФИО (при необходимости);</p>
            <p>документы, подтверждающие льготу (копии; при поступлении по особой квоте);</p>
            <p>документы, подтверждающие получение результатов индивидуальных достижений (копии; при наличии);</p>
            <p>СНИЛС, ИНН;</p>

             <h3>
Перечень документов, необходимых для подачи в Приемную комиссию для иностранных граждан:</h3>
            <p>документ, удостоверяющий личность или документ его заменяющий (копия; 1-2 стр. + прописка);</p>
            <p>документ об образовании установленного образца (копия или оригинал; вкладыш и приложение с оценками полностью);</p>
            <p>заверенные нотариусом переводы документов на русский язык (копии);</p>
            <p>свидетельство о признании документов об образовании (копия);</p>
          
            <a href="Основные даты 2024.pdf" class="hero-btn red-btn">Основные даты приема</a>
            
            <a href="edu.php" class="hero-btn red-btn">Образовательная программа</a>
            <br><br>
            <a href="Стоимость обучения на 2023-2024 учебный год.pdf" class="hero-btn red-btn">Стоимость обучения</a>

            <a href="проходной балл в 2024 году.jpg" class="hero-btn red-btn">Проходной балл</a>
        </div>
        <div class="abt-col">
            <img src="images/about.jpg" alt="">
        </div>
    </div>

</section>

 <section class="cta">
     <h1>Остались вопросы?</h1>
     <a href="contact.php" class="hero-btn">НАШИ КОНТАКТЫ</a>
 </section>


<!---Footer-->
 <section class="footer">
     <h4>О нас</h4>
     <p>Узнайте больше в социальных сетях</p>
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