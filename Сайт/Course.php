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
                    <li><a href="about.php">Общая информация</a></li>
                    <li><a href="entry.php">Студенту</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Наши Преподаватели</h1>
    </section>
<!-- About us content-->
<section class="about-us">
    <div class="row">
        <div class="abt-col">
            <h1>Ларенков Сергей Анатольевич</h1>
            <p>Ученая степень: кандидат физико-математических наук, Астрометрия и мех-ка
                Ученое звание: доцент кафедры </p>
        </div>
        <div class="abt-col">
            <img src="images/pr2.jpg" alt="">
        </div>
    </div>

</section>
<section class="about-us">
    <div class="row">
        <div class="abt-col">
            <h1>Константинова Елизовета Петровна</h1>
            <p>Ученая степень: кандидат физико-математических наук, Астрометрия и мех-ка
               Ученое звание: доцент кафедры  </p>
        </div>
        <div class="abt-col">
            <img src="images/pr1.jpg" alt="">
        </div>
    </div>

</section>
<section class="about-us">
    <div class="row">
        <div class="abt-col">
            <h1>Малышев Георгий Муратович</h1>
            <p>Ученая степень: кандидат физико-математических наук, Астрометрия и мех-ка
                Ученое звание: доцент кафедры </p>
        </div>
        <div class="abt-col">
            <img src="images/pr3.jpg" alt="">
        </div>
    </div>

</section>



<!---Footer-->
<section class="footer">
    <h4>О нас</h4>
    <p>Узнайте больше в социальных сетях</p>
    <div class="icons">
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-google"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-linkedin"></i>
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