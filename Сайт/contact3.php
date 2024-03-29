<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>University-Contact</title>
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
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="entry.php">Студенту</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Свяжитесь с нами</h1>
    </section>
<!--Contact Us-->
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>Адрес</h5>
                        <p>г.Казань
                            ул.Красносельская 
                            д.51
                        </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+7 937 9147182</h5>
                        <p> ПН - СБ с 8:00 до 17:00 </p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>nashapochta@gmail.com</h5>
                        <p>Пишите</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="form.php" method="post">
                    <input type="text" name="name" placeholder="Введите имя"reqired>
                    <input type="email" name="email" placeholder="Введите почту"reqired>
                    <input type="text" name="subject" placeholder="Введите тему вопроса"reqired>
                    <textarea rows="8" name="message" placeholder="Сообщение" required></textarea>
                    <button type="submit" class="hero-btn red-btn">
                        Отправить
                    </button>
                    <h4 style="#F40909">Заполните все поля!</h4>
                </form>

            </div>
        </div>


    </section>
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.761317800124!2d49.092136076786986!3d55.814743973107284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415952b53fab08af%3A0x51703e0872e60d8b!2z0JrQsNC30LDQvdGB0LrQuNC5INCz0L7RgdGD0LTQsNGA0YHRgtCy0LXQvdC90YvQuSDRjdC90LXRgNCz0LXRgtC40YfQtdGB0LrQuNC5INGD0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sru!2sru!4v1703526987649!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
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