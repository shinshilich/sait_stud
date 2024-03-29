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
    </section>
<section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <form action="login.php" method="post">
                    <input type="text" name="login" placeholder="Введите логин"reqired>
                    <input type="text" name="pass" placeholder="Введите пароль"reqired>
                    <button type="submit" class="hero-btn red-btn">
                        Войти
                    </button>
                    <h4>Заполните все поля!</h4>
                </form>

            </div>
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

</body>
</html>